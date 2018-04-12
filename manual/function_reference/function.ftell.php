<?php

$file_name     = '/etc/passwd';
$file_handle   = fopen(
  $file_name,
  'r'
);

$data = fgets($file_handle, 100);

echo ftell($file_handle);
fclose($file_handle);
?>
