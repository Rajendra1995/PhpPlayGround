<?php
$db_name ="heroku_429b3201452b3e9";
$mysql_username ="b5a4f0b6c87ada";
$mysql_password = "4fe9ab00";
$mysql_server = "us-cdbr-east-03.cleardb.com";
  
$conn = mysqli_connect($mysql_server,$mysql_username,$mysql_password,$db_name); 
if ($conn){
	echo("Successful");
}
?>