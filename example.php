<?php 
require "config.php";
session_start();
echo $_SESSION['fullname'];
$crate_table=$conn->query("CREATE TABLE student1(
    `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `parent` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `brithday` varchar(50) NOT NULL,
  `type_class` varchar(50)  NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL)");

    if($crate_table===true){
        echo "yeeeeeeeeeees";
    }
    else{
        echo "noooo".$conn->error;
    }
    $sql="INSERT INTO student1 
    SELECT * from student";
  if(mysqli_query($conn,$sql)){
    echo "it copy";}
    
    $sql2="SELECT * from student1";
    
        $result = mysqli_query( $conn, $sql2 );
        while($all=mysqli_fetch_array($result)){
            $tt=$all['type_class'];
            
            $sql3="UPDATE student1 SET type_class='bb' where id='50' ";
            if(mysqli_query($conn,$sql3)){
                echo "dkvdkd";
            }    
        }
        


  /* $sql="CREATE TABLE persone(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        fullname varchar(50) NOT NULL,
        username varchar(50) NOT NULL,
        parent varchar(50) NOT NULL,
      )";*/
    //   $sql.="ALTER TABLE `mm`
    //   ADD PRIMARY KEY (`id`),
    //   ADD UNIQUE KEY `email` (`email`)";

    //   $sql="ALTER TABLE `mm`
    //   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT";
      
      /*if(mysqli_query($conn,$sql)){
          echo "smskmcksmcsmcksmcksmcsckskc";
      }
      else{
          echo "no it not" .mysqli_error($conn);
      }*/
     /* $sql="CREATE TABLE mygg(
      id int(10) UNSIGNED  AUTO_INCREMENT PRIMARY KEY,
      firstname varchar(50) NOT NULL,
      lastname varchar(50) NOT NULL,
      reg_date TIMESTAMP ON DEFAULT
      CURRENT_TIMESTAMP ON UPDATE
      CURRENT_TIMESTAMP
      )";
     if( mysqli_query($conn,$sql)){
         echo  "it is create";
     }else{
         mysqli_error($conn);
     }*/

?>

