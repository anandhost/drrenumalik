<?php

session_start();

if(isset($_POST['username'])){

// Requesting POST Request from Login Page.... 
$suser = $_POST['username'];
$spassword = md5($_POST['password']);

// Creating Connection......
$servername = "localhost";
$username = "drrenu";
$password = "Windows@10";
$dbname = "renumalik";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    // echo "Connection Successful</br>";
    $sql = "SELECT username, password FROM users WHERE username='$suser'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
       ($row = mysqli_fetch_assoc($result));
       if ($row['username'] == $suser && $row['password'] == $spassword) {
        //    echo $row['username'];
        //    echo "</br>";
        //    echo $row['password'];
        $_SESSION['username']= $suser;
        echo "<script>window.location.assign('dashboard.php');</script>";
       }
       echo "<script>window.location.assign('login.php?invalid');</script>";

    } else {
        // echo "0 results";
        echo "<script>window.location.assign('login.php?access_denied');</script>";
    }

}
}
mysqli_close($conn);
?>