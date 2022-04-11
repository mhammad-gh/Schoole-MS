<?php 
require "..\config.php";
$current_data = file_get_contents("student.json");
$array_data = json_decode($current_data, true);

if(isset($_GET['stype_class'])){
    $type = mysqli_real_escape_string( $conn, $_GET['stype_class'] );

    // make sql
    $sql = "SELECT * FROM student WHERE type_class='$type' order by fullname ";
    // get the query result
    $result = mysqli_query( $conn, $sql );

    // fetch result in array format
    

    

}
/*$isl=false;
foreach($array_data as $temp){
   
    if($temp["type_class"] == $_GET['stype_class']){
    echo "<li>";
    echo "id : "        . $temp['id'];
    echo "<br>" . "<li>";
    echo "full name : " . $temp['fullname'];
    echo "<br>" . "<li>";
    echo "user : "      . $temp['username'];
    echo "<br>" . "<li>";
    echo "brithday : "      . $temp['date'];
    echo "<br>" . "<li>";
    echo "type_class : "      . $temp['type_class'];
    echo "<br>" . "<li>";
    echo "number phone : " . $temp['phone'];
    echo "<br>" . "<li>";
    echo "gender : "     . $temp['gender'];
    echo "<br>" . "<li>";
    echo "location : "   . $temp['location'];
    echo "<br>" . "<li>";
    echo "email : "      .$temp['email'];
    echo "<br> *********************";
    $isl=true;
    }elseif($_GET['stype_class']==""){
        echo "<li>";
    echo "id : "        . $temp['id'];
    echo "<br>" . "<li>";
    echo "full name : " . $temp['fullname'];
    echo "<br>" . "<li>";
    echo "user : "      . $temp['username'];
    echo "<br>" . "<li>";
    echo "brithday : "      . $temp['date'];
    echo "<br>" . "<li>";
    echo "type_class : "      . $temp['type_class'];
    echo "<br>" . "<li>";
    echo "number phone : " . $temp['phone'];
    echo "<br>" . "<li>";
    echo "gender : "     . $temp['gender'];
    echo "<br>" . "<li>";
    echo "location : "   . $temp['location'];
    echo "<br>" . "<li>";
    echo "email : "      .$temp['email'];
    echo "<br> *********************";
    }
}*/
   
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
     <a href="../admin_std.php"><i class="fas fa-window-close"></i></a> 
    </div>
    <div   id="btn_return">
  <i class="fas fa-arrow-alt-circle-left"></i>
  </div>
    <div id="logo">
     <img   src="../img/logo_fixed.png">
    </div>
  <section >
    <h1 class="heading">
      <span>S</span>
      <span>T</span>
      <span>U</span>
      <span>D</span>
      <span>E</span>
      <span>N</span>
      <span>T</span>
      <span>S</span>
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
         
        </thead>
        <tbody>
        <?php  while($studen=mysqli_fetch_array($result)):?>
        <tr>
        
            <td data-lable="Name" ><?php echo $studen['fullname'];?> </td>
          <td data-lable="Email"><?php echo $studen['email'];?></td>
          <td data-lable="Password"><?php echo $studen['password'];?></td>
          <td data-lable="Location"><?php echo $studen['location'];?></td>
          <td data-lable="phone"><?php echo $studen['phone'];?></td>
          <td data-lable="Class"><?php echo $studen['type_class'];?></td>
          <td data-lable="Birthday"><?php echo $studen['brithday'];?></td>
          <td data-lable="Gender"><?php echo $studen['gender'];?></td>

        
        </tr>
        <?php endwhile; ?></tr>
       
        </tbody>
      </table> 
      
   
  </section>

</section>

        <script src="../js/jquery-3.6.0.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
    </body>
</html>