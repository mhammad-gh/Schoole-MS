<?php 

require "..\..\..\config.php";
session_start();
$attend=array();
$mh=array();
$base=array();
$sub=$_SESSION['sub'];
$class=$_SESSION['claas'];
    
    
   $id2="SELECT ques_id,subject_name,class_subject,question,ans,op1,op2,op3,op4 FROM create_ques where class_subject='$class' and subject_name='$sub'  ";
  
  
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
        echo " your marks: " . $cont;
          }  
          else{
              echo "u are not add an ans";
          }
         // session_start();
          $id_s=$_SESSION['id'];
          $dm= $id_s=$_SESSION['claas'];
          $sql="INSERT INTO marks(id,name_marks,marks) VALUES('$id_s','$dm','$cont')";
      mysqli_query($conn,$sql);



}

?>

<form action="exam_now.php" method="POST">
    <table>
        <?php 
        
        @$sub=$_GET['sub'];
      
    $id="SELECT ques_id,subject_name,class_subject,question,ans,op1,op2,op3,op4 FROM create_ques where class_subject='$class' and subject_name='$sub'  ";

    // get the query result
    $result = mysqli_query( $conn, $id );
    if($result):
    while($all=mysqli_fetch_array($result)):

?>

        <tr>
            <td><?php echo $all['ques_id'];  ?>-</td>
            <td><?php echo $all['question']; ?>?</td>
            
            <td>
                <br>
                <input type="radio" name="attend[<?php echo $all['ques_id']; ?>]" value="<?php echo $all['op1']; ?>"><?php echo $all['op1']; ?>
                
                <input type="radio" name="attend[<?php echo $all['ques_id']; ?>]" value="<?php echo $all['op2']; ?>"><?php echo $all['op2']; ?>
                
                <input type="radio" name="attend[<?php echo $all['ques_id']; ?>]" value="<?php echo $all['op3']; ?>"><?php echo $all['op3']; ?>
                
                <input type="radio" name="attend[<?php echo $all['ques_id']; ?>]" value="<?php echo $all['op4']; ?>"><?php echo $all['op4']; ?>
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