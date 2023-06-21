<?php
// Connect to your database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "social_media";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
// echo "Connected to the database successfully!";
?>

<!-- $servername = "sql303.infinityfree.coms";
$username = "if0_34383440";
$password = "W7ekQgaQNS2J4";
$dbname = "social_media"; -->