<?php

class MySQLTest
{
  public  $database_handle = null;
  private $server          = 'localhost';
  private $username        = 'test';
  private $password        = '<test_pass>';

  public function __construct()
  {
    $this->database_handle = mysql_pconnect(
                                            $this->server,
                                            $this->username,
                                            $thist->password
                                           );
  }
}


function us_states ()
{
  static $us_states = array(
                            'Alabama',
                            '',
                            '',
                            'Wyoming'
                           );
  
  return us_states;
}

?>
