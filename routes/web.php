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


// Route::get('/users/{id}/{name}',function($id,$name){
//     return "this is ".$name." with id ".$id;  //url: 127.0.0.1:8000/users/4/amitoj
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::resource('posts','PostsController');


Auth::routes();

Route::get('/home', 'HomeController@index');
