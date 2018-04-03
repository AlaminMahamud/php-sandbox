<?php

namespace A\B\C;

class Exception extends \Exception{

}

$a = new Exception('hi');
$b = new \Exception('hi');
$c = new ArrayObject;

?>
