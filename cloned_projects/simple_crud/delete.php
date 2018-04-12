<?php
// including the database connection file
include("config.php");

// getting the id of the data from url
$id = $_GET['id'];

// delete from users
$sql = "DELETE FROM users WHERE id=$id";

// deleting the row from table
$result = $conn->query($sql);

// redirecting to the display page(index.php in our case)
header("Location:index.php");
?>
