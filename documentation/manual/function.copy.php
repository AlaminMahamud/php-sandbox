<?php

$file    = '/home/alamin/a.php';
$newfile = '/home/alamin/a.php.back';

if ( !copy($file, $newfile) ) {
  echo "Failed to copy $file ... \n";
 }

?>
