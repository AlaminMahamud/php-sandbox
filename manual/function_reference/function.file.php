<?php

// Get a file into an array.
// In this example we'll go 
$lines = file('http://www.example.com/');

foreach ($lines as $line_number => $line_data) {
  echo "Line #<b>{$line_number}</b>: " . htmlspecialchars($line_data) . "</br>\n";
 }
?>
