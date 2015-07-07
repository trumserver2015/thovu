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

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'HomeController@index');
Route::get('/gioi-thieu', 'HomeController@about');
Route::get('/dich-vu', 'HomeController@services');
Route::get('/mau-san-pham', 'HomeController@portolio');
Route::get('/lien-he', 'HomeController@contact');
Route::get('/tin-tuc', 'HomeController@news');
Route::get('/bao-gia', 'HomeController@pricing');
Route::get('/san-pham/bang-keo', 'HomeController@tapes');
Route::get('/gioi-thieu-cong-ty', 'HomeController@straps');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
