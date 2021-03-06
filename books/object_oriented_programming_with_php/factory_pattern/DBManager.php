<?php

class DBManager {
  public static function setDriver($driver){
    $this->driver = $driver;
    // set the driver
  }


  public static function connect(){
    if($this->driver == "mysql"){
      $MM = new MySQLManager();
      $MM -> setHost("host");
      $MM -> setDB("db");
      $MM -> setUserName("user");
      $MM -> setPassword("pwd");
      $this->connection = $MM->connect();
    }
    else if($this->driver == "pgsql"){
      $PM = new PostgreSQLManager();
      $PM -> setHost("host");
      $PM -> setDB("db");
      $PM -> setUserName("user");
      $PM -> setPassword("pwd");
      $this->connection = $PM->connect();

    }
  }
}



?>
