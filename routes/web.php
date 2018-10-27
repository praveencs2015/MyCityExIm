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
    return view('aboutMyCity');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contactQuery', 'HomeController@postQuery');
Route::get('/education', function () {
    return view('education');
});
Route::get('/peelAway', function () {
    return view('peelAway');
});
Route::get('/blog', function () {
    return view('blog');
});
