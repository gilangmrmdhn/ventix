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

Auth::routes();



Route::group(["middleware" => "auth"], function(){
	Route::get('/admin', 'AdminController@index');

	Route::get('/admin/events', 'AdminController@events');
	Route::delete('/admin/events/{id}', 'AdminController@delEvents');

	Route::get('/admin/tickets', 'AdminController@tickets');
	Route::post('/admin/tickets', 'AdminController@uploadTicket');
	Route::delete('/admin/tickets/{id}', 'AdminController@delTickets');

	Route::get('/admin/verif', 'AdminController@verif');
	Route::get('/admin/verifikasi/{id}', 'AdminController@verified');
	Route::delete('/admin/verif/{id}', 'AdminController@notVerif');

	Route::get('/add-event', 'PagesController@addEvent');

	Route::post('/add-event', 'PagesController@storeEvent');
});

Route::get('/event', 'EventController@all');

Route::get('/search', 'SearchController@search');
Route::get('/', 'PagesController@home');

Route::get('/{id}', 'EventController@show');