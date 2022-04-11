<?php 

require "teacher/class_teacher.php";
require "config.php";


$fullname=$username=$brithday=$type_class=$phone= $gender= $location= $email= $password= "";
  $errors=array( 'email'=>'','fullname'=>'','password'=>'');
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
     
     if(!array_filter($errors)){
        */
    
    $fullname= $_POST['fullname'];
    $username=$_POST['username'];
    $date=date("Y-m-d");
    $brithday=$_POST['date'];
    $type_class=$_POST['type_class'];
    if(isset($_POST['name_subject1'])){
    $name_subject=$_POST['name_subject1'];
    }else if(isset($_POST['name_subject2'])){
      $name_subject=$_POST['name_subject2'];
    }else{
      $name_subject=$_POST['name_subject3'];
    }
    $phone= $_POST['phone'];
    $gender= $_POST['gender'];
    $location= $_POST['location'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $sql="INSERT INTO teacher(fullname,username,date,brithday,type_class,name_subject,phone,gender
    ,location,email,password) VALUES('$fullname','$username','$date','$brithday','$type_class','$name_subject','$phone',
    '$gender','$location','$email','$password')";
mysqli_query($conn,$sql);
header("location: admin_tea.php");
 
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

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css1/admin_tea.css">
    <title>Admin_tea</title>
  </head>


  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <a href="admin1.php">
    <button  ><i class="fas fa-window-close"></i></button>
</a>
  
    <div class="container">
      <div class="row">

        <div  id="icon" class=" col-lg-6 col-md-12 clo col-sm-12 col-xs-12">
          <i  class="fas fa-user-cog"></i>
          <h1>Admin</h1>
        </div>

        <div  class=" col-lg-6  clo col-d-6 clo col-sm-12 col-xs-12">
          <div id="accordion">

  
            <div class="card">
              <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  <i class="fas fa-user-plus"></i> Add Teacher
                </a>
              </div>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <form action="admin_tea.php" method="POST">
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
                
                  <label><i class="fas fa-chalkboard-teacher"></i>Choose the Subject</label>
                 
                  
                  
                    <div class="form-row align-items-center">
                      
                      <div class="col-auto my-1">
                        
                        <label class="mr-sm-2" for="inlineFormCustomSelect"> Tenth</label>
                        <select class="custom-select mr-sm-2"name="name_subject1"  id="inlineFormCustomSelect">
                          <option  value="1"></option>
                          <option value="Mathematics">Mathematics</option>
                          <option value="Science">Science</option>
                          <option value="Physics">Physics</option>
                          <option value="Chemistry">Chemistry</option>
                          <option value="Arabic">Arabic</option>
                          <option value="English">English</option>
                          <option value="French">French</option>
                          <option value="Informative">Informative</option>
                          <option value="Philosophy">Philosophy</option>
                          <option value="Geography">Geography</option>
                          <option value="History">History</option>
                          <option value="Nationalism">Nationalism</option>
                          <option value="Religion">Religion</option>
                          <option value="Sport">Sport</option>
                          <option value="Art">Art</option>
                        </select>
                      </div>
                      <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Eleven</label>
                        <select class="custom-select mr-sm-2"name="name_subject2" id="inlineFormCustomSelect">
                          <option  value="1"></option>
                          <option value="Mathematics">Mathematics</option>
                          <option value="Science">Science</option>
                          <option value="Physics">Physics</option>
                          <option value="Chemistry">Chemistry</option>
                          <option value="Arabic">Arabic</option>
                          <option value="English">English</option>
                          <option value="French">French</option>
                          <option value="Informative">Informative</option>
                          <option value="Nationalism">Nationalism</option>
                          <option value="Religion">Religion</option>
                          <option value="Sport">Sport</option>
                          <option value="Art">Art</option>
                        </select>
                      </div>
                      <div class="col-auto my-1 ">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Bachelor</label>
                        <select class="custom-select mr-sm-2" name="name_subject3" id="inlineFormCustomSelect">
                          <option  value="1"></option>
                          <option value="Mathematics">Mathematics</option>
                          <option value="Science">Science</option>
                          <option value="Physics">Physics</option>
                          <option value="Chemistry">Chemistry</option>
                          <option value="Arabic">Arabic</option>
                          <option value="English">English</option>
                          <option value="French">French</option>
                          <option value="Nationalism">Nationalism</option>
                          <option value="Religion">Religion</option>
                          <option value="Sport">Sport</option>
                        </select>
                        </select>
                      </div>
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
                <form action="teacher/search_tea.php" method="SEARCH">
                  <div class="card-body">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Add full Name</span>
                      </div>
                      <input id="last" type="text" required placeholder="Name" class="form-control" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default" name="tfullname">
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
                <form action="teacher/delete_tea.php" method="DELETE">
                  <div class="card-body">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Add full Name </span>
                      </div>
                      <input id="last" type="text" required placeholder="Name" class="form-control" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default" name="tfullname">
                      <input class="btn btn-primary" type="submit" name="delete" value="Delete">
                    </div>
                  </div>
                </form>
              </div>
            </div>


            <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="teacher/att_tea.php">Take Attend</a></li>
              <li class="list-group-item"><a href="teacher/show_tea.php">View All Teacher</a></li>
              <li class="list-group-item"><a href="admin1.php">EXIT</a></li>
            </ul>
        
          </form>
            </div>
      </div>
    </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>