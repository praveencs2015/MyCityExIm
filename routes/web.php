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
Route::get('/', 'HomeController@getHomePage');
Route::get('/unified', 'HomeController@getUnifiedPlatform');
Route::get('/SaveVisitor', 'HomeController@SaveVistorData');
Route::get('/ProductOverview', 'HomeController@getProductOverview');
Route::post('/pgRedirect', 'HomeController@getpgRedirect');
Route::post('/payment/status', 'HomeController@getpgResponse');
Route::post('/CheckOut', 'HomeController@getCheckOut');
Route::post('/transaction', 'HomeController@gettransactionStatus');

Route::get('/about', function () {
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
Route::get('/productDetails/{id}', 'HomeController@GetproductDetails');
Route::get('/detailedCart/{id}', 'HomeController@detailedCart');
Route::post('/AddCartItem', 'HomeController@AddCartItem');
Route::get('/AddCartItem', 'HomeController@AddCartItemGet');
Route::get('/AddCartItem/{empty}', 'HomeController@AddCartItemEmpty');
// Route::get('/productDetails/{id}', function () {
//     return view('productDetails');
// });
