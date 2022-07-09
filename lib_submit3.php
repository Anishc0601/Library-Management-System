<?php
	include "common.php";
    $command = escapeshellcmd("python a3.py");
    $output = shell_exec($command);
    echo $output;
	header('location: lib_page.php');
?>	