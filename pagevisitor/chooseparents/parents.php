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

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="../../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/parents.css">
    <title>parents</title>
  </head>
   <body  > 
    <div class="close">
     <a href="../../index.php"><i class="fas fa-window-close"></i></a> 
    </div>
    <div   id="btn_return">
  <i class="fas fa-arrow-alt-circle-left"></i>
  </div>
    <div id="logo">
     <img   src="../../img/logo_fixed.png">
    </div>
  <section >
    <h1 class="heading">
      <span>P</span>
      <span>A</span>
      <span>R</span>
      <span>E</span>
      <span>N</span>
      <span>T</span>
      <span>S</span>
    </h1>   
     
</section>
<section id="content">
  <div class="container">
  <ul>
    <div class="row">
      <div class="col">
        <li><a href="view-attend.php" class="item">Attendance</a></li>
        <div class="underline "> <span></span></div>
      </div>
      <div class="col">
        <li><a href="working_program_final.php" class="item">Certificate</a></li>
        <div class="underline "> <span></span></div>
      </div>
    </div>
    
    <div class="row">
      <div class="col">
        <li><a href="../chooseparents/working_program_final_1.php" class="item">Program</a></li>
        <div class="underline "> <span></span></div>
        </div>
      <div class="col">
        <li><a href="more_details.php" class="item">Mraks</a></li>
        <div class="underline "> <span></span></div>
      </div>
    </div>

  <div id="hr"></div>
  <div class="row">
    <div class="col">
      <li><a href="#" class="btn1">Chatting</a></li>
    </div>
    <div class="col">
      <li><a href="../../demo_QR/index.php" class="btn1">Send Message</a></li>
    </div>
  </div>

</ul>
</div>
</section>
        <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    </body>
</html>