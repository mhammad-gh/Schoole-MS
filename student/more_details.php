<?php 
require "..\config.php";
$id=$_GET['id'];

$sql="SELECT fullname FROM student WHERE id='$id'";
$result = mysqli_query( $conn, $sql );
$studen = mysqli_fetch_assoc( $result );


$sql2="SELECT name_marks,marks FROM marks WHERE id='$id'";
$result2 = mysqli_query( $conn, $sql2 );



?>
 


    <html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/marks.css">
    <title>marks</title>
</head>

<body>
    <div class="close">
      <a href="view_marks.php"><i class="fas fa-window-close"></i></a>  
    </div>
    <div id="btn_return">
        <i class="fas fa-arrow-alt-circle-left"></i>
    </div>
    <div id="logo">
        <img src="../img/logo_fixed.png">
    </div>

    <section>
        <h1 class="heading">
            <span>M</span>
            <span>A</span>
            <span>R</span>
            <span>K</span>
            <span>S</span>
</h1>
<h1 class="heading"><span><?php echo $studen['fullname'] ;?></span></h1>
        <section id="mark">
            <table>
                <thead>
                    <tr>
                        
                        <th>Subject</th>
                        <th>Mark</th>
                    </tr>
                </thead>
                <tbody>
               <?php while($all=mysqli_fetch_array($result2)):
    
    ?>


                    <tr>
                        <td><?php echo $all['name_marks']; ?></td>
                        <td><?php echo $all['marks']; ?> </td>
                        
                    </tr>
                </tbody> <?php endwhile; ?>
            </table>
        </section>


        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
</body>

</html>