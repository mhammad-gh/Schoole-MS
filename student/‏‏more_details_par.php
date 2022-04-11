<?php 

require "..\config.php";
session_start();
if (isset($_SESSION['arabic'])) {
    $langu = 'arabic';
}
if (isset($_SESSION['english'])) {
    $langu = 'english';
}
$path = '..\languages/' . $langu . '.php';
include $path;
$id=$_SESSION['id'];

$sql="SELECT fullname FROM student WHERE id='$id'";
$result = mysqli_query( $conn, $sql );
$studen = mysqli_fetch_assoc( $result );
//echo "<h1>".$studen['fullname'] ."</h1>";

$sql2="SELECT name_marks,marks FROM marks WHERE id='$id'";
$result2 = mysqli_query( $conn, $sql2 );

while($all=mysqli_fetch_array($result2)){
    echo "<li>";
    echo "name subject : " . $all['name_marks'];
    echo "_____    the mark : " . $all['marks'];
    echo "<br>";
}
   // $path ='..\.php';

?>
 <!-- exite -->
 </br>
    <a href="../pagevisitor/chooseparents/parents.php">exite</a>