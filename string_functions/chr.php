<?php

$str  = "abcdefghijklmnopqrstuvwxyz";
$str .= chr(27);

echo $str;
echo sprintf("The string ends in escape: %c", 27);

echo "<br/>";
echo chr(-159), chr(833), PHP_EOL;

?>
