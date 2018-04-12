<?php

$file_name   = '/home/alamin/a.php.back';
$file_handle  = fopen( $file_name, 'r+' );

rewind ( $file_handle );
fwrite ( $file_handle, 'FOO');
fflush ( $file_handle );
ftruncate ( $file_handle, ftell ( $file_handle ) );
fclose ( $file_handle );
?>
