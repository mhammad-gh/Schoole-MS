<?php
require "..\..\config.php";
session_start();
if (isset($_SESSION['arabic'])) {
    $lan = 'arabic';
}
if (isset($_SESSION['english'])) {
    $lan = 'english';
}
$path = '..\..\languages/' . $lan . '.php';
include $path;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
 $name = mysqli_real_escape_string( $conn, $_POST['fullname'] );
 $pass = mysqli_real_escape_string( $conn, $_POST['password'] );
 $sql = "SELECT * FROM teacher WHERE fullname='$name' and password='$pass'";
 $result = mysqli_query( $conn, $sql );

 // fetch result in array format
 $studen = mysqli_fetch_assoc( $result );

 mysqli_free_result( $result );
 mysqli_close( $conn );


 if($studen){
    header("location: teachers.php");
 }
 }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>  Enter Teacher </title>
</head>
<body>

<form action="enterteacher.php" method="POST">
<li> <?php echo $lang['fullname']; ?> </li>
   <input type="text" name="fullname" placeholder=<?php echo $lang['pleasf']; ?>>
 
<div>
<li> <?php echo $lang['password']; ?> </li>
  <input type="text" name="password" placeholder=<?php echo $lang[
      'please'
  ]; ?>>
</div>
<input type="submit" name="sumbit" value=<?php echo $lang['submit']; ?>>
</form>
  <p>
  <a href="../../visitor.php" target="myframe"><?php echo $lang[
      'back'
  ]; ?></a>
</p>
</body>
</html>