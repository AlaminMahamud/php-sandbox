<?php

use My\Full\Classname as Another, My\Full\NSname;
$obj = new Another;

$obj2 = new \Another; // instantiate object of class Another
$obj3 = new Anohter\thing; // instantiates object of class My\Full\Classname\thing
$obj4 = new \Another\thing;

?>
