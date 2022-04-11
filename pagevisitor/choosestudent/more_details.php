<?php 
require "..\..\config.php";
session_start();
$id=$_SESSION['id'] ;

$sql="SELECT * FROM student WHERE id='$id'";
$result = mysqli_query( $conn, $sql );
$studen = mysqli_fetch_assoc( $result );


$sql2="SELECT name_marks,marks FROM marks WHERE id='$id'";
$result2 = mysqli_query( $conn, $sql2 );



?>
 


    <html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="../../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/marks.css">
    <title>marks</title>
</head>

<body>
    <div class="close">
      <a href="students.php"><i class="fas fa-window-close"></i></a>  
    </div>
    <div id="btn_return">
        <i class="fas fa-arrow-alt-circle-left"></i>
    </div>
    <div id="logo">
        <img src="../../img/logo_fixed.png">
    </div>

    <section>
        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>q</span>
            <span>u</span>
            <span>e</span>
            <span>n</span>
            <span>c</span>
            <span>e</span>
</h1>
<div id="box">
<span>
<h1 class="heading"><?php echo "id: ".$studen['id'] ;?><br>
<?php echo "name: ".$studen['fullname'] ;?><br>
<?php echo "emial :".$studen['email'] ;?><br>
<?php echo "type_class :".$studen['type_class'] ;?><br>
<?php echo "location :".$studen['location'] ;?><br>
<?php echo "phone: ".$studen['phone'] ;?><br>
<?php echo "date: ".$studen['date'] ;?><br></span>
</div>

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


        <script src="../../js/jquery-3.6.0.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
</body>

</html>