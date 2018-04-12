<?php

require_once "authentication/auth.php";

$auth = new Authentication();
$title = "Welcome";

ob_start(); // Extra Meta Data;
$meta = ob_get_clean();

ob_start();

?>

<p>Secure Content <?php echo $auth->logoutLink(); ?> / <?php echo $auth->updateProfileLink(); ?></p>

<?php
  
  $content = ob_get_clean();
  $auth->echoContentIfAuth(0, $title, $content, $meta);

?>
