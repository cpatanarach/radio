<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function () {    
	Route::auth();
	// GET Route
	Route::get('/', 'HomeController@index');
	Route::get('/verify', 'HomeController@verify');
	Route::get('/verifyCode', 'HomeController@verifyCode');
	Route::get('/prifile/{id}', 'ProfileController@index');
	Route::get('/security/{id}', 'ProfileController@security');
	Route::get('/profile/{id}', 'ProfileController@index');
	Route::get('/receipt', 'ReceiptController@index');
	// POST Route
	Route::post('/change_password', 'ProfileController@passwordUpdate');
	Route::post('/change_email', 'ProfileController@emailUpdate');
	Route::post('/save_email', 'ProfileController@saveEmail');
	Route::post('/update_profile', 'ProfileController@update');
	Route::post('/send_receipt', 'ReceiptController@store');
});