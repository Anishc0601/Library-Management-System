<?php
	include "common.php";
	  
	$book =$_POST['book_name'];
	$count =$_POST['count'];
    $command = escapeshellcmd("python a.py $book $count");
    $output = shell_exec($command);
    echo $output;
	header('location: admin_page.php');
?>	