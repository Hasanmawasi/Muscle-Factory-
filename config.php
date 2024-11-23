<?php
// $con=mysqli_connect("localhost","root","",'test2') or die("connection errer".$con->error);
// echo "connected";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2"; // Replace with your actual database name

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname) or die("connection errer".$con->error);
?>