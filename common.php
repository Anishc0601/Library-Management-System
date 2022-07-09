<?php
	$con = mysqli_connect("localhost", "root", "", "mini_pro") or die(mysqli_error($con));
	//session_start();

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>