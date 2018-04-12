<?php

class SuperClass{
  public final function someMethod(){
    // do something
  }
}

class SubClass extends SuperClass{
  public function someMethod(){
    // .. something here again. but it won't run.
  }
}

?>
