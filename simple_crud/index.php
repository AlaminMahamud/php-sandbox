<?php

include_once('config.php');

$sql =  'SELECT * FROM users ORDER BY id DESC';
$result = $conn->query($sql);

// if($result->num_rows > 0) {
//   // Output data of each row.
//  } else {
//   echo "0 results";
//  }

?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

    <table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>Name</td>
        <td>Age</td>
        <td>Email</td>
        <td>Update</td>
    </tr>
    <?php
  while($res = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['age']."</td>";
        echo "<td>".$res['email']."</td>";
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
    }
    ?>
    </table>
</body>
</html>
<?php
$conn->close();
?>
