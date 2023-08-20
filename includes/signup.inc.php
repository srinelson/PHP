<?php
if (empty($_POST['name'])) {
    die("Name is required");
}

if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    
   die("Valid email is required");
}

if(strlen($_POST['password']) <8) {
    die("Password must be at least 8 characters");
}

if (! preg_match("/[a-zA-Z]/i", $_POST['password'])) {
    die ("Password must contain at least one letter");
}

$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/dbh.inc.php";

$sql= "INSERT INTO user ( name, email, password_hash)
       VALUES (?,?,?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " .$mysqli->error);
}

mysqli_stmt_bind_param($stmt,"sss", $_POST["name"], $_POST["email"], $password_hash);

$stmt->execute();

echo "Signup Successful";

header("refresh:3;url=http://localhost/Bookstore/login.php");
exit; // Make sure to exit to prevent further script execution

print_r($_POST);

?>