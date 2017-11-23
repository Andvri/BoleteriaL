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
use App\Http\Middleware\AccessRole;
Route::get('/', "IndexController@index");

//Tickets Routes
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dTicket/{id}', "IndexController@dTicket");
    Route::get('/aTicket', "IndexController@aTicket");
    Route::post('/aTicket/create', "IndexController@createTicket");
    Route::get('/eTicket/{id}', "IndexController@eTicket");
});


//Events Routes
Route::group(['middleware' => ['auth',AccessRole::class]], function(){
    Route::get('/dEvent/{id}', "IndexController@dEvent")->middleware('auth');
    Route::get('/aEvent', "IndexController@aEvent")->middleware('auth');
    Route::post('/aEvent/create', "IndexController@createEvent")->middleware('auth');
    Route::get('/eEvent/{id}', "IndexController@eEvent")->middleware('auth');
});

//Auth Routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
