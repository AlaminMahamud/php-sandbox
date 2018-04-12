<?php

class Foo {
  public $bar = <<<EOT
bar
EOT;
}

$f = new Foo;
echo $f->bar;

?>
