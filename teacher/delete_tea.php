<?php

require "..\config.php";

$current_data = file_get_contents("student.json");
$array_data = json_decode($current_data, true);


if(isset ($_GET['tfullname'] )){
    $id_to_delete=mysqli_real_escape_string($conn, $_GET['tfullname'] );

    $sql="DELETE FROM teacher WHERE fullname='$id_to_delete'";

    if(mysqli_query($conn,$sql)){
        //success
        header('location: ..\admin_tea.php');
    }else{
        //failure
        echo 'qyery error:' . mysqli_error($conn);
    }
}
/*
$current_data = file_get_contents("teacher.json");
$array_data = json_decode($current_data, true);


   $ift=false;
    foreach ($array_data as $id => $temp) {
        if ($temp['fullname'] == $_GET['tfullname']) {
            echo $temp['id'];
            unset($array_data[$id]);
            $ift=true;
            $save= json_encode(array_values($array_data) ,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); 
            file_put_contents('teacher.json',$save);
            break;
        }
    }
    if ($ift==false) {
        echo "this teacher not found";
    }
    */?>
    <!-- exite -->
    </br>
    <a href="../admin_tea.php">exite</a>