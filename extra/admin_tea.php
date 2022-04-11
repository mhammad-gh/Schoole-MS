<?php 

require "teacher/class_teacher.php";
require "config.php";


$fullname=$username=$brithday=$type_class=$phone= $gender= $location= $email= $password= "";
  $errors=array( 'email'=>'','fullname'=>'','type_class'=>'','gender'=>'','password'=>'');
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
    $sql="INSERT INTO teacher(fullname,username,date,brithday,type_class,phone,gender
    ,location,email,password) VALUES('$fullname','$username','$date','$brithday','$type_class','$phone',
    '$gender','$location','$email','$password')";
mysqli_query($conn,$sql);
header("location: admin_tea.php");
 
     }
    }
/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       
     $current_data=file_get_contents("teacher/teacher.json"); 
     $array_data=json_decode($current_data, true); 

        //get last id
        @$last_item=end($array_data);
        @$last_item_id=$last_item['id'];
                                
        $teacher = new Teacher();   
        $teacher->id=  ++$last_item_id ;
        $teacher->fullname= $_POST['fullname'];
        $teacher->username=$_POST['username'];
        $teacher->created_at=date("Y-m-d");
        $teacher->date=$_POST['date'];
        $teacher->type_class=$_POST['type_class'];
        $teacher->phone= $_POST['phone'];
        $teacher->gender= $_POST['gender'];
        $teacher->location= $_POST['location'];
        $teacher->email= $_POST['email'];
        $teacher->password= $_POST['password'];

        $array_data[]=$teacher; 

        $save= json_encode($array_data ,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); 
        file_put_contents('teacher/teacher.json',$save);

        header('location: admin1.php');

} 
*/
// Search /////

if ($_SERVER['REQUEST_METHOD'] == 'SEARCH') {
    header("location: teacher/delete_tea.php?tfullname=$_POST'['tfullname']'");
  
}

//  DELETE/////

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    header("location: teacher/delete_tea.php?tfullname=$_POST'['tfullname']'");
 
}

//  show all

if ($_SERVER['REQUEST_METHOD'] == 'SHOW') {
  header("location: teacher/show_tea.php");

}

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
    
<a href="admin1.php">Home</a>
<h1><span>TEACHER</span></h1>

<!-- Add student -->
<form action="admin_tea.php" method="POST">
        <h3>ADD Teacher</h3>
        <li>full name</li>
        <input type="text" name="fullname"  value="<?php echo htmlspecialchars($fullname); ?>">
        <div class="red-text"><?php echo $errors['fullname']; ?></div>
        <li>username</li>
        <input type="text" name="username"  value="<?php echo htmlspecialchars($username); ?>">
        <li>brithday</li>
        <input type="date" name="date">
        <li>class_study</li>
        <input type="text" name="type_class"  value="<?php echo htmlspecialchars($type_class); ?>">
        <div class="red-text"><?php echo $errors['type_class']; ?></div>
        <li>phone</li>
        <input type="number" name="phone"  value="<?php echo htmlspecialchars($phone); ?>">
        <li>gender</li>
        <input type="text" name="gender"  value="<?php echo htmlspecialchars($gender); ?>">
        <div class="red-text"><?php echo $errors['gender']; ?></div>
        <li>location</li>
        <input type="text" name="location"  value="<?php echo htmlspecialchars($location); ?>">
        <li>email</li>
        <input type="email" name="email"  value="<?php echo htmlspecialchars($email); ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <li>password</li>
        <input type="password" name="password"  value="<?php echo htmlspecialchars($password); ?>">
        <div class="red-text"><?php echo $errors['password']; ?></div>
        <input type="submit" name="submit" value="Add Teacher">
    </form>

    <!-- Search -->
    <form action="teacher/search_tea.php" method="SEARCH">
    <h3>Search</h3>
    <li> Add full name to found.</li>
    <input type="text" name="tfullname">
    <input type="submit" name="search" value="search">
    </form>

      <!-- Delete -->
    <form action="teacher/delete_tea.php" method="Delete">
    <h3>Delete</h3>
    <li>Add full name to Delete</li>
    <input type="text" name="tfullname">
    <input type="submit" name="delete" value="Delete">
    </form>
      <!-- show all -->
      <form action="teacher/show_tea.php" method="SHOW">
    <input type="submit" name="show" value="Show">
    
    </form>

      <!-- exite -->
      <a href="admin1.php">exite</a>

</body>
</html>