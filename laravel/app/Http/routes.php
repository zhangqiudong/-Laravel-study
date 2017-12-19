<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('name/{name}/{age}',function($name,$age){
//    return 'Im '.$name.'Im'.$age.'years old';
//});

Route::get('name/','UserController@name');
Route::get('home/','HomeController@home');

Route::get('/young/{age}','UserController@young')-> middleware('young');

Route::get('error',function (){
    return view('errors.503');
});

//home page
Route::get('/','StaticPagesController@home')->name("home");
Route::get('/about','StaticPagesController@about')->name("about");

