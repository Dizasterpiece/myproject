<?php include 'php.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">

	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>
    <script type="text/javascript" src="js.js"></script>
    

	<title>success</title>
</head>
<body>
<?php 
	include 'include/top.html';
	include 'include/left.html';
?>

	<div class=" bg-primary col-sm-8 col-md-8 col-lg-8">
				<div class="container-fluid text-center">
					<h1>Your data was inserted successfully!</h1>
					<button class="btn btn-default" type="button"><a href="index.php">Back to Home page</a></button>
				</div>
		</div>
<?php
	include 'include/right.html';
	include 'include/bottom.html';
?>


</body>
</html>