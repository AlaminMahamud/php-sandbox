<?php

interface Iterator{
  function rewind(); // sets the index to the start of collection
  function current(); // current object
  function key(); // returns the current key
  function next(); // if there are more object ahead in the current loop counter.
  function valid(); // returns the current object if it has any value in it.
}

?>
