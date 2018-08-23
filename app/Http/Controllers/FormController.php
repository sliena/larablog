<?php

namespace App\Http\Controllers;

use App\Mail\Larablog;
use App\Mail\Confirmation;
use Illuminate\Http\Request;
use Mail;


class FormController extends Controller
{
    public function save_form() 
    {

        $user = new \App\contact; 
        $user->name = \Request('name');
        $user->surname = \Request('surname');
        $user->email = \Request('email');
        $user->textarea = \Request('textarea');
    
        $user->save();

        $var = \Request('email');

        Mail::to($var)->send(new Larablog());

        Mail::to('rcstestmail69@gmail.com')->send(new Confirmation());

        return redirect('/contacts');
    }
       
}





/*$title = $request->input('name');
        $content = $request->input('textarea');

        Mail::send('emails.contact', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('zebrasdesa@gmail.com', 'Christian Nwamba');

            $message->to('chrisn@scotch.io');

        });

        /*return response()->json(['message' => 'Request completed']);*/

        /*$data = array(
            'email'=> $user->email,
            'name' => $user->name,
            'textarea' => $user->textarea,
        ); 

        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->from($data['email']);
            $message->to('zebrasdesa@gmail.com');
            $message->subject($data['textarea']); 
        });*/
