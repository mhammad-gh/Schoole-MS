<?php

//

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current_data = file_get_contents('advertisement.json');
    $array_data = json_decode($current_data, true);
    $std = $_POST['biography'];
    $array_data[] = $std;
    $save = json_encode(
        $array_data,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );
    file_put_contents('advertisement.json', $save);

    header('location: advertisement.php');
} ?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/ads.css">
    <title>ads</title>
  </head>
   <body  > 
    <div class="close">
     <a href="../admin1.php"> <i class="fas fa-window-close"></i></a>
    </div>
    <div   id="btn_return">
  <i class="fas fa-arrow-alt-circle-left"></i>
  </div>
    <div id="logo">
     <img   src="../img/logo_fixed.png">
    </div>
  <section >
    <h1 class="heading">
      <span>A</span>
      <span>D</span>
      <span>S</span>
    </h1>  

    <section id="ads">
      <div class="form-group">
        <label id="message">Advertising</label>
        <form action="advertisement.php" method="post">
        <div class="underline "> <span></span></div>
        
        <textarea  rows="6" cols="20" type="text" id="textarea" class="form-control" name="biography" style="width:20em;" value="<?php echo @$body; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter The AD"></textarea>
        <input type="submit" name="create" value="enetr" class="btn btn-primary mb-2" id="enter"><br>
        </form>
      </div>

   
  </section>

</section>

        <script src="../js/jquery-3.6.0.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
    </body>
</html>

