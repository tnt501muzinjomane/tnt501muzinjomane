<?php
	
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$bookno = ucwords(clean($_POST['bookNo']));
	$email = clean($_POST['emailA']);
	$checked = 'This Booking Was Marked Checked By The Administrator. Status = Checked';
	
	//Input Validations
	if($bookno == '') {
		$errmsg_arr[] = 'Please fill in the booking num.';
		$errflag = true;
	}
	
	
	//If there are input validations, redirect back to the fault form
	if($errflag) {
		$_SESSION['ERRMSG_ARR40'] = $errmsg_arr;
		session_write_close();
		
		header("location: Bookings_Admin.php");
		
		exit();
	}
	$from = 'flightconnector@swazi.net';
$email =  $email;
$subject = 'Flight Connector Booking';
$message = 'Please be notified that your booking has been checked the administrator. You will soon receive a confirmation email. For help please reply to this email. Find us on our website http://www.flightconnector.co.sz
Thank you. 

Regards

Managing Director
Mrs VJ Dlamini
Flight Connector ';
mail($email, $subject, $message,"From: ".$from);

	//Create INSERT query

$qry = "update booking set Status_Checked ='$checked' where Booking_No ='$bookno'";



	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		
		header("location: Bookings_Admin.php");
		exit();
	}else {
		die("Sorry! The System failed to mark this booking checked! ");
	}
?>
