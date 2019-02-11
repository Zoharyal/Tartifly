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

Route::get('/', 'PageController@home');

Route::get('/about', 'PageController@about');

// Message
Route::get('/messages', function () {
    return view('messages');
});

Route::get('/messages/{id}', function ($id) {
    return "messages ".$id;
});

// Voyages
Route::get('/voyages', 'VoyageController@index');

Route::get('/voyages/{id}', 'VoyageController@show');

//Admin
Route::get('/admin/voyages', function () {
    echo "Voyages";
});

Route::get('/admin/voyages/{id}', function ($id) {
    return "admin Voyages".$id;
});


// parametre vue

//Route::get('/test/{id}', function () {
  //  return view('site/welcome', ['id' = '$id']);
//});


