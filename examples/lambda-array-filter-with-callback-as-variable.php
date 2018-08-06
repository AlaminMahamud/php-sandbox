<?php

$max_operator = function($v){return $v>2;};

$input = array(1,2,3,4,5);
$outpu = array_filter($input, $max_operator);
var_dump($outpu);