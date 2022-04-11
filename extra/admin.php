<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $current_data=file_get_contents("../admin.json"); 

    $array_data=json_decode($current_data, true); 
$not=true;
    foreach($array_data as $array_dat){
        if($array_dat['full name']==$_POST['username'] && $array_dat['password']==$_POST['password']  ){
            session_start();

            $_SESSION['nameadmin']=$_POST['username'];
            header("location: ../admin1.php");
            $not=false;
            
        }
       
    }
    if($not==true){
        echo "sorry this Admin not exits";
    }
}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
    <li>Admin Name</li>
    <input type="text" name="username" >
    <li>Password</li>
    <input type="password" name="password" >
    <input type="submit" name="sumbit" value="sing in">

    </form>
    
</body>
</html>