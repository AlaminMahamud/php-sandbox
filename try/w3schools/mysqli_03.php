<?php

$servername = "localhost";
$username   = "root";
$password   = "root_mysql";
$dbname     = "myDB";

// Create the Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error){
  die("Connection Failed: " . $conn->connect_error);
 }

// sql to create table
$sql  = "CREATE TABLE MyGuests (";
$sql .= "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,";
$sql .= "firstname VARCHAR(30) NOT NULL,";
$sql .= "lastname VARCHAR(30) NOT NULL,";
$sql .= "email VARCHAR(50),";
$sql .= "reg_date TIMESTAMP";
$sql .=")";

if ($conn->query($sql) === TRUE){
  echo "Table MyGuests created successfully";
 } else {
  echo "Error creating table: " . $conn->error;
 }

$conn->close();
?>
