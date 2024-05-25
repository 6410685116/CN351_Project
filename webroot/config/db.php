<?php
$servername = "mariadb";
$username = "root";
$password = "secret";
$database = 'registration';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>