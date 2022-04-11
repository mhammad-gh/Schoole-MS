<?php
require "..\config.php";
$current_data = file_get_contents("teacher.json");
$array_data = json_decode($current_data, true);

if ( isset( $_GET['tfullname'] ) ) {
    $tfullname = mysqli_real_escape_string( $conn, $_GET['tfullname'] );
    
    $sql = "SELECT * FROM teacher WHERE fullname='$tfullname'";

    // get the query result
    $result = mysqli_query( $conn, $sql );

    // fetch result in array format
    $teacher = mysqli_fetch_assoc( $result );

    mysqli_free_result( $result );
    mysqli_close( $conn );
  
    
}

?>





    <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/students.css">
    <title>students</title>
  </head>
   <body  > 
    <div class="close">
     <a href="../admin_tea.php"><i class="fas fa-window-close"></i></a> 
    </div>
    <div   id="btn_return">
  <i class="fas fa-arrow-alt-circle-left"></i>
  </div>
    <div id="logo">
     <img   src="../img/logo_fixed.png">
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
    <div class="search-box">
      <input type="text" id="search">
      <div class="btn-search"><i class="fas fa-search icon-search"></i></div>
    </div>
    <section id="students">
      
      <table >
        <thead>
          <tr >
        <th >Name</th>
        <th >Email</th>
        <th >Password</th>
        <th >Location</th>
        <th >phone</th>
        <th >Class</th>
        <th >Birthday</th>
        <th >Gender</th>
         </tr>
        </thead>
        <tbody>
        <tr>
      
        <?php if ( $teacher ):?>
          <td data-lable="Name" ><?php echo $teacher['fullname'];?> </td>
          <td data-lable="Email"><?php echo $teacher['email'];?></td>
          <td data-lable="Password"><?php echo $teacher['password'];?></td>
          <td data-lable="Location"><?php echo $teacher['location'];?></td>
          <td data-lable="phone"><?php echo $teacher['phone'];?></td>
          <td data-lable="Class"><?php echo $teacher['type_class'];?></td>
          <td data-lable="Birthday"><?php echo $teacher['brithday'];?></td>
          <td data-lable="Gender"><?php echo $teacher['gender'];?></td>
        </tr>
        <?php else:   ?>
    <h5>No such TEACHER exists!</h5>

    <?php endif;?>
        
       
        </tbody>
      </table> 
      
   
  </section>

</section>

        <script src="../js/jquery-3.6.0.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
    </body>
</html>