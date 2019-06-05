<?php



	$host = 'localhost';
	$username = 'root';
	$pass = '';
	$dbname = 'cars_data';

	$db = new mysqli($host,$username,$pass,$dbname) or die ("Unable to connect!");
	$db->set_charset("utf8");

	$car_brand=$_POST["brand"];
	$car_model=$_POST["model"]; 
	$car_color=$_POST["color"];
	$car_engine=$_POST["engine"];
	$car_year=$_POST["fromyear"];
	$car_mileage=$_POST["mileage"];
	$car_transmission=$_POST["transmission"];
	$car_power=$_POST["power"];
	$car_price=$_POST["price"];

	$sql = "INSERT INTO car_details (car_brand,car_model,car_color,car_engine,car_year,car_mileage,car_transmission,car_power,car_price) VALUES ('$car_brand','$car_model','$car_color','$car_engine','$car_year','$car_mileage','$car_transmission', '$car_power','$car_price')";

	if(!mysqli_query($db,$sql))
	{
		echo "Data not inserted";
	}
	else{
		if (isset($_POST['submitform']))
    {   
    ?>
<script type="text/javascript">
	window.location = "http://localhost/project/success_data_insert.php";
</script>      
    <?php
    }
	}
	
$db->close();
?>