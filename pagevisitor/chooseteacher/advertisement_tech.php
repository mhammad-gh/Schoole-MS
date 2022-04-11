<?php
session_start();
$current_data = file_get_contents('advertisement.json');
$array_data = json_decode($current_data, true);
$save = json_encode($array_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);


if (isset($_SESSION['arabic'])) {
    $langu = 'arabic';
}
if (isset($_SESSION['english'])) {
    $langu = 'english';
}
$path = '..\..\languages/' . $langu . '.php';
include $path;
$current_data = file_get_contents('..\..\admin1/advertisement.json');
$array_data = json_decode($current_data, true);
$save = json_encode($array_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

foreach(@$array_data as $temp){
echo "<h2>".@$temp."</h2></br>";
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="../../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/empty.css">
    <title>empty</title>
  </head>
   <body> 
    <div class="close">
    <a href="teachers.php"><i class="fas fa-window-close"></i></a>
    </div>

    
  <section id="empty">
    <div class="empty_box">
     <a href="teachers.php"> <p> </p></a>
    </div>
     </section>
    <hr>
        <script src="../../js/jquery-3.6.0.min.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>