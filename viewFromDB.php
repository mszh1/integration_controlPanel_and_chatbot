<?php

// Create connection
$connect =mysqli_connect("localhost","root","","control_panel_db");
// Check connection
if($connect->connect_error){
	die("Connection failed: ".$connect->connect_error);
	}
	
	$sqlresult ="SELECT the_char FROM button ORDER BY id DESC LIMIT 1;";
	$result = $connect->query($sqlresult);
	
?>
<h1 style="text-align:center"> The result: </h1>
<h2 style="text-align:center"><br><br><?php 
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo $row["the_char"];}
	}
?></h2>