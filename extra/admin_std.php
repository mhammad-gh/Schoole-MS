<?php 

require "student/class_std.php";
require "config.php";

$current_data=file_get_contents("student/student.json"); 
$array_data=json_decode($current_data, true); 
$fullname=$username=$brithday=$type_class=$phone= $gender= $location= $email= $password= "";
  $errors=array( 'email'=>'','fullname'=>'','type_class'=>'','gender'=>'','password'=>'');
//  ADD 

if(isset($_POST['submit'])){
   /* $sql="INSERT into student(fullname,username,date,brithday,type_class,phone,gender
    ,location,email,password) values (".$_POST['fullname'].",".$_POST['username'].",".$_POST['date'].",
   ".$_POST['type_class'].",". $_POST['phone'] .",". $_POST['gender'].",".$_POST['location'].",".$_POST['email'].",".$_POST['password'].")";
    */
    $username=$_POST['username'];
    $brithday=$_POST['date'];
    $location=$_POST['location'];
    if(empty($_POST['fullname'])){
        $errors['fullname'] = 'An fullname is required';
     }else{
        $fullname=$_POST['fullname'];
     }
     if(empty($_POST['email'])){
        $errors['email'] = 'An email is required';
     }else{
        $email=$_POST['email'];
     }
     if(empty($_POST['type_class'])){
        $errors['type_class'] = 'An type_class is required';
     }else{
        $type_class=$_POST['type_class'];
     }
     if(empty($_POST['gender'])){
        $errors['gender'] = 'An gender is required';
     }else{
        $gender=$_POST['gender'];
     }
     if(empty($_POST['password'])){
        $errors['password'] = 'An password is required';
     }else{
        $password=$_POST['password'];
     }
     
     if(!array_filter($errors)){
        
    
    $fullname= $_POST['fullname'];
    $username=$_POST['username'];
    $date=date("Y-m-d");
    $brithday=$_POST['date'];
    $type_class=$_POST['type_class'];
   
    $phone= $_POST['phone'];
    $gender= $_POST['gender'];
    $location= $_POST['location'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $sql="INSERT INTO student(fullname,username,date,brithday,type_class,phone,gender
    ,location,email,password) VALUES('$fullname','$username','$date','$brithday','$type_class','$phone',
    '$gender','$location','$email','$password')";
mysqli_query($conn,$sql);
header("location: admin_std.php");
 
     }
       
    
/*
        //get last id
        @$last_item=end($array_data);
        @$last_item_id=$last_item['id'];
                                
        $std = new Student();   
        $std->id=    ++$last_item_id ;
        $std->fullname= $_POST['fullname'];
        $std->username=$_POST['username'];
        $std->created_at=date("Y-m-d");
        $std->date=$_POST['date'];
        $std->type_class=$_POST['type_class'];
        $std->marks=array("math"=>-1,"art"=>-1,"sinec"=>-1);
        $std->phone= $_POST['phone'];
        $std->gender= $_POST['gender'];
        $std->location= $_POST['location'];
        $std->email= $_POST['email'];
        $std->password= $_POST['password'];
       

        $array_data[]=$std; 

        $save= json_encode($array_data ,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); 
        file_put_contents('student/student.json',$save);

        header('location: admin_std.php');

*/
}

//  SEARCH/////

if ($_SERVER['REQUEST_METHOD'] == 'SEARCH') {
    header("location: student/search_std.php?sfullname=$_POST'['sfullname']'");
    
}

//  DELETE/////

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
      header("location: student/delete_std.php?sfullname=$_POST'['sfullname']'");
   
}

//  show all

if ($_SERVER['REQUEST_METHOD'] == 'SHOW') {
    header("location: student/show_std.php?type_class=$_POST'['stype_class']'");
 
}

// Add marks

// if ($_SERVER['REQUEST_METHOD'] == 'ADD') {
//    $name=$_POST['sfullname'];
//    $subject=$_POST['name_subject'];
//    $mark=$_POST['mark'];

//    $id="SELECT id from student where fullname='$name'";
//     echo $id;

// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin_std</title>
</head>

<body>

   <a href="admin1.php">Home</a>
   <h1><span>STUDENT</span></h1>

   <!-- Add teacher -->
   <form action="admin_std.php" method="POST">
      <h3>ADD Student</h3>
      <li>full name</li>
      <input type="text" name="fullname" value="<?php echo htmlspecialchars($fullname); ?>">
      <div class="red-text"><?php echo $errors['fullname']; ?></div>
      <li>username</li>
      <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
      <li>brithday</li>
      <input type="date" name="date">
      <li>class</li>
      <input type="text" name="type_class" value="<?php echo htmlspecialchars($type_class); ?>">
      <div class="red-text"><?php echo $errors['type_class']; ?></div>
      <li>phone</li>
      <input type="number" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
      <li>gender</li>
      <input type="text" name="gender" value="<?php echo htmlspecialchars($gender); ?>">
      <div class="red-text"><?php echo $errors['gender']; ?></div>
      <li>location</li>
      <input type="text" name="location" value="<?php echo htmlspecialchars($location); ?>">
      <li>email</li>
      <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
      <div class="red-text"><?php echo $errors['email']; ?></div>
      <li>password</li>
      <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>">
      <div class="red-text"><?php echo $errors['password']; ?></div>
      <input type="submit" name="submit" value="Add Student">
   </form>

   <!-- Search -->
   <form action="student/search_std.php" method="SEARCH">
      <h3>Search</h3>
      <li> Add full name to found.</li>
      <input type="text" name="sfullname">
      <input type="submit" name="search" value="search">
   </form>

   <!-- Delete -->
   <form action="student/delete_std.php" method="DELETE">
      <h3>Delete</h3>
      <li>Add full name to Delete</li>
      <input type="text" name="sfullname">
      <input type="submit" name="delete" value="Delete">
   </form>

   <!-- show all -->
   <form action="student/show_std.php" method="SHOW">
      <li> Add number class.</li>
      <input type="text" name="stype_class">
      <input type="submit" name="show" value="Show">
   </form>

   <!-- Add marks  -->
   <a href="student/addmarks_std.php">Add Marks</a>

   <!--take attend   -->
   </br>
   <a href="student/att_std.php">Take Attend</a>

   <!--view all marks   -->
   </br>
   <a href="student/view_marks.php">View All Marks</a>

   <!-- exite -->
   </br>
   <a href="admin1.php">exite</a>




</body>

</html>