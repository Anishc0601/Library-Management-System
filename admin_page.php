 <?php
	include "common.php";
	if (! isset($_SESSION['email'])) { 
		header('location: admin_login.php');
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <?php
		include "header.php";
		?>
		 <p>&nbsp;</p>
		 <br><br>
		<div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                               <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>ADD BOOKS</h4>
                        </div>
                        <div class="panel-body">
                            <form  method="POST" action="admin_submit.php">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Enter BOOK name" name="book_name" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Count" name="count" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                            </form><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                               <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>DELETE BOOKS</h4>
                        </div>
                        <div class="panel-body">
                            <form  method="POST" action="admin_submit2.php">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Enter BOOK name" name="book_name" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                            </form><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                               <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>REDUCE BOOKS</h4>
                        </div>
                        <div class="panel-body">
                            <form  method="POST" action="admin_submit3.php">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Enter BOOK name" name="book_name" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Count" name="count" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                            </form><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php
		include "footer.php";
		?>
  </body>
</html>