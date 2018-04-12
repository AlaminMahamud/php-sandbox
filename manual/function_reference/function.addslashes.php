<?php

$str = "O'Re\\\\\illy\0?";
echo addslashes($str);
eval("echo '" . addslashes($str) . "';")

?>
