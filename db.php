<?php
$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());

// Database configuration
define('DB_SERVER', 'aws-simplified.cisxw2wrp2vm.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'koushi123');
define('DB_NAME', 'aws-simplified');

// Create connection
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
