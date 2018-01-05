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
    return view('main');
})->name('main');


Route::get('/coffee', function () {
    return view('coffee');
})->name('coffee');


Route::get('/events', function () {
    return view('events');
})->name('events');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/newevent/{id}', 'HomeController@new_event');

Route::post('/post-route', 'HomeController@store_event');
