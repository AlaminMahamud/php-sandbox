<?php

$first_query = "SELECT a,b
                FROM subscriptions
                WHERE subscriptions_id = $subscription_id";
$results = mysql_query($first_query);
list($a, $b) = mysql_fetch_row($results);

// Perform necessary logics
$new_a = $b;
$new_b = $a;

$second_query = "UPDATE subscriptions
                 SET a = '$new_a',
                     b = '$new_b'
                 WHERE subscription_id = $subscription_id";
mysql_query($second_query);

?>
