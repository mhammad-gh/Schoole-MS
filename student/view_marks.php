<?php 
require "..\config.php";

//$sql = "SELECT id,fullname FROM student";




$sql= "SELECT id,sum(marks) as 'Total' FROM marks GROUP by id ";
$result = mysqli_query( $conn, $sql );






?>


 


    <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/result.css">
    <title>result</title>
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
      <span>R</span>
      <span>E</span>
      <span>S</span>
      <span>U</span>
      <span>L</span>
      <span>T</span>
    </h1>   
  
    <section id="result">
      <table>
      <thead>
        <tr>
      <th>Name</th>
      <th>Mark</th>
      <th>Details</th>
       </tr>
      </thead>
      <tbody>
      <tr><?php
      while($all=mysqli_fetch_array($result)):
    
       
        
   
    $sql2="SELECT fullname FROM student WHERE id=".$all['id'];
    $result2 = mysqli_query( $conn, $sql2 );
    $studen = mysqli_fetch_assoc( $result2 );
    
    
    
?>
    
        <td ><?php echo @$studen['fullname']; ?> </td>
        <td ><?php echo $all['Total']; ?></td>
        <?php $id=$all['id']; ?>
        <td ><a href="more_details.php?id=<?php echo $id; ?>">MORE</a></td>
      </tr>
     
      </tbody><?php endwhile; ?>
    </table>  
  </section>
</section>
        <script src="../js/jquery-3.6.0.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
    </body>
</html>