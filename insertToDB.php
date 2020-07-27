<?php
// Create connection
$connect= mysqli_connect("localhost","root","","control_panel_db");
// Check connection
if($connect->connect_error){
	die("Connection failed: ".$connect->connect_error);}
//	echo "Connected successfully";

	if(isset($_POST['forward'])){
		$sql="INSERT INTO button (the_char)VALUES('F')";}
	else if(isset($_POST['left'])){
		$sql="INSERT INTO button (the_char)VALUES('L')";}
	else if(isset($_POST['stop'])){
		$sql="INSERT INTO button (the_char)VALUES('The robot has stopped')";}
	else if(isset($_POST['right'])){
		$sql="INSERT INTO button (the_char)VALUES('R')";}
	else{
		$sql="INSERT INTO button (the_char)VALUES('B')";}

	if (mysqli_query($connect,$sql)){
		//echo "1 record added";
		}
	$connect->close();
?>
<html>
<head>
</head>
<body>  
<?php include "viewFromDB.php"; ?>  
</body>
</html>