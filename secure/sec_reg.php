<?php
// Include database connection and functions here.
include 'db_connect.php';
include 'functions.php';

// The hashed password from the form
$password = $_POST['p'];
// Create a random salt
$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
// Create salted password (Careful with the chilli)
$password = hash('sha512', $password.$random_salt);
$username = $_POST['username'];
$email = $_POST['email'];
if ($insert_stmt = $mysqli->prepare("INSERT INTO members (username, email, password, salt) VALUES (?, ?, ?, ?)"))
{
$insert_stmt->bind_param('ssss', $username, $email, $password, $random_salt);
// Execute the prepared query.
$insert_stmt->execute();
header("Location: '..\..\..\?success=1'");

}
else
{
header("Location: '..\..\..\?registrationfailed=1'");
}
?>
