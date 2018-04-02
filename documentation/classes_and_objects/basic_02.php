<?php

class A {
  function foo($string){
    if (isset($this)){
      echo '$this is defined';
      echo '(';
      echo get_class($this);
      echo ")\n";
    } else {
      echo "\$this is not defined.\n";
    }
    return null;
  }
}

class B {
  function bar(){
    A::foo();
    return null;
  }
}


$a = new A();
$a->foo();

A::foo();

$b = new B();
$b -> bar();

B::bar();
?>
