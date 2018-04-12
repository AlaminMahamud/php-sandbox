<?php

echo "<pre>";
$stat = stat("/home/alamin/.zshrc");
print_r ($stat);
echo "</pre>";


echo 'Access time: ' . $stat['atime'];
echo "<br/>";


/*
 * Print file modification time, this is the 
 * same as calling filemtime()
 */
echo 'Modification time: ' . $stat['mtime'];
echo "<br/>";

/* Print the device number */
echo 'Device number: ' . $stat['dev'];
echo "<br/>";
?>
