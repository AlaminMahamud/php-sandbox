<?php

$json = <<<EOT
{
"a":1,
"b":2,
"c":3,
"d":4,
"e":5
}
EOT;
echo
  "<pre>"                      .
  var_dump(json_decode($json)) .
  "</pre>"                     .
  "<br/>";
echo
  "<pre>"                                .
  print_r( json_decode( $json, true ) )  .
  "</pre>"                               .
  "<br/>"                                ;
?>
