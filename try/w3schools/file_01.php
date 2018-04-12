<?php
//echo readfile('webdictionary.txt');
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo '<pre>' . fread($myfile, filesize("webdictionary.txt")) . '</pre>';
fclose($myfile);
?>