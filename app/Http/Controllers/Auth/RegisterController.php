<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Product; 
use App\Models\UserProduct; 
use App\Models\PdfDownload; 
use Event;
use App\Events\SendMail;
use Mail;
use PDF;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;



    public function showRegistrationForm()
    {
        $products = Product::all();
        return view('auth.register',compact('products'));
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'products' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {


        $user_insert  =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);


        $userProduct = UserProduct::create([
            'user_id' => $user_insert->id,
            'product_id' => $data['products'],
        ]);

        $user = User::with('products.product','pdf')->find($user_insert->id); 


        $pdf = PDF::loadView('emails.pdf', array('data'=>$user->toArray()));

        $filename = time()."generatedpdf.pdf";
        $pdf->setOptions(['isPhpEnabled' => true,'isRemoteEnabled' => true]);
        $pdf->save('pdf/'.$filename);


        $p = new PdfDownload;
        $p->user_id = $user->id;
        $p->token = str_random(16);
        $p->pdf = $filename;
        $p->no_of_download = 0;
        $p->save();


        $user2 = User::with('products.product','pdf')->find($user->id); 

        Event::dispatch(new SendMail($user2));
     

        return $user_insert;

    }
}
