<?php

// TODO: insert data gathered from the register.php form into the database
// After the insert send the user back to the main menu

session_start();
include "validate.php";

$conn = new mysqli("localhost", "root", "", "sobiedb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = test_input($_POST['fname']);
$lname = test_input($_POST['lname']);
$email = test_input($_POST['email']);

$sql = "INSERT INTO students (fname, lname, email) VALUES ('$fname', '$lname', '$email')";

if ($conn->query($sql) === TRUE) {
    header("location: index.php");
    exit;
} else {
    header("location: register.php");
    exit;
}
$conn->close();
