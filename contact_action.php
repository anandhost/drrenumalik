<?php
$servername = "localhost";
$username = "drrenu";
$password = "Windows@10";
$dbname = "renumalik";



 $fname = $_POST['first_name'];
 $lname = $_POST['last_name'];
 $email = $_POST['email'];
 $subject1 = $_POST['subject'];
 $message = $_POST['message'];
 
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 
 

$sql = "INSERT INTO contact (`first_name`,`last_name`,`email`,`subject`,`message`)
VALUES ('$fname','$lname','$email','$subject1','$message')";

$to = "digital@malik.ventures,hello@malik.ventures ";
$subject = "Website Leads of Dr Renu Malik ";
$txt = "Name :" . $fname . "\n" . "Email:". $email. "\n"."Subject :" . $subject1 . "\n" . "Queries :" . $message;   
$headers = "From: vjap27singh@gmail.com". "\r\n" .
//"CC: hello@malik.ventures";;
$headers .= "MIME-Version: 1.0" . "\r\n";
mail($to,$subject,$txt,$headers);




if ($conn->query($sql) === TRUE) {
  // echo "<script> window.location.assign('index.php');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 

$conn->close();
?>