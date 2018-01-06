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

// Customer Facing Routes

Route::get('/', 'MainController@index')->name('main');

Route::get('/events', 'EventController@index')->name('events');

Route::get('/coffee', 'CoffeeController@index')->name('coffee');

Route::get('/contact', 'ContactController@index')->name('contact');



Auth::routes();


// Employee Only Routes

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/newevent', 'HomeController@index2')->name('newevent');

Route::get('/subhome', 'HomeController@index3')->name('subhome');

Route::get('/home/newevent/{id}', 'HomeController@new_event');

Route::post('/post-route', 'HomeController@store_event');

