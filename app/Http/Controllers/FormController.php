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

