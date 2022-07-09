<?php
	include "common.php";
	  
	$book =$_POST['book_name'];
	$stud_id =$_POST['stud_id'];
    $command = escapeshellcmd("python a1.py $book $stud_id");
    $output = shell_exec($command);
    echo $output;
	header('location: lib_page.php');
?>	