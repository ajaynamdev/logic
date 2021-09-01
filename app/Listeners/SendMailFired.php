<?php

namespace App\Listeners;

use App\Events\SendMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use PDF;

class SendMailFired
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    public $email;
    public $pdf;

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendMail  $event
     * @return void
     */
    public function handle(SendMail $event)
    {  


        $data = [
          'data' => $event->data,   
            ];

        $this->email = $event->data['email'];
        // $this->pdf = PDF::loadView('emails.pdf', $data)->setPaper('a4'); 
         Mail::send('emails.welcomeMail', $data, function($message){
            $message->to($this->email)->subject('Welcome');
            $message->from('namdev.ajay2@gmail.com','Website Name');
        });
            // $message->attachData($this->pdf->output(),'invoice.pdf');
    }
}
