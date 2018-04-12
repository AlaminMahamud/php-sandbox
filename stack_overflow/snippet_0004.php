<?php
class A
{
  public static function get_self()
  {
    return new self();
  }

  public static function get_static()
  {
    return new static();
  }
}

class B extends A {}
class C extends B {}

echo get_class(B::get_self());
echo get_class(B::get_static());

echo get_class(A::get_self());
echo get_class(A::get_static());

?>
