<?php

define('URI','localhost');
define('RELDOMAIN','');
define('PUB_DIR','/');
define('SITE_LANG','EN');
define('SITE_NAME','Your Site Name');
define('SITE_EMAIL','your@emailaddress.com');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root_mysql');
define('DB_NAME','test_db');
define('DB_TABLE','users');

// querystring action var
define('ACTION_VAR', 'a');

// Authorization level names
define('AUTH_NAME_0', 'User');
define('AUTH_NAME_1', 'Admin');

// session variables
define('SESSION_LENGTH', 7200);

// anti-flood variables
define('MAX_ATTEMPTS', 5);
define('ATTEMPT_DELAY', 5);

// Validation Regular Expressions
define('USERNAME_REGEX', '/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i');
define('PASSWORD_REGEX', '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%!]).{8,}$/');

//Base-2 logarithm of the iteration count used for password stretching
define('HASH_COST_LOG2',8);
// Do we require the hashes to be portable to older systems (less secure)?
define('HASH_PORTABLE', false);

?>
