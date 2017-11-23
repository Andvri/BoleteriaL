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

Route::get('/', "IndexController@index");

//Tickets Routes

Route::get('/dTicket/{id}', "IndexController@dTicket");
Route::get('/aTicket', "IndexController@aTicket");
Route::post('/aTicket/create', "IndexController@createTicket");
Route::get('/eTicket/{id}', "IndexController@eTicket");

//Events Routes

Route::get('/dEvent/{id}', "IndexController@dEvent");
Route::get('/aEvent', "IndexController@aEvent");
Route::post('/aEvent/create', "IndexController@createEvent");
Route::get('/eEvent/{id}', "IndexController@eEvent");


//Auth Routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
