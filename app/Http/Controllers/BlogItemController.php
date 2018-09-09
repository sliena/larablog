<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogItem;
use Carbon\Carbon;

class BlogItemController extends Controller
{
    public function show() {

        $blogitem = \App\BlogItem::orderBy('created_at', 'desc')->paginate(6);

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
            'blogimage' =>$blogitem->imgurl,
            'thumbsUp' =>$blogitem->thumbs_up,
            'thumbsDown' =>$blogitem->thumbs_down,
    
        ]);
    }

    public function contacts() {

        return view('contacts');
    }    

    public function edit() {
        return view('edit');
    }

    public function post_blog() {

        $blog = new \App\Blogitem;

        $blog->title = \Request('title');
        $blog->body = \Request('body');
        $blog->imgurl = \Request('imgurl');

        $blog->save();

        return redirect('/');

    }
}
