<?php


$bytes = disk_free_space('/home');
get_symbol_by_quantity($bytes);


function get_symbol_by_quantity ( $bytes ) {
  $symbols = array(
    'B',
    'KiB',
    'MiB',
    'GiB',
    'TiB',
    'PiB',
    'EiB',
    'ZiB',
    'YiB'
  );

  $exp = floor(
    log($bytes) / log(1024)
  );

  echo sprintf(
    '%.2f'. $symbols[$exp],
    ($bytes/pow(1024, floor($exp)))
  );
}


?>
