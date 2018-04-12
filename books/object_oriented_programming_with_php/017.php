<?php

include("interface.dbdriver.php");
include("abstract.reportgenerator.php");

class MySQLDriver extends ReportGenerator implements DBDriver{
  public function connect(){
  }

  public function execute($query){
  }

  // need to declare or write the generateReport method here
  // again as it is extended from the abstract class directly.
}

?>
