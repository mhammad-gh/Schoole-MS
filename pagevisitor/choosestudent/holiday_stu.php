<?php
session_start();
if (isset($_SESSION['arabic'])) {
    $langu = 'arabic';
}
if (isset($_SESSION['english'])) {
    $langu = 'english';
}
$path = '..\..\languages/' . $langu . '.php';
include $path;
$current_data = file_get_contents('holiday.json');
$array_data = json_decode($current_data, true);
$save = json_encode($array_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo $save;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>start of school</title>
</head>
<body>
       <p>
  <a href="students.php" target="myframe"><?php echo $lang['back']; ?></a>
  </p>
  </form>
</body>
</html>