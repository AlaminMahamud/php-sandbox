<?php

class Singleton {
  private static $instance = null;
  private static $props = array();

  public function __construct()
  {
    if (!self::$instance) {
      self::$instance = new Singleton;
    }
    return self::$instance;
  }

  public function __get($name)
  {
    if (array_key_exists($name, self::$props)) {
      return self::$props[$name];
    }
  }

  public function __set($name, $value)
  {
    self::$props[$name] = $value;
  }
}

$a = new Singleton;
$b = new Singleton;


$a->property = "hello world";
echo $a->property . "bla";
echo $b->property . "foo";

?>
