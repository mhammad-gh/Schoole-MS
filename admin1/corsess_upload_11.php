
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pdf = $_FILES['file'];

    $image_name = $_FILES['file']['name'];
    $image_type = $_FILES['file']['type'];
    $image_temp = $_FILES['file']['tmp_name'];
    $image_size = $_FILES['file']['size'];

    $files_count = count($image_name);
    for ($i = 0; $i < $files_count; $i++) {
        move_uploaded_file(
            $image_temp[$i],
            'C:\xampp1\htdocs\project\project1\admin1\pdf_11\\' .
                $image_name[$i]
        );
    }
}
if (isset($_POST['operator'])) {
    $operat = $_POST['operator'];
    switch ($operat) {
        case 'delet':
            $path = 'pdf_11/*.pdf';
            $images = glob($path);

            foreach ($images as $img) {
                $yy = "<img src='$img'>";
                unlink("$img");
            }
            break;
        default:
    }
}
?>




<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/program_ad.css">
    <title>program_ad</title>
  </head>
   <body  > 
    <div class="close">
      <a href="corsess_choos.php"><i class="fas fa-window-close"></i></a>
    </div>
    <div   id="btn_return">
  <i class="fas fa-arrow-alt-circle-left"></i>
  </div>
    <div id="logo">
     <img   src="../img/logo_fixed.png">
    </div>
  <section id="calendar">
    <h1 class="heading">
      <span>upload coursses the elevent class</span>
      
    </h1>   
    
    <form action="working_program.php" method="post" enctype = "multipart/form-data">
      <div class="form-group">
      
  
        
        <label for="exampleFormControlFile1" >Upload a file </label>
        <div class="underline "> <span></span></div>
       
        <input type="file"  name='file[]' multiple='multiple'  value="Choose File" class="form-control-file" id="exampleFormControlFile1">
      </div>
   
    <div>
    <input class="btn btn-primary mb-2" id="upload" type="submit" name='operator' value="Uplode" /><br></br>
  
  </div>  
  </form>
</section>

        <script src="../js/jquery-3.6.0.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
    </body>
</html>