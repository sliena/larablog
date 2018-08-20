<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogItem;

class BlogItemController extends Controller
{
    public function show() {

        $blogitem = \App\BlogItem::simplePaginate(6);
    
        return view('landing', [
    
            'items' => $blogitem,
    
        ]);
    }
    public function blogId($id) {

        $blogitem = \App\BlogItem::find($id);
    
    
        return view('blog', [
    
            'blogbody' => $blogitem->body,
            'blogtitle' => $blogitem->title,
    
        ]);
    }
}
