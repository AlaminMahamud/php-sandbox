<?php

$url = "http://www.google.com/ctrllr/method";
$url = trim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);
var_dump($url);

?>
