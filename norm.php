<?php
$servername = 'localhost';
$username = 'u840048117_writing_nut';
$password = 'Toolfe@min10!';
$dbname = "u840048117_writing_nut";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = 'swag@gmail.com';
$sql = "INSERT INTO writingnut_sub (date, time, email) VALUES ('23-01-2023', '01:52:00', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
