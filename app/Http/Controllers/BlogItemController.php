<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogItem;
use Carbon\Carbon;

class BlogItemController extends Controller
{
    public function show() {

        $blogitem = \App\BlogItem::simplePaginate(6);

        $now = new Carbon();
    
        return view('landing', [
    
            'items' => $blogitem,
            'time' => $now,
    
        ]);
    }
    
    public function blog_id($id) {

        $blogitem = \App\BlogItem::find($id);
    
    
        return view('blog', [
    
            'blogbody' => $blogitem->body,
            'blogtitle' => $blogitem->title,
    
        ]);
    }

    public function contacts() {

        return view('contacts');
    }    
}
