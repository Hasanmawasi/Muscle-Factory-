<?php


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

// Check if the company parameter is set
if (isset($_GET['company'])) {
    
    $company =$_GET['company'];

    // Fetch data based on the company name
    $sql = "SELECT id, name, description, price, image_url FROM products WHERE company = ?";
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
    echo json_encode(["error" => "No company parameter provided"]);
}

?>