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
echo $_SESSION['claas'];
class students
{
    // use schooladministration;

    public $name;
    public $username;
    public $phone;
    public $location;
    public $educationlevel;
    public $gender;

    public function __construct(
        $name,
        $username,
        $phone,
        $location,
        $educationlevel,
        $gender
    ) {
        $this->name = $name;
        $this->username = $username;
        $this->phone = $phone;
        $this->location = $location;
        $this->educationlevel = $educationlevel;
        $this->gender = $gender;
    }

    public function __destruct()
    {
        $this->name = null;
        $this->username = null;
        $this->phone = 0;
        $this->location = null;
        $this->educationlevel = 0;
        $this->gender = null;
    }
}
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
  <a href="start_school_stu.php" target="myframe"><?php echo $lang[
      'starting'
  ]; ?></a>
  </p>
       <p>
  <a href="holiday_stu.php" target="myframe"><?php echo $lang['holiday']; ?></a>
  </p>
       <p>
  <a href="advertisement_stu.php" target="myframe"><?php echo $lang[
      'adver'
  ]; ?></a>
  </p>
       <p>
  <a href="working_program_final.php"  target="myframe"><?php echo $lang[
      'program'
  ]; ?></a>
  </p>
       <p>
  <a href="courses_choos.php"  target="myframe"><?php echo $lang[
      'cours'
  ]; ?></a>
  </p>
  <li class="list-group-item"><a href="exam/exam_now.php"><?php echo $lang[
      'exam now'
  ];?></a></li>
  <p>
  <a href="../../index.php" target="myframe"><?php echo $lang[
      'back'
  ]; ?></a>
  </p>
</body>
</html>