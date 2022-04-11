<?php 

require "..\..\config.php";
$attend=array();
if (isset($_POST['submit'])) {
    if(isset($_POST['attend'])){
    $attend = $_POST['attend'];
    
    $date=date("Y-m-d");
    $row_data=array();
    foreach($attend as $i =>$te){
        $row_data[]="('$i','$te','$date')";
    }

   
    $qury='INSERT INTO atten(id,attend,date) VALUES'.implode(',',$row_data);
    if(mysqli_query($conn,$qury)){
        
    } else{
        //error
        echo 'qury error' . mysqli_error($conn);
    }}
  
}

?>


<!-- exite -->



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="../../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/attendance.css">
    <link rel="stylesheet" href="../../css/result.css">
    <title>attendance</title>
</head>

<body>
    <div class="close">
        <a href="teachers.php"><i class="fas fa-window-close"></i></a>
    </div>
    <div id="btn_return">
        <i class="fas fa-arrow-alt-circle-left"></i>
    </div>
    <div id="logo">
        <img src="../../img/logo_fixed.png">
    </div>
    <section>
        <h1 class="heading">
            <span>A</span>
            <span>T</span>
            <span>T</span>
            <span>E</span>
            <span>N</span>
            <span>D</span>
            <span>A</span>
            <span>N</span>
            <span>C</span>
            <span>E</span>
        </h1>

        <section id="result">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Attendant</th>
                        <th>Absent</th>
                    </tr>
                </thead>
                <tbody>

                <table>


                    <form action="att_std.php" method="POST">
                       
                            <?php 
  $id="SELECT id,fullname,type_class FROM student";

    // get the query result
    $result = mysqli_query( $conn, $id );
    while($all=mysqli_fetch_array($result)):

?>

                            <tr>
                                <td><?php echo $all['fullname']; ?> </td>
                                <td>
                                    <input type="radio" name="attend[<?php echo $all['id']; ?>]" value="present"></td>
                                <td> <input type="radio" name="attend[<?php echo $all['id']; ?>]" value="absent">
                                </td>
                            </tr>


                            <?php endwhile; ?>


                        </table>
                        <input class="btn btn-primary mb-2" id="confirm" type="submit" name="submit" value="submit">
                    </form>



                </tbody>
            </table>
       
    </section>
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>