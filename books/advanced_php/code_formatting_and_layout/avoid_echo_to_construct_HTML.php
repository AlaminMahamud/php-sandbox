<table>
  <tr>
    <td>Name</td>
    <td>Position</td>
  </tr>
  <?php

    foreach ($employees as  $employee) {
  ?>
      <tr>
        <td><?php echo $employee['name'] ?></td>
        <td><?php echo $employee['position'] ?></td>
      </tr>
  <?php
    }
  ?>
</table>
