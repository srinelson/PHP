<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dBName = "bookstore";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dBName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>