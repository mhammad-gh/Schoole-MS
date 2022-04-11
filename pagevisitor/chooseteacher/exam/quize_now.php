<?php 

require "..\..\..\config.php";
session_start();
$attend=array();
$mh=array();
$base=array();
$sub=$_SESSION['sub'];

    
    
   $id2="SELECT * FROM quize where  subject_name='$sub'  ";
  
  
   $result2 = mysqli_query( $conn, $id2 );
   while($all2=mysqli_fetch_array($result2)){
       $base[]=$all2['ans'];
   }
   @$attend = $_POST['attend'];
   $cont=0;
   if($attend){
       foreach(@$attend as  $value)
      {
        $mh[]=$value;
      }
      print_r($mh);
      echo "</br>";
    print_r($base);
if (isset($_POST['submit'])) {
    echo "dldmdldl,";
    
      
    
 
         foreach($base as $i =>$ii){
             if(@$mh[$i]==$ii){
                 $cont++;
             }
         }
        echo " your marks: " ;
          }  
          else{
              echo "u are not add an ans";
          }
         // session_start();
          $id_s=$_SESSION['id'];
          $dm= $id_s=$_SESSION['claas'];
  $bb=$all2['id_quize'];
          $sql3="UPDATE student1 SET type_class='bb' where id='50' ";
          $sql="UPDATE quize SET id='$id_s' where id_quize='$bb' ";
      mysqli_query($conn,$sql);



}

?>

<form action="quize_now.php" method="POST">
    <table>
        <?php 
        
        @$sub=$_GET['sub'];
      
    $id="SELECT *  FROM quize where   subject_name='$sub'  ";

    // get the query result
    $result = mysqli_query( $conn, $id );
    if($result):
    while($all=mysqli_fetch_array($result)):

?>

        <tr>
            <td><?php echo $all['id_quize'];  ?>-</td>
            <td><?php echo $all['quize']; ?>?</td>
            
            <td>
                <br>
                <input type="radio" name="attend[<?php echo $all['id_quize']; ?>]" value="<?php echo $all['op1']; ?>"><?php echo $all['op1']; ?>
                
                <input type="radio" name="attend[<?php echo $all['id_quize']; ?>]" value="<?php echo $all['op2']; ?>"><?php echo $all['op2']; ?>
                
                <input type="radio" name="attend[<?php echo $all['id_quize']; ?>]" value="<?php echo $all['op3']; ?>"><?php echo $all['op3']; ?>
                
  
                </br>    _________________________________________________________
            
            </td>

        </tr> <br>



        <?php endwhile;
        endif; ?>


    </table>
    <input type="submit" name="submit" value="confirm">
</form>
    <!-- exite -->
    </br>
    <a href="../students.php">back</a>