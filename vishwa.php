<?php
$servername = "localhost";
$username = "drrenu";
$password = "Windows@10";
$dbname = "renumalik";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$useremail = $_POST['email'];
$message = $_POST['subject'];
$usersubject = $_POST['message'];

$sql = "INSERT INTO contact (`first_name`, `last_name`, `email`,`subject`,`message`)
VALUES ('$firstname', '$lastname', '$useremail','$usersubject','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>