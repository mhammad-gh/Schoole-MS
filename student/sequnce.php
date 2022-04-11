<?php 
require "..\config.php";
$id=$_GET['sfullname'];
$sql2="UPDATE student SET sequnce='1' WHERE fullname='$id'";
mysqli_query($conn,$sql2);



$sql="SELECT * FROM student WHERE fullname='$id'";
$result = mysqli_query( $conn, $sql );
$studen = mysqli_fetch_assoc( $result );
/*
echo "<h1>"."id: ".$studen['id']." ".$studen['fullname']. "</h1>";
echo "<h1>".$studen['type_class'] ."</h1>";
$id2=$studen['id'];*/
/*///  من اجل التسلسل لبدراسي من جهة الطالب
$sql2="SELECT name_marks,marks FROM marks WHERE id='$id2'";
$result2 = mysqli_query( $conn, $sql2 );

while($all=mysqli_fetch_array($result2)){
    echo "<li>";
    echo "name subject : " . $all['name_marks'];
    echo "_____    the mark : " . $all['marks'];
    echo "<br>";

}*/
if(isset($_POST['submit'])){
   /* $sql2="UPDATE student1 SET sequnce='1' where fullname='$id' ";
    mysqli_query($conn,$sql2);*/
    header('location: ../admin_std.php');
}

?>
 <!-- exite -->
 



    <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/allow.css">
    <title>allow</title>
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
      <span>A</span>
      <span>L</span>
      <span>L</span>
      <span>O</span>
      <span>W</span>
      
    </h1>  

    <section id="allow">

   <form action="sequnce.php" method="POST"> 
    <a id="name" href="#" > <?php echo $studen['fullname']; ?> </a>
      <input  type="checkbox" id="inlineCheckbox1" name="true" value="option1">
      <label  for="inlineCheckbox1">Allow</label>
<input class="btn btn-primary mb-2" id="confirm" type="submit" name="submit" value="Confirm">
    </form>

   
  </section>

</section>

        <script src="../js/jquery-3.6.0.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
    </body>
</html>