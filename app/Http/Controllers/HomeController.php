<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PdfDownload; 
use Response;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }




    public function download_pdf(Request $request,$id,$token){




        $data = PdfDownload::where('user_id',$id)->where('token',$token)->first();

        if($data){

            if($data->no_of_download > 2){

                abort('404');
            }else{

                $data->no_of_download = $data->no_of_download + 1;
                $data->update();

                $file= public_path(). "/pdf/".$data->pdf;

                $headers = array(
                  'Content-Type: application/pdf',
                );

                return Response::download($file, 'user_welcome.pdf', $headers);

            }

        }else{

            abort(404);
        }




    }
}
