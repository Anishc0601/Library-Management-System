<?php
	include "common.php";
	  
	$book =$_POST['book_name'];
    $command = escapeshellcmd("python b.py $book");
    $output = shell_exec($command);
    echo $output;
	header('location: admin_page.php');
?>	