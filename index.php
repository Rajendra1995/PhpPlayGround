<?php
$db_name ="heroku_429b3201452b3e9";
$mysql_username ="b5a4f0b6c87ada";
$mysql_password = "4fe9ab00";
$mysql_server = "us-cdbr-east-03.cleardb.com";
  
$conn = mysqli_connect($mysql_server,$mysql_username,$mysql_password,$db_name); 
if ($conn){
	echo("Successful");
}
$query = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($query) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
