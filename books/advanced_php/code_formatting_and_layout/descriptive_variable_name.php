<?php

function clean_cache($expiration_time)
{
  $cachefiles = list_cache();
  foreach ($cachefiles as $cachefile) {
    if (
      filemtime($CACHE_PATH."/".$cachefile) > time() + $expiration_time
    ) {
      unlink($CACHE_PATH."/".$cachefile);
    }
  }
  return null;
}

?>
