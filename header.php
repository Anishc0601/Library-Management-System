<?php
	include "common.php";
?>	

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container"> 
		<div class="navbar-header"> 
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			</button>
			<a class="navbar-brand" href="index.php">Library Management System</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar"> 
			<ul class="nav navbar-nav navbar-right">
				<?php	
					if (isset($_SESSION['email'])) { 
				?>
				<li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
				<li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li> 
				<?php
					} else { 
				?>
					<li><a href="admin_login.php"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li> 
					<li><a href="lib_login.php"><span class="glyphicon glyphicon-user"></span> Librarian Login</a></li>
					<li><a href="admin_signup.php"><span class="glyphicon glyphicon-log-in"></span> Admin signup</a></li>
					<li><a href="lib_signup.php"><span class="glyphicon glyphicon-log-in"></span> Librarian signup</a></li>
				<?php } ?>
			</ul> 
		</div>
	</div>
</div>