<?php
//require 'schooladministration.php';
//require 'working_program.php';
class teachers
{
    // use schooladministration;
    public $name;
    public $username;
    public $phone;
    public $location;
    public $educationlevel;
    public $subject;

    public function __construct(
        $name,
        $username,
        $phone,
        $location,
        $educationlevel,
        $subject
    ) {
        $this->name = $name;
        $this->username = $username;
        $this->phone = $phone;
        $this->location = $location;
        $this->educationlevel = $educationlevel;
        $this->subject = $subject;
    }

    public function __destruct()
    {
        $this->name = null;
        $this->username = null;
        $this->phone = 0;
        $this->location = null;
        $this->educationlevel = 0;
        $this->subject = null;
    }
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



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="../../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/teacher.css">
    <title>teacher.</title>
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
      <span>T</span>
      <span>E</span>
      <span>A</span>
      <span>C</span>
      <span>H</span>
      <span>E</span>
      <span>R</span>
    </h1>   
     
</section>
<section id="content">
  <div class="container">
  <ul>
<div class="row">
  <div class="col">
  <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <li><a href="exam/create_quize.php" class="item"> <?php echo $lang[
      'quiz'
  ]; ?></a></li>
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <span class="input-group-text" id="inputGroup-sizing-default">Choose The Subject</span> 
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected>Choose...</option>
              <option >Mathematics</option>
              <option >Physics</option>
              <option >Chemistry</option>
              <option >Science</option>
              <option >Informative</option>
              <option >Philosophy</option>
              <option >Arabic</option>
              <option >English</option>
              <option >French</option>
              <option >Geography</option>
              <option >History</option>
              <option >National Education</option>
              <option >Religious Education</option>
              <option >Art</option>
              <option >Physical Education</option>
            </select><br>
            <a href="#" class="btn btn-primary" type="submit">Enter</a>
          </div>
        </div>
      </div>
    </div>
</div>

    <div class="row">
      <div class="col">
      <li><a href="working_program_final_1.php" class="item"><?php echo $lang[
      'program'
  ]; ?></a></li>
      <div class="underline "> <span></span></div>
      </div>
      <div class="col">
        <li><a href="courses_choos.php" class="item"><?php echo $lang[
      'cours'
  ]; ?></a></li>
        <div class="underline "> <span></span></div>
      </div>
      <div class="col">
        <li><a href="#" class="item"><?php echo $lang[
      'home'
  ]; ?></a></li>
        <div class="underline "> <span></span></div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <li><a href="start_school_tech.php" class="item"><?php echo $lang[
      'starting'
  ]; ?></a></li>
        <div class="underline "> <span></span></div>
      </div>
      <div class="col">
        <li><a href="att_tea.php" class="item"><?php echo $lang[
      'Take Attend'
  ]; ?></a></a></li>
        <div class="underline "> <span></span></div>
      </div>
      <div class="col">
        <li><a href="holiday_tech.php" class="item"><?php echo $lang[
      'holiday'
  ]; ?></a></li>
        <div class="underline "> <span></span></div>
      </div>
    </div>

    
    <div class="row">
      <div class="col">
        <li><a href="exam/create_exam.php" class="item"><?php echo $lang[
      'create question'
  ]; ?></a></li>
        <div class="underline "> <span></span></div>
      </div>
      <div class="col">
        <li><a href="addmarks_std.php" class="item"><?php echo $lang[
      'Mraks'
  ]; ?></a></li>
        <div class="underline "> <span></span></div>
      </div>
      <div class="col">
        <li><a href="advertisement_tech.php" class="item"><?php echo $lang[
      'adver'
  ]; ?></a></li>
        <div class="underline "> <span></span></div>
      </div>
    </div>

    <div id="hr"></div>
  <div class="row">
    <div class="col">
      <li><a href="#" class="btn1"><?php echo $lang[
      'Chatting'
  ]; ?></a></li>
     
    </div>
    <div class="col">
      <li><a href="../../demo_QR/index.php" class="btn1"><?php echo $lang[
      'Send Message'
  ]; ?></a></li>
      
    </div>
  </div>

</ul>
</div>
</section>
        <script src="../../js/jquery-3.6.0.min.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>