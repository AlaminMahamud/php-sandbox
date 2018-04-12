<?php

// string addcslashes (string $str, string $charlist);
echo addcslashes("foo [ ]", "A..z");
echo '<br/>';
echo addcslashes("zoo['.']", "A..z");
?>
