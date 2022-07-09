<?php
	include "common.php";
		if (isset($_SESSION['email'])) { 
		header('location: admin_page.php');
	}
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
   
    <title>Admin Sign UP</title>
  </head>
  <body>
		<?php
		include "header.php";
		?>
		 <p>&nbsp;</p>
		 <br><br>
		 <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>ADMIN SIGN UP</h2>
                        <form method="POST" action="admin_signup_script.php">
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
								  <!--<div><?php echo $_GET['email_error']; ?></div>-->
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true"  pattern=".{6,}">
								  <!--<div><?php echo $_GET['password_error']; ?></div>-->
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
		<?php
		include "footer.php";
		?>
	</body>
</html>