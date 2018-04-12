<?php

// find out the class name
class ParentClass{}
class ChildClass extends ParentClass{}
$cc = new ChildClass();
echo get_class($cc);

?>
