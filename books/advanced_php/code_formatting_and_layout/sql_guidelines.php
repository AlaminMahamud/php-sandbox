<?php

$query = "SELECT firstname,
                 lastname,
          FROM employees e,
               departments d
          WHERE u.dept_id = d.dept_id
          AND d.name = 'Engineering'
";

?>
