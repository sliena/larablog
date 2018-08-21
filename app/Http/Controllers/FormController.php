<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function save_form() {

        $user = new \App\users; 
        $user->name = \Request('name', 'NOTHING WAS WRITTEN');
        $user->surname = \Request('surname', 'empty');
        $user->email = \Request('email', 'empty');
        $user->textarea = \Request('textarea', 'empty');

        
    
        $user->save();
    
        return redirect('/contacts');
    
        }
}
