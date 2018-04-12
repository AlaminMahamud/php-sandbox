<?php

namespace MyProject {
  const CONNECT_OK = 1;
  class Connection {
    public static function start(){
      echo "I am statically started.";
    }
  }
  function connect(){
    echo "I am connected.";
  }
}

namespace { // global code
  session_start();
  $a = MyProject\connect();
  echo MyProject\Connection::start();
}

?>
