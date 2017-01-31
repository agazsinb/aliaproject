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

Route::get('en/deluxe', function (){
	return view('template_fix/deluxe');
});

Route::get('id/deluxe', function (){
	return view('template_fix/deluxeind');
});

Route::get('en/executive-family', function (){
	return view('template_fix/exfamily');
});

Route::get('en/family', function (){
	return view('template_fix/family');
});

Route::get('en/room-reservation', function (){
	return view('template_fix/roomreservation');
});

Route::post('en/room-reservation-auth', function (){
	$file = base_path('resources/views/template_fix/roomresvemail.blade.php');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pnumb = $_POST['pnumb'];
	$cusemail = $_POST['cusemail'];
	$cusadrs = $_POST['cusadrs'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$guests = $_POST['guests'];
	$room = $_POST['room'];
	$numofrooms = $_POST['numofrooms'];
	$payment = $_POST['payment'];

	$content = '
	<html>
	<body>

	<b>CONTACT INFORMATION</b> <br>
	First Name: '. $fname. '<br>
	Last Name: '. $lname. '<br>
	Phone Number: '. $pnumb. '<br>
	Email Address: '. $cusemail. '<br>
	Address: '. $cusadrs. '<br>
	<br>
	<b>ROOM INFORMATION</b> <br>
	Check in Date: '. $checkin. '<br>
	Check out Date: '.$checkout. '<br>
	Number of Guests: '. $guests. '<br>
	Room Selection: '. $room. '<br>
	Number of Rooms: '. $numofrooms. '<br>
	Payment Type: '. $payment. '

	</body>
	</html>
	';

	file_put_contents($file, $content);
	Mail::send('template_fix/roomresvemail',[], function ($m) {
		$m->to('hotelalia.test@gmail.com', 'Hotel Alia')->subject('Room Reservation');
	});
	return redirect('en/room-reservation');
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
	$epurpose = $_POST['epurpose'];
	$room = $_POST['room'];
	$attendees = $_POST['attendees'];
	$roomcount = $_POST['roomcount'];
	$startdate = $_POST['startdate'];
	$enddate = $_POST['enddate'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pnumb = $_POST['pnumb'];
	$meetingemail  = $_POST['meetingemail'];
	$company = $_POST['company'];

	$content = '
	<html>
	<body>

	<b>EVENT INFORMATION</b> <br>
	Event Name: '. $ename. '<br>
	Event Purpose: '. $epurpose. '<br>
	Meeting Room Selection: '. $room. '<br>
	Estimated Number Of Attendees: '. $attendees. '<br>
	Estimated Guest Room Count: '. $roomcount. '<br>
	Event Start Dates: '. $startdate. '<br>
	Event End Dates: '. $enddate. '<br><br>

	<b>CONTACT INFORMATION</b> <br>
	First Name: '. $fname. '<br>
	Last Name: '.$lname. '<br>
	Phone Number: '. $pnumb. '<br>
	Email Address: '. $meetingemail. '<br>
	Company/Association: '. $company. '

	</body>
	</html>';

	file_put_contents($file, $content);
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
