<?php
// header('Content-Type: application/json');

// Database connection settings
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "test2"; // Replace with your actual database name

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
include "config.php";
// Check connection
if ($con->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $con->connect_error]));
}

if (isset($_GET['class'])) {
    // $_GET['company']="company1";
    $company =$_GET['class'];

    // Fetch data based on the company name
    $sql = "SELECT classID, className, classDesc, classImage FROM classes WHERE classCat = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $company);
    $stmt->execute();
    $result = $stmt->get_result();

    $products = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }

    $stmt->close();
    $con->close();

    echo json_encode($products);
} else {
    echo json_encode(["error" => "No class parameter provided"]);
}





?>