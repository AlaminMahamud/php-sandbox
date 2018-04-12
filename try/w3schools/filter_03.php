<?php
$int = 0;

if(
    !filter_var($int, FILTER_VALIDATE_INT) === false
    or
    filter_var($int, FILTER_VALIDATE_INT) === 0
){
    echo("Integer is valid");
}else {
    echo("Integer is not valid");
}

?>