<?php

$input_filter = new filter();
$input_filter->filter_user_input();
$db = new dal("mysql");
$db->connect($dbconfig);
$result = $db->execute($sql);
ReportGenerator::makereport($result); // process data
$model = new PostModel($filter->get_filtered_content());
$model -> insert();

?>
