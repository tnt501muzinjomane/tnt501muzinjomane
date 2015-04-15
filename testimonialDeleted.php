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
	$bookno = ucwords(clean($_POST['testId']));
	
	
	//Input Validations
	if($bookno == '') {
		$errmsg_arr[] = 'Please fill in the booking num.';
		$errflag = true;
	}
	
	
	//If there are input validations, redirect back to the fault form
	if($errflag) {
		$_SESSION['ERRMSG_ARR40'] = $errmsg_arr;
		session_write_close();
		
		header("location: Testimonial_Admin.php");
		
		exit();
	}
	

	//Create INSERT query
$qry = "delete from testimonial where Testimonial_Id ='$bookno'";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		
		header("location: Testimonial_Admin.php");
		exit();
	}else {
		die("Sorry! The System failed to delete this testimonial! ");
	}
?>
