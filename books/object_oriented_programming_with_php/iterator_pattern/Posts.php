<?php

class Posts implement Iterator{

  private $posts = array();

  public function __construct($posts){
    if (is_array($posts)){
      $this->posts = $posts;
    }
  }

  public function rewind(){
    reset($this->posts);
  }

}

?>
