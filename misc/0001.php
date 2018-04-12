<?php

function getAdder($x){
  return function ($y) use ($x) {
    return $x + $y;
  };
}

$adder = getAdder(10);
echo $adder(2);

?>
