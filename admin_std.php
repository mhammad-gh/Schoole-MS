<?php 

require "student/class_std.php";
require "config.php";

$current_data=file_get_contents("student/student.json"); 
$array_data=json_decode($current_data, true); 
$fullname=$username=$brithday=$type_class=$phone= $gender= $location= $email= $password= "";
  $errors=array( 'email'=>'','fullname'=>'','password'=>'');
//  ADD 

if(isset($_POST['submit'])){
   /* $sql="INSERT into student(fullname,username,date,brithday,type_class,phone,gender
    ,location,email,password) values (".$_POST['fullname'].",".$_POST['username'].",".$_POST['date'].",
   ".$_POST['type_class'].",". $_POST['phone'] .",". $_POST['gender'].",".$_POST['location'].",".$_POST['email'].",".$_POST['password'].")";
    */
    $username=$_POST['username'];
    $brithday=$_POST['date'];
    $location=$_POST['location'];
    /*
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
     
     if(!array_filter($errors))
        
    */
    $fullname= $_POST['fullname'];
    $username=$_POST['username'];
    $father=$_POST['father'];
    $date=date("Y-m-d");
    $brithday=$_POST['date'];
    $type_class=$_POST['type_class'];
   
    $phone= $_POST['phone'];
    $gender= $_POST['gender'];
    $location= $_POST['location'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $sql="INSERT INTO student(fullname,username,parent,date,brithday,type_class,phone,gender
    ,location,email,password) VALUES('$fullname','$username','$father','$date','$brithday','$type_class','$phone',
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
if ($_SERVER['REQUEST_METHOD'] == 'VIEW') {
 $idd=$_POST['sfullname'];
//$sql3="INSERT INTO student(sequnce) VALUES('deo') where fullname=nvvnvnvnvn";
  
  header("location: student/sequnce.php?sfullname=$_POST'['sfullname']'");

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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css1/admin_std.css">
  <title>Admin_std</title>
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <a href="admin1.php">
    <button id="exite"><i class="fas fa-window-close"></i></button>
  </a>
   <div class="container">
      <div class="row">

        <div  id="icon" class=" col-lg-6 clo col-md-6 clo col-sm-12 col-xs-12">
          <i  class="fas fa-user-cog"></i>
          <h1>Admin</h1>
        </div>

        <div  class=" col-lg-6  clo col-d-6 clo col-sm-12 col-xs-12">
          <div id="accordion">

  
            <div class="card">
              <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  <i class="fas fa-user-plus"></i> Add Student
                </a>
              </div>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <form action="admin_std.php" method="POST">
                <div class="form-row">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Full Name</span>
                    </div>
                    <input type="text" class="form-control" required maxlength="100" name="fullname">

                  </div>

                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">User Name</span>
                    </div>
                    <input type="text" class="form-control" required maxlength="100" name="username">
                  </div>

                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Father Name</span>
                    </div>
                    <input type="text" class="form-control" required maxlength="100" name="father">
                  </div>

                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default"><i
                          class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" maxlength="30" required class="form-control" placeholder=" Email @ example"
                      aria-label="Recipient's username" aria-describedby="basic-addon2" name="email">

                  </div>
                  <!--
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Gender</span>
                    </div>
                    <input type="text" class="form-control" required maxlength="10" name="gender">

                  </div>-->



                  <fieldset class="form-group">
                    <div class="row">
                      <label id="gender"><i class="fas fa-venus-mars"></i>Gender</label>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" maxlength="20" type="radio" name="gender" id="gridRadios1"
                            value="Male" checked>
                          <label id="gender" class="form-check-label" for="gridRadios1">
                            Male
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" maxlength="20" type="radio" name="gender" id="gridRadios2"
                            value="Female">
                          <label id="gender" class="form-check-label" for="gridRadios2">
                            Female
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>



                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default"><i
                          class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <input type="text" maxlength="150" placeholder="Location" class="form-control" aria-label="Default"
                      aria-describedby="inputGroup-sizing-default" name="location">
                  </div>

                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default"><i
                          class="fas fa-phone-alt"></i></span>
                    </div>
                    <input type="text" maxlength="10" minlength="10" placeholder="phone" required class="form-control"
                      aria-label="Default" aria-describedby="inputGroup-sizing-default" name="phone">
                  </div>




                  <div class="input-group mb-2">
                    <input id="data" type="date" class="form-control" required aria-label=""
                      aria-describedby="gridRadios1" name="date">
                  </div>


                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">class</label>
                    </div>
                    <select type="" id="" class="custom-select" name="type_class" id="inputGroupSelect01 " required>
                      <option selected>Choose...</option>
                      <option value="Tenth">Tenth</option>
                      <option value="Eleven">Eleven</option>
                      <option value="Bachelor">Bachelor</option>
                    </select>
                  </div>



                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default"> <i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" maxlength="10" arequired placeholder="password" required class="form-control"
                      aria-label="Default" aria-describedby="inputGroup-sizing-default" name="password">
                  </div>

                  <input id="log" class="btn btn-primary" type="submit" name="submit" value="Add">
                </form>
              </div>

            </div>


            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                  <i class="fas fa-search"></i> Searech
                </a>
              </div>
              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <form action="student/search_std.php" method="SEARCH">
                  <div class="card-body">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Add full Name</span>
                      </div>
                      <input id="last" type="text" required placeholder="Name" class="form-control" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default" name="sfullname">
                      <input x class="btn btn-primary" type="submit" name="search" value="Search">
                    </div>
                  </div>
                </form>
              </div>

            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                  <i class="fas fa-user-times"></i> Delete
                </a>
              </div>
              <div id="collapseThree" class="collapse" data-parent="#accordion">
                <form action="student/delete_std.php" method="DELETE">
                  <div class="card-body">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Add full Name </span>
                      </div>
                      <input id="last" type="text" required placeholder="Name" class="form-control" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default" name="sfullname">
                      <input class="btn btn-primary" type="submit" name="delete" value="Delete">
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapsefor">
                  <i class="fas fa-search"></i> View Students
                </a>
              </div>
              <div id="collapsefor" class="collapse" data-parent="#accordion">
                <form action="student/show_std.php" method="SHOW">
                  <div class="card-body">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Add class</span>
                      </div>
                      <input id="last" type="text" required placeholder="Name" class="form-control" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default" name="stype_class">
                      <input x class="btn btn-primary" type="submit" name="show" value="Show">
                    </div>
                  </div>
                </form>
              </div>

            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapsefive">
                  <i class="fas fa-search"></i> study sequence
                </a>
              </div>
              <div id="collapsefive" class="collapse" data-parent="#accordion">
                <form action="student/sequnce.php" method="VIEW">
                  <div class="card-body">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Add name</span>
                      </div>
                      <input id="last" type="text" required placeholder="Name" class="form-control" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default" name="sfullname">
                      <input x class="btn btn-primary" type="submit" name="show" value="Show">
                    </div>
                  </div>
                </form>
              </div>

            </div>


            



            <ul class="list-group list-group-flush">
             
              <li class="list-group-item"><a href="student/att_std.php">Take Attend</a></li>
              <li class="list-group-item"><a href="student/view_marks.php">View All Marks</a></li>
              <li class="list-group-item"><a href="admin1.php">EXIT</a></li>

            </ul>



          </div>
        </div>
      </div>



      <script src="js/jquery-3.6.0.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>

</html>