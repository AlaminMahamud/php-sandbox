<?php

include_once("PGSQLConnectionException.class.hp");
include_once("PGSQLQueryException.class.php");

error_reporting(0);

class DAL{
  public $connection;
  public $result;
  public function connect ($connectionstring){
    $this->connection = pg_connect($connectionstring);
    if($this->connection == false)
      throw new PGSQLConnectionException($this->connection);
  }

  public function execute($query){
    $this->result = pg_query($this->connection, $query);
    if(!is_resource($this->result)){
      throw new PGSQLQueryException($this->connection);
    }
  }
}

?>
