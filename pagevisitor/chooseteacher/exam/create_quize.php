<?php 
require "Exam.php";
require "..\..\..\config.php";
session_start();

if (isset($_SESSION['arabic'])) {
    $langu = 'arabic';
}
if (isset($_SESSION['english'])) {
    $langu = 'english';
}
$path = '..\..\..\languages/' . $langu . '.php';
include $path;

if(isset($_POST['submit'])){
   
   
    $subject= $_POST['subject'];
    $tybe_subject=$_POST['tybe_subject'];
    $qusition=$_POST['qusition'];
    $ans=$_POST['ans'];
   
    $option1= $_POST['option1'];
    $option2= $_POST['option2'];
    $option3= $_POST['option3'];
   

    $sql="INSERT INTO quize(subject_name,quize,ans,op1,op2,op3)
     VALUES('$subject','$tybe_subject','$qusition','$ans','$option1','$option2','$option3')";
if(mysqli_query($conn,$sql)){
    echo "true";
}else{
    echo "error". mysqli_errno($coon);
}
header("location: create_quize.php");
 
    
    /*    
    $cont=$_POST['count'];

    //get last id
    
    @$last_item=end($array_data);
    @$last_item_id=$last_item['id'];
                            
    $std = new Exam();   
    $std->id= ++$last_item_id ;
    $std->qusition= $_POST['qusition'];
    $std->ans=$_POST['ans'];
    $std->option1=$_POST['option1'];
    $std->option2=$_POST['option2'];
    $std->option3=$_POST['option3'];
    $std->option4= $_POST['option4'];
   
  
  if($_POST['subject']=="arabic"){
    @$last_item=end($array_arabic);
    @$last_item_id=$last_item['id'];
    $std->id= ++$last_item_id ;
    $array_arabic[]=$std; 

    $save= json_encode($array_arabic ,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); 
    file_put_contents('arabic.json',$save);}
    else{
        $array_data[]=$std; 

    $save= json_encode($array_data ,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); 
    file_put_contents('athor.json',$save);
    }*/
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create Exam</title>
</head>
<form action="create_quize.php" method="POST">
        <h3><?php echo $lang[
      'Create Exam'
  ]; ?></h3>
        <li><?php echo $lang[
      'name subject'
  ]; ?></li>
        <input type="text" name="subject">
        <li><?php echo $lang[
      'tybe class subject'
  ]; ?></li>
        <input type="text" name="tybe_subject">
        <li><?php echo $lang[
      'qusition'
  ]; ?></li>
        <input type="text" name="qusition">
        <li><?php echo $lang[
      'ans'
  ]; ?></li>
        <input type="text" name="ans">
        <li><?php echo $lang[
      'option1'
  ]; ?></li>
        <input type="text" name="option1">
        <li><?php echo $lang[
      'option2'
  ]; ?></li>
        <input type="text" name="option2">
        <li><?php echo $lang[
      'option3'
  ]; ?></li>
        <input type="text" name="option3">
      

        <input type="submit" name="submit" value="Create Exam">
    </form>
    <a href="../teachers.php" target="myframe"><?php echo $lang[
      'back'
  ]; ?></a>
<body>
    
</body>
</html>