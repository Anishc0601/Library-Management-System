<?php
	require "common.php";
	$email = $_POST['email'];
	$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	$password = md5($_POST['password']);
	/*
	if (!preg_match($regex_email, $email)) {
	header('location: signup.php?email_error=enter correct email');
	}
	if (strlen($password) < 6) {
	header('location: signup.php?password_error=enter correct password');
	}
	if (strlen($contact) !=10) {
	header('location: signup.php?contact_error=enter correct contact');
	}*/
	$signup_query = "insert into admin_data (email,password)values ('$email','$password')";
	$login_submit = mysqli_query($con,$signup_query) or die(mysqli_error($con));
	$_SESSION['email'] = $email;
	$_SESSION['id'] = mysqli_insert_id($con);
	header('location: admin_page.php');
	echo "User successfully inserted";
?>