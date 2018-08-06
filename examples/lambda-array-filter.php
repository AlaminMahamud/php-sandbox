<?php
$input = array(1,2,3,4,5);
$outpu = array_filter($input, function ($v){ return $v > 2; });
var_dump($outpu);