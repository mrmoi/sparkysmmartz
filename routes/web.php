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

Route::post('/post-message', 'ContactController@store_message');


// There are no links that go to 'home'
//Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();


// Employee Only Routes

// This should be in the new-event controller

//Route::get('/home/newevent/{id}', 'HomeController@new_event');

Route::get('/subhome', 'SubHomeController@index')->name('subhome');

Route::get('/newevent', 'NewEventController@index')->name('newevent');

Route::post('/post-route', 'NewEventController@store_event');




