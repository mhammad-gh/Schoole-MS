<?php

//

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current_data = file_get_contents('dismissal.json');
    $array_data = json_decode($current_data, true);
    $std = $_POST['biograph'];
    $array_data[] = $std;
    $save = json_encode(
        $array_data,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );
    file_put_contents('dismissal.json', $save);

    header('location: ../admin1.html');
} ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>dismissal</title>
</head>
<body>
       <h1> enter the dismissal </h1>
<form action="dismissal.php" method="post" >
<textarea name="biograph" id="biography" placeholder="dismissal"></textarea>
  <input type="submit" name="create" value="enetr"><br></br>
  <a href="../admin1.html" target="myframe">back</a>
  </form>
</body>
</html>
