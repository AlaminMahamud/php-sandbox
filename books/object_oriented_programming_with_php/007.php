<?php

// class.factorial.php
class Factorial{
  private $result = 1;
  private $number;

  function __construct($number){
    $this->number = $number;
    for($i=2; $i <= $number; $i++){
      $this->result *= $i;
    }
  }

  public function showResult(){
    echo "Factorial of {$this->number} is {$this->result}";
  }
}

?>
