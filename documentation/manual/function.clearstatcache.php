<?php

$file = '/home/alamin/.zshrc';

function get_owner( $file ) {
  $stat = stat($file);
  $user = posix_getpwuid($stat['uid']);
  return $user['name'];
}

echo get_owner($file);

?>
