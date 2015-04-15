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
	
	$name = ucwords(clean($_POST['Editbox1']));
	$surname = clean($_POST['Editbox2']);
	$email1 = clean($_POST['Editbox3']);
	$testimonial = clean($_POST['TextArea1']);
	
	
	//Input Validations
	if($name == '') {
		$errmsg_arr[] = 'Name is missing';
		$errflag = true;
	}
	if($surname == '') {
		$errmsg_arr[] = 'Surname is missing';
		$errflag = true;
	}
	
	if($email1 == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if($testimonial == '') {
		$errmsg_arr[] = 'Please fill in testimonials details';
		$errflag = true;
	}
	
	
	
	//If there are input validations, redirect back to the complaint form
	if($errflag) {
		$_SESSION['ERRMSG_ARR1'] = $errmsg_arr;
		session_write_close();
		
		header("location: testimonials.php");
		
		exit();
	}
	
	$from = $email;
$email = 'flightconnector@swazi.net';
$subject = 'New Testiminial';
$message = 'Testimonials: $testimonial . Check it please at http://www.flightconnector.co.sz/admin.php ';
mail($email, $subject, $message,"From: ".$from);

	//Create INSERT query
$qry = "INSERT INTO testimonial(Name, Surname, Email_Ad, Testimonial_Detail, date_of_test) 
VALUES('$name','$surname','$email1','$testimonial',NOW())";



	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		echo '<script type="text/javascript">alert("Thank you for your testimonial. Click okay to view other exixting testimonials. Be blessed!"); location.href="testimonials_platform.php";</script>';
		//header("location: testimonials_platform.php");
		exit();
	}else {
		
		die("Sorry the system failed to process your testimonial. Please try again.");
	}
?>
