<?php

class ParentClass{
  public function getClass(){
    echo get_class($this);
  }
}


class Child extends ParentClass{
  
}

$obj = new Child();
$obj -> getClass();
?>
