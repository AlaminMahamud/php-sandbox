<?php
namespace Foo;
function strlen(){}
const INI_ALL=3;
class Exception{}

$a = \strlen('hi');
$b = \INI_ALL;
$c = new \Exception('error');
?>
