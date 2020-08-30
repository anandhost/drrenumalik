<?php
$servername = "localhost";
$username = "drrenu";
$password = "Windows@10";
$dbname = "renumalik";


 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone1 = $_POST['phone'];
 $date1 = $_POST['date'];
//  $time1 = $_POST['time'];
 
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 
 
 

$sql = "INSERT INTO form (`name`,`email`,`phone`,`date`)
VALUES ('$name','$email','$phone1','$date1')";

$to = "digital@mallik.ventures";
$subject = "Website Leads";
$txt = "Name :" . $name . "\n" . "Email:". $email. "\n"."Phone :" . $phone1 . "\n" . "date :" . $date1 ;   
$headers = "From: tech@malik.ventures". "\r\n" .

$headers .= "MIME-Version: 1.0" . "\r\n";
mail($to,$subject,$txt,$headers);


if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.assign('index.html');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 

$conn->close();
?>