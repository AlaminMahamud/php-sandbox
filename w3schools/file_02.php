<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file");
// Output oneline until end-of-file
while(!feof($myfile)){
    echo fgets($myfile) . "<br/>";
}
?>