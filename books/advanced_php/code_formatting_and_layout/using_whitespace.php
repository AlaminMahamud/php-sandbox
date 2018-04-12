<?php

$name    = $_GET['name'];
$email   = $_GET['email'];
$address = $_GET['address'];

$lt      = localtime();
$day     = $lt['tm_day'];
$month   = $lt['tm_mon'];
$year    = $lt['tm_year'] + 1900;

?>
