<?php

class ArrayValue implements JsonSerializable {
  public function __construct (array $array) {
    $this -> array = $array;
  }

  public function jsonSerialize() {
    return $this -> array;
  }
}

$array = [
  "foo"   => "bar",
  "quax"  => "baz"
];

echo
  '<pre>' .
  json_encode ( new ArrayValue ( $array ), JSON_PRETTY_PRINT ) .
  '</pre>'
  ;
w

?>
