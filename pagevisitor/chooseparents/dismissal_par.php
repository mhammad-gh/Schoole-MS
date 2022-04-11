<?php

$current_data = file_get_contents('dismissal.json');
$array_data = json_decode($current_data, true);
$save = json_encode($array_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo $save;
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
  <title>dismissal</title>
</head>
<body>
    <p>
  <a href="parents.php" target="myframe"><?php echo $lang['back']; ?></a>
</p>
  </form>
</body>
</html>