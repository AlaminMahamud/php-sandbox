<?php

require_once 'config.php';
class InstallAuthentication
{
  // MySQL DB configuration
  private static $db_host = DB_HOST;
  private static $db_user = DB_USER;
  private static $db_pass = DB_PASS;
  private static $db_name = DB_NAME;
  private static $db_table = DB_TABLE;
	
  private static $link;

  function __construct(){
    self::$link = new mysqli(
      self::$db_host,
      self::$db_user,
      self::$db_pass,
      self::$db_name
    );

    if (self::$link->connect_errno) {
      echo "Failed to connect. Check DB configuration in config.php. ".self::$link->connect_error;
      exit;
    }

    if (self::$link->query(self::createTableQuery())) {
      echo "Failed to create table. Installation Failed. " . self::$link->error;
      exit;
    } else {
      echo 'Table created successfully. Installation Complete. <span style="color: red;"> DELETE install.php';
    }

    self::$link->close();
  }

  function createTableQuery(){
    $sql_create_table =
                      "CREATE TABLE IF NOT EXISTS ".self::$db_table." (
		               user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                       email varchar(254),
			           password varchar(60),
			           auth_level int(10),
			           token varchar(60),
			           active tinyint(1),
			           disabled tinyint(1),
			           date_created datetime,
			           date_last_login datetime";
    if (!empty(self::$custom_cols)) {
      $i = 0;
    }
    $sql_create_table .= " );";
    return $sql_create_table;
  }
}

$install = new InstallAuthentication();
?>
