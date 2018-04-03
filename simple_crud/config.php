<?php


$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = 'root';


// Create Connection
$conn = new mysqli(
  $databaseHost,
  $databaseUsername,
  $databasePassword,
  $databaseName
);


function check_connection($conn){

  // Check Connection
  if($conn->connect_error){
    return false;
  }
  return true;
  
}


?>
