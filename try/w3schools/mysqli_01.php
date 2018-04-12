<?php
$servername = "localhost";
$username = "root";
$password = "root_mysql";

// Create Connection
$conn = new mysqli($servername, $username, $password);

// check Connection
if ($conn->connect_error){
    die("Connection Failed: " . $conn -> connect_error);
}

echo "Connected successfully.";
?>