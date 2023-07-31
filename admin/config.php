<?php
$servername = 'localhost';
$username = 'u840048117_writing_nut';
$password = 'Toolfe@min10!';
$dbname = "u840048117_writing_nut";

$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
    die('Could not Connect MySql Server:' . mysqli_connect_error());
} else {
    // echo "Connected";
}
