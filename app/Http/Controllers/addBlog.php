<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addBlog extends Controller
{
    public function create(Request $request)
{

  $post = Auth::user()->posts()->create($request->validate([
    'title' => 'required|string',
    'body'  => 'required|string',
  ]));

  return redirect()->route('post', $post);
}
}
