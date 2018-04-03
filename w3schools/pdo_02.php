<?php

$servername = "localhost";
$username = "root";
$password = "root_mysql";
$database_name = "myDBPro";

try {
    $conn = new PDO(
        "mysql:host=$servername;dbname=myDB",
        $username,
        $password
    );
    
    // Set the PDO error modeto exception
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $sql = "CREATE DATABASE";
    $sql .= " ";
    $sql .= $database_name;

    $conn -> exec($sql);
    echo "Database created successfully.";

} catch(PDOException $e) {
    echo $sql . "<br/>" . $e -> getMessage();
}

$conn = null;

?>
