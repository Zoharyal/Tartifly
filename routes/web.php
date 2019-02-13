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

Route::prefix('admin')->group(function() {
    Route::get('voyages', 'AdminController@index')->middleware('admin');
    Route::get('voyages/{id}', 'AdminController@show')->middleware('admin');
    Route::post('search', 'AdminController@search')->name('search');
    Route::get('create', 'AdminController@create')->middleware('auth');
    Route::post('store', 'AdminController@store')->name('store')->middleware('auth');
    Route::put('voyages/{id}/edit', 'AdminController@edit')->name('edit')->middleware('auth');
});


// parametre vue

//Route::get('/test/{id}', function () {
  //  return view('site/welcome', ['id' = '$id']);
//});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
