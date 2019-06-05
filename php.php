<?php
	$connect = mysqli_connect("localhost","root","","make_model_db");
	
	function fill_brand($connect){
		$output = '';
		$sql = "SELECT * FROM make_table ORDER BY make_name ASC";
		$result = mysqli_query($connect,$sql);

		while($row = mysqli_fetch_array($result))
		{
			$output .= '<option value="'.$row["make_id"].'">'.$row["make_name"].'</optoion>';
		}
		return $output;
	}


	function fill_model($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM model_table ORDER BY model_name";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
            $output .= '<option value="'.$row["model_id"].'">'.$row["model_name"].'</optoion>';
      }  
      return $output;  
 }  
	?>