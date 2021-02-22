<?php
$db_name ="tiffinwala_user";
$mysql_username ="root";
$mysql_password = "Raj19950123@";
$mysql_server = "192.168.56.1";
  
$conn = mysqli_connect($mysql_server,$mysql_username,$mysql_password,$db_name); 
if ($conn){
	echo("Successful");
}
?>