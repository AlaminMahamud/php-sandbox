<?php

$fp = fopen(
  "file", "r"
);

if (!$fp) {
  die("Error: Couldn't open file.");
 }

$line = fgets($fp);

if (!$line) {
  die("Error: File is empty.");
 }

// process line
?>
