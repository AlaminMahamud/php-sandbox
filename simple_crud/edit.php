<?php
include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $id    = $_POST['id'];
  $name  = $_POST['name'];
  $age   = $_POST['age'];
  $email = $_POST['email'];

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
}
  else {
//updating the table
$sql = "UPDATE users SET name='$name', age='$age', email='$email' WHERE id=$id";
$result = $conn->query($sql);
    //redirectig to the display page. In our case, it is index.php
    header("Location: index.php");
  }
 }
?>


<?php


$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);


$name = $age = $email = "";

while($res = $result->fetch_assoc()){
  $name = $res['name'];
  $age  = $res['age'];
  $email= $res['email'];
 }

?>

<html>
<head>
<title>Edit Data</title>
</head>
<body>
<a href="index.php">Home</a>
   <br/><br/>
   <form name="form1" method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
   <table>
   <tr>
   <td>Name</td>
   <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
   </tr>
   <tr>
   <td>Age</td>
   <td><input type="text" name="age" value="<?php echo $age; ?>"></td>
   </tr>
   <tr>
   <td>Email</td>
   <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
   </tr>
   <tr>
      <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
      <td><input type="submit" name="update" value="Update"></td>
   </tr>
   </table>
   </form>
</body>
</html>
