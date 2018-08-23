<?php

namespace App\Http\Controllers;

use App\Mail\Mailtrap;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{

    /*public function send() {
        Mail::to('zebrasdesa@gmail.com')->send(new Mailtrap());
    }




    /*public function send() {
        Mail::send(['text'=>'emails.contact'],['name','ed'], function($message) {
            $message->to('anothe@test.zb','to me')->subject('test email');
            $message->from('same@thing.zb', 'from me');
        });
    }

    public function send(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('me@gmail.com', 'Christian Nwamba');

            $message->to('chrisn@scotch.io');

        });

        return response()->json(['message' => 'Request completed']);        
    }*/
}
