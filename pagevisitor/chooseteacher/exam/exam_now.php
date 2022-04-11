<?php 
require "Exam.php";
require "..\..\..\config.php";
   @$last_item=end($_GET['name_subject']);
   echo $last_item;
    $current_data=file_get_contents('athor.json'); 
    $array_data=json_decode($current_data, true); 

    $attend=array();
    $mh=array();
if (isset($_POST['submit'])) {
 @ $attend = $_POST['attend'];
 $cont=0;
 if($attend){
 foreach(@$attend as $key => $value)
{
  $mh[]=$value;
}
 foreach($array_data as $i => $tm){
     if($mh[$i]==$tm['ans']){
         $cont++;
     }
 }
 echo " your marks: " . $cont;
   }  
   else{
       echo "u are not add an ans";
   } //   foreach($array_data as  $as){
        //       if($mh==$as['ans']){
        //           $cont++;
        //       }
        //   }
        


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exam</title>
</head>

<body>
    <form action="exam_now.php?name_subject=<?php $name_subject ?>" method="POST">
        <table>
            <tr>
                <?php foreach($array_data as $temp): ?>
                </br></br>
                <td> <?php echo $temp['qusition'];  ?> :</td>

                <td> <td> <input type="radio" name="attend[<?php echo $temp['id']; ?>]"
                        value="<?php echo $temp['option1']; ?>"><?php echo $temp['option1']; ?> </td>
                        <td>  <input type="radio" name="attend[<?php echo $temp['id']; ?>]"
                        value="<?php echo $temp['option2']; ?>"><?php echo $temp['option2']; ?> </td>
                        <td>  <input type="radio" name="attend[<?php echo $temp['id']; ?>]"
                        value="<?php echo $temp['option3']; ?>"><?php echo $temp['option3']; ?> </td>
                        <td> <input type="radio" name="attend[<?php echo $temp['id']; ?>]"
                        value="<?php echo $temp['option4']; ?>"><?php echo $temp['option4']; ?> </td>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>
