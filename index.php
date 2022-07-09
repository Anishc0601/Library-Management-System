 <?php
	include "common.php";
	/*if (isset($_SESSION['email'])) { 
		header('location: index.php');
	}*/
?>	
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <?php
		include "header.php";
		?>
	<div id="banner_image">
		<div class="container">
			<center>
				<div id="banner_content">
					<a href="https://www.witsolapur.org/" class="btn btn-danger btn-lg active">WIT COLLEGE</a>
				</div>
			</center>
		</div>
	</div>
	<?php
		include "footer.php";
		?>
  </body>
</html>