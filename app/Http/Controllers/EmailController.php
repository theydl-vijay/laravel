<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;



class EmailController extends Controller
{
    
    public function mail(){
        return view('mail');
    }

    public function Email(Request $request){

        $user = $request->input('email');

        $details = [
            'body' => 'Laravel Notification Testing',
            'mailtext' => 'First Testing',
            'url' => url('/'),
            'thank you' => 'thank You for using laravel'
        ];

        \Mail::to($user)->send(new \App\Mail\MyTestMail($details));
        dd("Email is Sent.");
    }
}
