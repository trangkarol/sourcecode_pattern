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
	// dd(MyFuncs::full_name());	
    return view('welcome');
});

// Admin page ,'middleware' => 'auth'
Route::group(['prefix' => 'admin','namespace'=>'Admin'], function () {
	Route::resource('/home','HomeController');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
