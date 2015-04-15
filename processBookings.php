<?php
	//Start session
	session_start();
	
	
	
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
	
	//Sanitize the POST values Button1
	
	$name = ucwords(clean($_POST['name']));
	$surname = clean($_POST['Editbox2']);
	$contact = clean($_POST['Editbox3']);
	$code = clean($_POST['Editbox4']);
	$email1 = clean($_POST['Editbox5']);
	$gender = clean($_POST['Combobox1']);
	$pick_up = clean($_POST['Combobox2']);
	$date = clean($_POST['Editbox6']);
	$physicalAd = clean($_POST['Editbox8']);
	$town = clean($_POST['Editbox9']);
	$country = clean($_POST['Combobox3']);
	$checked = 'Not yet checked!';
	$confirmed = 'Not yet approved!';
	$date = date("Y-m-d");
	
	//Input Validations
	if($name == '') {
		$errmsg_arr[] = 'Name missing';
		$errflag = true;
	}
	if($surname == '') {
		$errmsg_arr[] = 'Surname missing';
		$errflag = true;
	}
	if($contact == '') {
		$errmsg_arr[] = 'Contact missing';
		$errflag = true;
	}
	if($code == '') {
		$errmsg_arr[] = 'Country code is missing';
		$errflag = true;
	}
	if($email1 == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if($gender == '') {
		$errmsg_arr[] = 'Gender missing';
		$errflag = true;
	}
	
	if($pick_up == '') {
		$errmsg_arr[] = 'Specify date of trip';
		$errflag = true;
	}
	if($date == '') {
		$errmsg_arr[] = 'Specify date';
		$errflag = true;
	}
	if($physicalAd == '') {
		$errmsg_arr[] = 'Passport number missing';
		$errflag = true;
	}
	if($town == '') {
		$errmsg_arr[] = 'Town missing';
		$errflag = true;
	}
	if($country == '') {
		$errmsg_arr[] = '';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the complaint form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		
		header("location: bookings.php");
		
		exit();
	}
	
	$from = $email;
$email = 'flightconnector@swazi.net';
$subject = 'New Booking';
$message = 'Booking by: $name $surname . Check it please. Follow this link http://www.flightconnector.co.sz/admin.php ';
mail($email, $subject, $message,"From: ".$from); 

	//Create INSERT query
$qry = "INSERT INTO booking(Name, Surname,Contact_No, Country_Code, Email_Ad, Gender, Pick_point, Trip_Date, Physical_Ad, Town, Country, Status_Checked, Status_Confirmed, date_of_booking, reportDate) 
VALUES('$name','$surname','$contact','$code','$email1','$gender', '$pick_up','$date','$physicalAd','$town','$country','$checked','$confirmed',NOW(),'$date')";



	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		echo '<script type="text/javascript">alert("You have booked successfully. Thank we will contact you soon via an confirmation and approval emails. Be blessed!"); location.href="bookings.php";</script>';
		//header("location: bookingSuccess.html");
		exit();
	}else {
		
		die("Sorry! The system failed to process your booking!");
	}
?>
