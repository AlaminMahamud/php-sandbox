<?php
$servername = "localhost";
$username = "root";
$password = "root_mysql";

try{
    $conn = new PDO(
        "mysql:host=$servername",
        $username,
        $password
    );

    // set the PDO error mode to exception
    $conn -> setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    echo "Connected Successfully";
}catch(PDOException $e){
    echo "Connection Failed: ". $e->getMessage();
}

?>

