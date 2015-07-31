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


get('register','RegisterController@register');
post('register','RegisterController@postRegister');
get('register/confirm/{token}','RegisterController@confirm');

get('about-us',function(){

	return "About Us";
});

get('/', function () {
    return view('master');
	//return "Laravel 5";
});

get('login','RegisterController@login');
post('login','RegisterController@postLogin');
Route::resource('departments','DepartmentController');
Route::resource('holidays','HolidayController');
