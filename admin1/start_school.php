<?php
session_start();
//
$hh=array();
if (isset($_POST['submit'])) {
    $current_data = file_get_contents('start_school.json');
    $array_data = json_decode($current_data, true);
   if($_POST['Choose']=="FirstTerm"){
    $_SESSION['a']= $_POST['start'];
    $_SESSION['b']=$_POST['end'];
    $hh[]=[
      'startFirstTerm'=>  $_POST['start'],
      'endFirstTerm' => $_POST['end']
      ];
   } if($_POST['Choose']=="SecondTerm"){
    $_SESSION['c']= $_POST['start'];
    $_SESSION['d']=$_POST['end'];
    $hh[]=[
      'startSecondTerm' => $_POST['start'],
      'endSecondTerm' => $_POST['end']
      ];
   }
   if($_POST['Choose']=="examfirst"){
    $_SESSION['e']= $_POST['start'];
    $_SESSION['f']=$_POST['end'];
    $hh[]=[
      'startexamfirst'=>  $_POST['start'],
      'endexamfirst' => $_POST['end']
      ];
   }
   if($_POST['Choose']=="examsecond"){
    $_SESSION['g']= $_POST['start'];
    $_SESSION['h']=$_POST['end'];
    $hh[]=[
      'startexamsecond'=>  $_POST['start'],
      'endexamsecond' => $_POST['end']
      ];
   }
    $array_data[] = $hh;
    $save = json_encode(
        $array_data,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );
    file_put_contents('start_school.json', $save);

   // header('location: ../admin1.php');
} ?>
<!--
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>start of school</title>
</head>
<body>
       <h1> enter the dat starting </h1>
<form action="start_school.php" method="post" >
<input type="text" name="start" placeholder="biginning school">
  <input type="submit" name="create" value="enetr"><br></br>
  <a href="../admin1.html" target="myframe">back</a>
  </form>
</body>
</html>
-->


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/calendar_ad.css">
    <title>calendar_ad</title>
  </head>
   <body  > 
    <div class="close">
      <a href="../admin1.php"><i class="fas fa-window-close"></i></a>
    </div>
    <div   id="btn_return">
      <i class="fas fa-arrow-alt-circle-left"></i>
      </div>
    <div id="logo">
     <img   src="../img/logo_fixed.png">
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
          <?php 
           $current_data = file_get_contents('start_school.json');
           $array_data1 = json_decode($current_data, true); ?>
      <th>TERM</th>
      <th>Start of Date</th>
      <th>end of Date</th>
       </tr>
      </thead>

      <tbody>
      <tr>
        <td >First Term </td>
        <td ><?php  echo @ $_SESSION['a'];?></td>
        <td ><?php echo @ $_SESSION['b']; ?></td>
      </tr>
       <tr>
        <td >Second Term</td>
       <td ><?php  echo @ $_SESSION['c'];?></td>
        <td ><?php echo @ $_SESSION['d']; ?></td>
      </tr>
      <tr>
        <td >Exams of the first term </td>
      <td ><?php  echo @ $_SESSION['e'];?></td>
        <td ><?php echo @ $_SESSION['f'];?></td>
      </tr>
       <tr>
        <td >Exams of the second term</td>
        <td ><?php   echo @ $_SESSION['g'];?></td>
        <td ><?php echo @ $_SESSION['h']; ?></td>
      </tbody>

    </table>  

    <div id="update">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Options</label>
        </div>
        <form action="start_school.php" method="POST">
        <select class="select" id="inputGroupSelect01" name="Choose">
          
          <option id="option" selected>Choose...</option>
          <option id="option" value="FirstTerm">First Term </option>
          <option id="option" value="SecondTerm">Second Term </option>
          <option id="option" value="examfirst">Exams of the first term</option>
          <option id="option" value="examsecond">Exams of the second term</option>
        </select>
      </div>
      
        <div >
        
      <label>Start of Date</label>
      
      <input type="date"   name="start">
     <br>
      <label>End of Date</label>
      <input type="date" name="end" >
         
         <input  class="update" type="submit" name="submit" value="update">
         
</form>
    </div>    

  </section>

        <script src="../js/jquery-3.6.0.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
    </body>
</html>