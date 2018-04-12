<?php

require "DB/Mysql.inc";

function user_error_handler(
  $severity,
  $msg,
  $filename,
  $linenum
)
{
  $dbh   =  new DB_Mysql_Prod;
  $query = "INSERT INTO errorlog
            (severity, message, filename, linenum, time)
            VALUES (?, ?, ?, ?, NOW())";
  $sth   = $dbh->prepare($query);
  switch($severity) {
  case E_USER_NOTICE:
    $sth->execute('NOTICE', $msg, $filename, $linenum);
    break;
  case E_USER_WARNING:
    $sth->execute('WARNING', $msg, $filename, $linenum);
    break;
  case E_USER_ERROR:
    $sth->execute('FATAL', $msg, $filename, $linenum);
    break;
  default:
    echo "Unknown error at $filename:$linenum<br>";
    break;
  }
}

?>
