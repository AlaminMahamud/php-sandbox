<?php
    $servername = "localhost";
    $username = "root";
    $password = "root_mysql";

    // Create the Connection
    $conn = new mysqli($servername, $username, $password);

    // check Connection
    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }

    // Create Database
    $sql = "CREATE DATABASE myDB";
    if ($conn -> query($sql) === TRUE){
        echo "Database craeted successfully.";
    } else {
        echo "Error Creating Database: " . $conn->error;
    }

    $conn->close();
?>