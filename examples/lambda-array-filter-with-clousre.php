<?php

$max_operator = function($max){
return function($v) use ($max) {
            return $v>=$max;
       };
};

$input = array(1,2,3,4,5);
$outpu = array_filter($input, $max_operator(1));
var_dump($outpu);