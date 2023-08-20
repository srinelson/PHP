<?php


$host = "localhost:3306";
$dbname = "login_db";
$username = "root";
$password = "password";




// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);


$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
  die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;