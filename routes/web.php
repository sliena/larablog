<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $blogitem = \App\BlogItem::get();

    return view('landing', [

        'items' => $blogitem,

    ]);
});

Route::get('/blog/{id}', function ($id) {

    $blogitem = \App\BlogItem::find($id);


    return view('blog', [

        'blogbody' => $blogitem->body,
        'blogtitle' => $blogitem->title,

    ]);
});
