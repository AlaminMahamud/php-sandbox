<?php

include_once 'config.php'

if ($_SERVER["REQUEST_METHOD"] == "POST") {


 }

?>

<form action="login.php" method="post">
  Email: <input type="text" name="email"/>
  Password: <input type="password" name="password"/>
  <input type="button" name="submit" value="Submit"/>
</form>
