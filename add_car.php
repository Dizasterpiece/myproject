<?php include 'php.php';?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>
    <script type="text/javascript" src="js.js"></script>

    
	<style>

		footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
		
		.hid{
	display: block;
	}
		#error{
			display: none;
			color: red;
		}
	</style>
	<title>add car</title>



				

</head>
<body>

		<nav class=" navbar-inverse col-sm-12 col-md-12 col-lg-12">   
		  			<div class="container-fluid">
		    			<div class="navbar-header ">
		      				<a class="navbar-brand" href="index.php">WebSiteName</a>
		    			</div>
		    			<ul class="nav navbar-nav">
		      				<li><a href="index.php">Home</a></li>
						    <li><a href="#">Page 1</a></li>
						    <li><a href="#">Page 2</a></li>
						    <li><a href="#">Page 3</a></li>
		    			</ul>
		    			
		    			<ul class="nav navbar-nav navbar-right">
		      				<li><a href="#"><span class="glyphicon glyphicon-user "></span> Sign Up</a></li>
		      				<li><a href="#"><span class="glyphicon glyphicon-log-in "></span> Sign in</a></li>

		      				<form class="navbar-form navbar-right" action="/action_page.php">
      					
					    </form>

		   				 </ul>
		  			</div>
				</nav>

			<div class="container  col-sm-2 col-md-2 col-lg-2 bg-danger" >
				<nav class="sidenav">

					<ul class="list-unstyled text-center">
						<li><a href="add_car.php">Add Car</a>
						<li><a href="#">Edit Car</a>
						<li><a href="#">link 3</a>
					</ul>
				</nav>
			</div>


			<div class=" bg-primary col-sm-8 col-md-8 col-lg-8">
				<div class="container-fluid text-center">
					
					<h1>Add Car</h1>
					<p></p>
				</div>

				<div class="container col-sm-12 col-md-12 col-lg-12">
					<form class="form col-md-12 col-lg-12" action="insert_car.php" method="POST" >
						<div class="col-sm-6 col-md-6 col-lg-4 form-group">
							
							<label for="brand">Brand:</label>
							
							<select  name="brand" id="brand" class="form-control">
								<option value="">Select Brand</option>
								<?php echo fill_brand($connect); ?>
							</select>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 form-group">
							<label for="model">Model:</label>
							<select name="model" id="model" class="form-control">
								<option value="">Select Model</option>
								
							</select>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-4 form-group hid">
							<label for="color">Color:</label>
							<select name="color" class="form-control ">
								<option value="">all</option>
								<option value="red">Red</option>
								<option value="blue">Blue</option>
								<option value="red">Green</option>
							</select>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 form-group">
							<label for="engine">Engine:</label>
							<select name="engine" class="form-control">
								<option value="">all</option>
								<option value="diesel">Diesel</option>
								<option value="petrol">Petrol</option>
								<option value="electric">Electric</option>
								<option value="hybrid">Hybrid</option>
							</select>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 form-group">
							<label for="fromyear">Year:</label>
							<select name="fromyear" class="form-control">
								<option value="">all</option>
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
							</select>
						</div>

								<div class=" col-sm-6 col-md-6 col-lg-4 form-group hid">
							<label for="mileage">Mileage:</label>
							<input type="number" name="mileage" class="form-control">
						</div>

						<div class="col-sm-6 col-md-6 col-lg-4 form-group">
							<label for="transmission">Transmission:</label>
							<select name="transmission" class="form-control">
								<option value="">all</option>
								<option value="manual">Manual</option>
								<option value="auto">Automatic</option>
								<option value="semi">Semi-automatic</option>
							</select>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 form-group">
							<label for="minpower">Power:</label>
							<input type="number" name="power" class="form-control" >
						</div>

						<div class="col-sm-6 col-md-6 col-lg-4 form-group hid">
							<label for="price">Price:</label>
							<input type="number" name="price" class="form-control">
						</div>
							<div class=" col-sm-12 col-md-12 col-lg-12 form-group">						
									<button type="submit" class="btn btn-default" name="submitform">Add Car</button>	
											
							</div>
					</div>	
					</form>
					
		</div>

			<div class="container col-sm-2 col-md-2 col-lg-2 bg-danger">
				<nav class="sidenav ">
					<ul class="list-unstyled text-center">
						<li><a href="#">ad 1</a>
						<li><a href="#">ad 2</a>
						<li><a href="#">ad 3</a>
					</ul>
				</nav>
			</div>

			<footer class="container text-center col-sm-12 col-md-12 col-lg-12">
  				<p>Footer Text</p>
			</footer>

</body>
</html>

