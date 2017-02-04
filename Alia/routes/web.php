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

Route::get('en', function (){
	return view('template_fix/index2');
});

Route::get('id', function(){
	return view('template_fix/indexind');
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

Route::get('id/executive-family', function (){
	return view('template_fix/exfamilyind');
});

Route::get('en/family', function (){
	return view('template_fix/family');
});

Route::get('id/family', function (){
	return view('template_fix/familyind');
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
		$m->to('reservasi@grenaliaprapatanhotel.com', 'Hotel Alia')->subject('Room Reservation');
	});

	Mail::send('template_fix/roomresvemail',[], function ($m) {
		$m->to($_POST['cusemail'], 'Hotel Alia')->subject('Room Reservation');
	});

	return redirect('en/room-reservation');
});

Route::get('id/room-reservation', function (){
	return view('template_fix/roomreservationind');
});

Route::post('id/room-reservation-auth', function (){
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
		$m->to('reservasi@grenaliaprapatanhotel.com', 'Hotel Alia')->subject('Room Reservation');
	});

	Mail::send('template_fix/roomresvemail',[], function ($m) {
		$m->to($_POST['cusemail'], 'Hotel Alia')->subject('Room Reservation');
	});

	return redirect('id/room-reservation');
});

Route::get('en/feedback', function (){
	return view('template_fix/feedback');
});

Route::post('en/feedback-auth', function (){
	$file = base_path('resources/views/template_fix/feedbackemail.blade.php');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$meetingemail = $_POST['meetingemail'];
	$message = $_POST['message'];

	$content = '
	<html>
	<body>

	First Name: '. $fname. '<br>
	Last Name: '. $lname. '<br>
	Email Address: '. $meetingemail. '<br>
	Message: '. $message. '<br>

	</body>
	</html>
	';

	file_put_contents($file, $content);
	Mail::send('template_fix/feedbackemail',[], function ($m) {
		$m->to('management@grenaliaprapatanhotel.com', 'Hotel Alia')->subject('Feedback');
	});

	return redirect('en/feedback');
});

Route::get('id/feedback', function (){
	return view('template_fix/feedbackind');
});

Route::post('id/feedback-auth', function (){
	$file = base_path('resources/views/template_fix/feedbackemail.blade.php');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$meetingemail = $_POST['meetingemail'];
	$message = $_POST['message'];

	$content = '
	<html>
	<body>

	First Name: '. $fname. '<br>
	Last Name: '. $lname. '<br>
	Email Address: '. $meetingemail. '<br>
	Message: '. $message. '<br>

	</body>
	</html>
	';

	file_put_contents($file, $content);
	Mail::send('template_fix/feedbackemail',[], function ($m) {
		$m->to('management@grenaliaprapatanhotel.com', 'Hotel Alia')->subject('Feedback');
	});

	return redirect('id/feedback');
});

Route::get('en/gallery', function (){
	return view('template_fix/gallery');
});

Route::get('id/gallery', function (){
	return view('template_fix/galleryind');
});

Route::get('index', function (){
	return view('template/index');
});

Route::get('en/meetings', function (){
	return view('template_fix/meetings');
});

Route::get('id/meetings', function (){
	return view('template_fix/meetingsind');
});

Route::get('en/meeting-reservation', function (){
	return view('template_fix/meetingreservation');
});

Route::post('en/meeting-reservation-auth', function (){
	//dd(Config::get('mail'));
	$file = base_path('resources/views/template_fix/meetingresvemail.blade.php');

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
	Mail::send('template_fix/meetingresvemail',[], function ($m) {
		$m->to('reservasi@grenaliaprapatanhotel.com', 'Hotel Alia')->subject('Meeting Reservation');
	});

	Mail::send('template_fix/meetingresvemail',[], function ($m) {
		$m->to($_POST['meetingemail'], 'Hotel Alia')->subject('Meeting Reservation');
	});

	return redirect('en/meeting-reservation');
});

Route::get('id/meeting-reservation', function (){
	return view('template_fix/meetingreservationind');
});

Route::post('id/meeting-reservation-auth', function (){
	//dd(Config::get('mail'));
	$file = base_path('resources/views/template_fix/meetingresvemail.blade.php');

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
	Mail::send('template_fix/meetingresvemail',[], function ($m) {
		$m->to('reservasi@grenaliaprapatanhotel.com', 'Hotel Alia')->subject('Meeting Reservation');
	});

	Mail::send('template_fix/meetingresvemail',[], function ($m) {
		$m->to($_POST['meetingemail'], 'Hotel Alia')->subject('Meeting Reservation');
	});

	return redirect('id/meeting-reservation');
});

Route::get('en/standard', function (){
	return view('template_fix/standard');
});

Route::get('id/standard', function (){
	return view('template_fix/standardind');
});

Route::get('en/suiteroom', function (){
	return view('template_fix/suiteroom');
});

Route::get('id/suiteroom', function (){
	return view('template_fix/suiteroomind');
});

Route::get('en/suites', function (){
	return view('template_fix/suites');
});

Route::get('id/suites', function (){
	return view('template_fix/suitesind');
});

Route::get('en/superior', function (){
	return view('template_fix/superior');
});

Route::get('id/superior', function (){
	return view('template_fix/superiorind');
});

Route::get('en/wedding', function (){
	return view('template_fix/wedding');
});

Route::get('id/wedding', function (){
	return view('template_fix/weddingind');
});