<?php

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);
echo ROOT;
echo '<br/>';
echo APP;
echo '<br/>';

require ROOT . 'vendor/autoload.php';
require APP . 'config/cofig.php';

use Mini\Core\Application;
$app = new Application;
?>
