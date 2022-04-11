<?php
require "..\config.php";

$current_data = file_get_contents("student.json");
$array_data = json_decode($current_data, true);


if(isset ($_GET['sfullname'] )){
    $id_to_delete=mysqli_real_escape_string($conn, $_GET['sfullname'] );

    $sql="DELETE FROM student WHERE fullname='$id_to_delete'";

    if(mysqli_query($conn,$sql)){
        //success
        header('location: ..\admin_std.php');
    }else{
        //failure
        echo 'qyery error:' . mysqli_error($conn);
    }
}
   $ifs=false;/*   
    foreach ($array_data as $id => $temp) {
        if ($temp['fullname'] == $_GET['sfullname']) {
            echo $temp['id'];
            unset($array_data[$id]);
            $ifs=true;
            $save= json_encode(array_values($array_data) ,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); 
            file_put_contents('student.json',$save);
            break;
        }
    }
    if ($ifs==false) {
        echo "this student not found";
    }*/
    ?>
 <!-- exite -->
 </br>
    <a href="../admin_std.php">exite</a>