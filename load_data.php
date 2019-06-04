<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "make_model_db");  
 $output = ''; 
 $sql = "SELECT * FROM model_table WHERE make_fk='".$_POST["brandId"]."' ORDER BY model_name";
 $result = mysqli_query($connect,$sql); 
 
 $output = '<option value="">Select Model</option>';

 while($row = mysqli_fetch_array($result))
 {
 	$output .= '<option value="'.$row["model_id"].'">'.$row["model_name"].'</option>';
 }

 echo $output;


 ?>  