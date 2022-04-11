<?php 

require "..\..\config.php";
$attend=array();
$cause=array();
if (isset($_POST['submit'])) {
    if(isset($_POST['attend'])){
    $attend = $_POST['attend'];
    $cause = $_POST['cause'];
    $date=date("Y-m-d");
    $row_data=array();
    $row=array();
    foreach($attend as $i =>$te){
        $row_data[]="('$i','$te','$date')";
    }
    foreach($cause as $i=> $te ){
        $row[]="('$te')";
    }
   
    
// print_r($row_data);
   
    $qury='INSERT INTO atten(id,attend,date) VALUES'.implode(',',$row_data);
    if(mysqli_query($conn,$qury)){
        
    } else{
        //error
        echo 'qury error' . mysqli_error($conn);
    }
   /* foreach($attend as $i=> $at){
        echo $i.": ".$at. '<br>';
        $sql="INSERT INTO atten(id,attend) VALUES('$i','$at',)";
    }
    if(mysqli_query($conn,$sql)){
        //success
    } else{
        //error
        echo 'qury error' . mysqli_error($conn);
    }*/
}}

?>

<form action="att_std.php" method="POST">
    <table>
        <?php 
  $id="SELECT id,fullname,type_class FROM student";

    // get the query result
    $result = mysqli_query( $conn, $id );
    while($all=mysqli_fetch_array($result)):

?>

        <tr>
            <td><?php echo $all['id'];  ?></td>
            <td><?php echo $all['fullname']; ?></td>
            <td><?php echo $all['type_class'] ?></td>
            <td>
                <input type="radio" name="attend[<?php echo $all['id']; ?>]" value="present">P
                <input type="radio" name="attend[<?php echo $all['id']; ?>]" value="absent">A
               
            </td>

        </tr> <br>



        <?php endwhile; ?>


    </table>
    <input type="submit" name="submit" value="submit">
</form>
    <!-- exite -->
    </br>
    <a href="teachers.php">back</a>