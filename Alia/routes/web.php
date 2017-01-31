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

Route::get('meeting-reservation', function (){
	return view('template/meetingreservation');
});

Route::post('mail', function (){
	//dd(Config::get('mail'));
	$file = base_path('resources/views/template/meetingresvemail.blade.php');
	$ename = $_POST['ename'];
	file_put_contents($file, str_replace('ename', $ename, file_get_contents($file)));
	Mail::send('template/meetingresvemail',[], function ($m) {
		$m->to('hotelalia.test@gmail.com', 'Hotel Alia')->subject('Hotel Alia Mail Test');
	});
	return "MAIL SENT!";
});

Route::post('test', function (){
	$data = $_POST;
	$ename = $data['ename'];
	return $ename;
});
