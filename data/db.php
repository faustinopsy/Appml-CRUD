<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demodb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$base_url = 'http://localhost/blog/';
$image_url = 'http://localhost/blog/images/';
?>