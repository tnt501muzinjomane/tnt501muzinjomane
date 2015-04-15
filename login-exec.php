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
	
	//Sanitize the POST values
	$login = clean($_POST['Editbox1']);
	$password = clean($_POST['Editbox2']);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr1[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr1[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR6'] = $errmsg_arr1;
		session_write_close();
		//header("location: admin.php");
		//If the user input wrong data, the message below will be displayed
			echo '<script type="text/javascript">alert("Username or password missing. Try again."); location.href="admin.php";</script>';
		
		exit();
	}
	
	//Create query
	
	$qry="select * from admin where username='$login' AND password='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_ADMIN_ID'] = $member['adminId'];
			$_SESSION['SESS_FIRST_NAME'] = $member['title'];
			
			session_write_close();
			header("location: administration.php");
			exit();
		}else {
			
			//header("location: failedlogin.html");
			//echo "Login failed";
			echo '<script type="text/javascript">alert("Wrong username or password.Please try again."); location.href="admin.php";</script>';
			exit();
		}
	}else {
		die("Query failed");
	}
?>
