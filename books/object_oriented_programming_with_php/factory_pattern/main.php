<?php

$DM = new DBManager();
$DM -> setDriver("mysql");
$DM -> connect("host", "user", "db", 'pwd');

?>
