<?php

class ParentClass{
  
}

class ChildClass Extends ParentClass{
  
}

$cc = new ChildClass();

if(is_a($cc, "ChildClass"))
  echo "It's a ChildClass Type Object";

?>
