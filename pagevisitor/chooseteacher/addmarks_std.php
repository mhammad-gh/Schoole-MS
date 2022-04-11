<?php 
require "..\..\config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name=$_POST['sfullname'];
        $subject=$_POST['name_subject'];
        $mark=$_POST['mark'];
        $id="SELECT id FROM student where fullname='$name'";
       
       $result = mysqli_query( $conn, $id );

    // fetch result in array format
    $studen = mysqli_fetch_assoc( $result );

    mysqli_free_result( $result );
    if($studen){
    $to= $studen['id'];
    echo $to,$subject,$mark;
     $sql="INSERT INTO marks(id,name_marks,marks) VALUES('$to','$subject','$mark')";
   // $sql=" INSERT INTO `marks` (`id_marks`, `id`, `name_marks`, `marks`) VALUES (NULL, '37', 'math', '100')";
   if(mysqli_query($conn,$sql)){
    //success
} else{
    //error
    echo 'qury error' . mysqli_error($conn);
}
    }
     else{
         echo "this student not exits";
     }
    

     }
/*
$current_data = file_get_contents("student.json");
$array_data = json_decode($current_data, true);
$ifa=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  foreach($array_data as $key => $temp){
         if($temp['fullname']==$_POST['sfullname']){
             $temp['marks']=array("math"=>$_POST['math'],"art"=>$_POST['art'],"sinec"=>$_POST['since']);
             $array_data[$key]=$temp;
             $ifa=true;
             $save= json_encode(array_values($array_data) ,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); 
             file_put_contents('student.json',$save);
             break;
         }
     }
     if($ifa==false){
         echo "isnot found student";
     }
     if($ifa==true){
     header('location:/project_one/admin_std.php');}
    }
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Add marks</h3>
    <form action="addmarks_std.php" method="POST">
    <li>add full name</li>
    <input type="text" name="sfullname">
    <li>name subject</li>
    <input type="text" name="name_subject">
    <li>the mark</li>
    <input type="text" name="mark">
    
    <input type="submit" name="ADD" value="Add">
    </form>
   <!-- exite -->
   </br>
    <a href="teachers.php">exite</a>
</body>
</html>
