<?php 
session_start();
if(isset($_SESSION['id'])){   
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the data from the POST request
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $bmi = $_POST['bmi'];
    $category = $_POST['category'];
    $id=$_SESSION['id'];
    // Prepare and bind
    $stmt = $con->prepare("INSERT INTO BMI (name, gender, age, weight, height, bmiR, category,userid) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("ssididsi", $name, $gender, $age, $weight, $height, $bmi, $category,$id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data saved successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
} else {
    echo "Invalid request method";
}

}

?>