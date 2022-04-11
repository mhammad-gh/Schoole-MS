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
$current_data = file_get_contents('start_school.json');
$array_data = json_decode($current_data, true);
$save = json_encode($array_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="../../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/calendar.css">
    <title>calendar</title>
  </head>
   <body  > 
    <div class="close">
      <a href="teachers.php"><i class="fas fa-window-close"></i></a>
    </div>
    <div   id="btn_return">
  <i class="fas fa-arrow-alt-circle-left"></i>
  </div>
    <div id="logo">
     <img   src="../../img/logo_fixed.png">
    </div>
  <section id="calendar">
    <h1 class="heading">
      <span>C</span>
      <span>A</span>
      <span>L</span>
      <span>E</span>
      <span>N</span>
      <span>D</span>
      <span>A</span>
      <span>R</span>
    </h1>   
    <table id="table">
      <thead>
        <tr>
      <th>TERM</th>
      <th>Start of Date</th>
      <th>end of Date</th>
       </tr>
      </thead>

      <tbody>
      <tr>
        <td >First Term </td>
        <td >2021-08-01</td>
        <td >2021-08-01</td>
      </tr>
       <tr>
        <td >Second Term</td>
        <td >2021-08-09</td>
        <td >2021-08-12</td>
      </tr>
      <tr>
        <td >Exams of the first term </td>
        <td >	2021-08-03</td>
        <td >2021-08-04</td>
      </tr>
       <tr>
        <td >Exams of the second term</td>
        <td >2021-08-01</td>
        <td >2021-08-02</td>
      </tbody>

    </table>  

  </section>

        <script src="../../js/jquery-3.6.0.min.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>