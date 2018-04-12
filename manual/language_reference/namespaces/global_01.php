<?php

namespace A\B\C;
// this function is A\B\C\fopen
function fopen(){
  $f = \fopen();
  return $f;
}

?>
