<?php 
require "..\..\config.php";
session_start();
$id=$_SESSION['id'] ;
$sql="SELECT * FROM student WHERE id='$id'";
$result = mysqli_query( $conn, $sql );
$studen = mysqli_fetch_assoc( $result );


$sql2="SELECT * FROM atten WHERE id='$id'";
$result2 = mysqli_query( $conn, $sql2 );



?>
 


    <html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="../../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/view-attend.css">
    <title>marks</title>
</head>

<body>
    <div class="close">
      <a href="parents.php"><i class="fas fa-window-close"></i></a>  
    </div>
    <div id="btn_return">
        <i class="fas fa-arrow-alt-circle-left"></i>
    </div>
    <div id="logo">
        <img src="../../img/logo_fixed.png">
    </div>

    <section id="view-attend">
        <h1 class="heading">
           
</h1>
<a href="#" class="heading">
<?php echo $studen['fullname'] ;?>
    </a> 

        <section id="mark">
            <table>
                <thead>
                    <tr>
                        
                        <th>Attendance</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
               <?php while($all=mysqli_fetch_array($result2)):
    
    ?>


                    <tr>
                        <td><?php echo $all['attend']; ?></td>
                        <td><?php echo $all['date']; ?> </td>
                        
                    </tr>
                </tbody> <?php endwhile; ?>
            </table>
        </section>


        <script src="../../js/jquery-3.6.0.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
</body>

</html>