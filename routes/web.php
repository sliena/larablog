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

Route::get('/', 'BlogItemController@show');

Route::get('/blog/{id}', 'BlogItemController@blog_id');

Route::get('/contacts', 'BlogItemController@contacts');

Route::post('/contacts', 'FormController@save_form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/edit', 'BlogItemController@edit')->middleware('auth');

Route::post('/edit', 'BlogItemController@post_blog')->middleware('auth');

Route::post('/', 'BlogItemController@thumbs_up');
