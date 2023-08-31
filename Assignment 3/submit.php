<?php
// Connect to the database
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "form_db";

$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["message"];

// Insert data into database
$sql = "INSERT INTO user_data (firstname, lastname, email, message) VALUES ('$firstname', '$lastname', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
