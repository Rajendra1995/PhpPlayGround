<?php
$db_name ="heroku_429b3201452b3e9";
$mysql_username ="b5a4f0b6c87ada";
$mysql_password = "4fe9ab00";
$mysql_server = "us-cdbr-east-03.cleardb.com";
  
$conn = mysqli_connect($mysql_server,$mysql_username,$mysql_password,$db_name); 
if ($conn){
	echo("Successful");
}
$query = "create table admin (varchar(50) name,int(10) age)";
if ($conn->query($query) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
