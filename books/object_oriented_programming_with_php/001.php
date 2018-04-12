<?php

$user_input = $_POST['field'];
$filtered_content = filter($user_input); // user input filtering
mysql_connect("dbhost", "dbuser", "dbpassword");
mysql_select_db("dbname");
$sql = "some query";
$result = mysql_query($sql);
while($data = mysql_fetch_assoc()){
  process($data);
 }
process_user_input($data);
?>
