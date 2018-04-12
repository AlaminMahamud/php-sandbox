<?php

$query = "SELECT firstname, lastname, employee_id
          FROM employees";
$results = mysql_query($query);

while (
  list($firstname, $lastname, $employee_id) = mysql_fetch_row($results)
) {
  // ... 
 }

?>
