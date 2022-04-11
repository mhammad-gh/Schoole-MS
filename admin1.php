<?php 

require "config.php";
  if(isset($_POST['submit'])){

   $sql=" CREATE TABLE ali (
        id int(11) NOT NULL,
        fullname varchar(50) NOT NULL,
        username varchar(50) NOT NULL,
        parent varchar(50) NOT NULL,
      )";
    //   $sql.="ALTER TABLE `mm`
    //   ADD PRIMARY KEY (`id`),
    //   ADD UNIQUE KEY `email` (`email`)";

    //   $sql="ALTER TABLE `mm`
    //   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT";
      
      if(mysqli_query($conn,$sql)){
          echo "smskmcksmcsmcksmcksmcsckskc";
      }
     /* $sql="CREATE TABLE mygg(
      id int(10) UNSIGNED  AUTO_INCREMENT PRIMARY KEY,
      firstname varchar(50) NOT NULL,
      lastname varchar(50) NOT NULL,
      reg_date TIMESTAMP ON DEFAULT
      CURRENT_TIMESTAMP ON UPDATE
      CURRENT_TIMESTAMP
      )";
     if( mysqli_query($conn,$sql)){
         echo  "it is create";
     }else{
         mysqli_error($conn);
     }*/
  }
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css1/admin1.css">
    <title>admin1</title>
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-expand-lg ">
        <div id="close">
            <a href="admin.php"> <i class=" fas fa-window-close "></i></a>
        </div>
        <p> <i class="fas fa-user-cog"></i></p>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <a ><i class="fas fa-bars " aria-hidden="true"></i></a>
      </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="admin1/working_program.php"> <i id="iconbar" class="fas fa-table"></i>Program</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="admin1/corsess_choos.php"> <i id="iconbar" class="fas fa-book"></i>Courses</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="admin1/advertisement.php"><i  id="iconbar" class="fas fa-ad"></i>Advertisement</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <i id="iconbar" class="fas fa-book-reader"></i>study sequence</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i  id="iconbar" class="fas fa-check-square"></i> Results</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i  id="iconbar" class="fas fa-certificate"></i>Certificates</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="admin1/holiday.php"><i  id="iconbar" class="fas fa-smile-beam"></i>Holiday</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="demo_QR/index.php"><i  id="iconbar"></i>send messge</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="admin1/start_school.php"><i  id="iconbar"></i>calendar</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="example.php"><i  id="iconbar"></i>sucss</a>
                </li>
            </ul>

    </nav>

    <header class="headd">
        <div class="container ">
            <a class="nav-link" href="index.php">
                <h1>NAI LSEA SCHOOL</h1>
            </a>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">

                <div id="icon" class=" col-lg-6  col-md-6 clo col-sm-12 col-xs-12">
                    <a class="nav-link" href="admin_tea.php"> <span><i  class="fa fa-chalkboard-teacher" aria-hidden="true"></i><h2>TECHER</h2></span>
                    </a>
                </div>

                <div id="icon" class=" col-lg-6  col-md-6 clo col-sm-12 col-xs-12">
                    <a class="nav-link" href="admin_std.php"> <span> <i  class="fa fa-user" aria-hidden="true"></i><h2>STUDENT</h2></span>
                    </a>
                </div>

            </div>
        </div>
    </section>
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>


</html>