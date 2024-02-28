<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "mydatabase"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['dob'])) 
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];

// SQL to insert data into database
$sql = "INSERT INTO personal_data (name, email, dob) VALUES ('$name', '$email', '$dob')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>