<?php
foreach(filter_list() as $id => $filter){
    echo 
        $filter .
        " => " .
        filter_id($filter).
        "<br/>";
}
?>