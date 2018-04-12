<?php

$memcache = new Memcache;
$memcache -> connect('localhost', 12345) or die ("Could not Connect");
$tmp_object = new stcClass;
$tmp_object -> str_attr = 'test';
$tmp_object -> int_attr = 123456;
$memcache->set('obj', $tmp_object, false, 60*5) or die ("Failed to save data at the server.");
?>
