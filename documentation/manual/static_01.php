<?php

class Foo
{
  public static function a_static_method()
  {
    echo "I am called.";
    echo "<br/>";
  }
}


Foo :: a_static_method();
$classname = 'Foo';
$classname ::
  a_static_method();


?>
