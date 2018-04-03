<?php
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 17, 15)
);

# echo '<pre>' . var_export($cars, true) . '</pre>';

/*
highlight_string(
    "<?php\n\$data =\n" . var_export($cars, true) . ";\n?>"
);
*/

highlight_string("". var_export($cars, true));

?>