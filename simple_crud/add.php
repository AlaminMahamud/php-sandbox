<?php

include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name  = validate($_POST["name"]);
  $age   = validate($_POST["age"]);
  $email = validate($_POST["email"]);

  // checking empty fields
  if(empty($name) || empty($age) || empty($email)) {

    if(empty($name)) {
      echo "<font color='red'>Name field is empty.</font><br/>";
    }

    if(empty($age)) {
      echo "<font color='red'>Age field is empty.</font><br/>";
    }

    if(empty($email)) {
      echo "<font color='red'>Email field is empty.</font><br/>";
    }

    //link to the previous page
    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

  } else {
    $sql  = "INSERT INTO";
    $sql .= " ";
    $sql .= "users(name,age,email)";
    $sql .= " ";
    $sql .= "VALUES('$name', '$age', '$email')";
    $result = $conn->query($sql);

    // display success message
    echo "<font color='green'>Data Added Successfully.";
    echo "<br/><a href='index.php'>View Result</a>";

  }
 }


function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<html>
<head>
    <title>Add Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" name="form1">

        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>
