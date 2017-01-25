<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//View::addExtension('html', 'php');

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function (){
	return view('template/index');
});

Route::get('mail', function (){
	//dd(Config::get('mail'));
	Mail::send('template/mail/test',[], function ($m) {
		$m->to('hotelalia.test@gmail.com', 'Hotel Alia')->subject('Hotel Alia Mail Test');
	});
	return "MAIL SENT!";
});
