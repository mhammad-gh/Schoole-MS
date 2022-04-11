<?php

$path = 'images/*.jpg';
$images = glob($path);
foreach ($images as $img) {
    echo '<li>';
    echo "<img src='$img' height='' width='' /><br>";
    // var_dump($img);
}
session_start();
if (isset($_SESSION['arabic'])) {
    $langu = 'arabic';
}
if (isset($_SESSION['english'])) {
    $langu = 'english';
}
$path = '..\..\languages/' . $langu . '.php';
include $path;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>start of school</title>
</head>
<body>
<form action="" method="post" >
<a href="working_program_final_1.php" target="myframe"><?php echo $lang[
    'down'
]; ?></a>
   <p>
  <a href="teachers.php" target="myframe"><?php echo $lang['back']; ?></a>
  </p>
  </form>
</body>
</html>