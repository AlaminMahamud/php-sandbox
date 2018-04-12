<?php
    echo "Today is: " . date("Y/m/d", time()) . "<br/>";
    echo "Today is " . date('l') . "<br/>";
    echo "automatic copyright year." . "<br/>";
    echo "&copy;" . 2010 . " - " . date("Y") . "<br/>";
    echo "The time is " . date("h:i:sa");
    # default timezone
    date_default_timezone_set("Asia/Dhaka");
    echo "<br/>";
    echo "The time is " . date("h:i:sa");
    echo "<br/>";
    $d = mktime(11,14,54,8,12,2015);
    echo "Created date is "  . date("Y-m-d h:i:sa", $d);
?>