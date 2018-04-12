<?php

class observer{
  private $observables = array();
  public function register($object){
    if($object instanceof observable){
      $this->observers[] = $object;
    }
  }
}

?>
