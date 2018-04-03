<?php

declare(encoding="UTF-8");
namespace MyProject {
  const CONNECT_OK = 1;
  class Connection {}
  function connect() {}
}

namespace{
  session_start();
  $a = MyProject\connect();
  echo MyProject\Connection::start();
}
?>
