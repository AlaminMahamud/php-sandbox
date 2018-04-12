<!DOCTYPE html>
  <html>

  <head>
  <style>
    table{
      
    }
  </style>
  </head>
<?php

$file_name = "test.csv";
$row = 1;
echo "<table border=\"1\">";
if ( ( $file_handle = fopen($file_name, "r") ) == TRUE ) {
  while (($data = fgetcsv($file_handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    # echo "<p> $num fields in line $row: <br/> </p> \n";

    echo "<tr>";
    for ($c=0; $c < $num; $c++) {
      if ( $row==1 ) {
        echo "<th>";
      }
      else {
        echo "<td>" ;
      }
      echo $data[$c] ;
      if ( $row == 1 ) {
        echo "</th>";
     } 
      else {
        echo "</td>";
      }
    }
    echo "</tr>";
  }
  fclose($file_handle);
 }
echo "</table>";
?>


</html>
  
