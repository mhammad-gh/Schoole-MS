<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current_data = file_get_contents('admin.json');

    $array_data = json_decode($current_data, true);
   
    
    $not = true;
    foreach ($array_data as $array_dat) {
        if (
            $array_dat['full name'] == $_POST['username'] &&
            $array_dat['password'] == $_POST['password']
        ) {
            /*  session_start();

            $_SESSION['nameadmin']=$_POST['username'];*/
            header('location: admin1.php');
            $not = false;
        }
    }
    
} ?><html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css1/admin.css">
    <title>Admin</title>
</head>

<body data-target=".navbar">
    <button><i class="fas fa-window-close"></i></button>

    <div class="container">
        <div class="row">

            <div id="icon" class=" col-lg-6  col-sm-12 col-xs-12">
                <i class="fas fa-user-cog"></i>
                <h1>Admin</h1>
            </div>

            <div class=" col-lg-6 col-sm-12 col-xs-12">
                <div id="accordion">
                    <form class="box" action="admin.php" method="POST">
                        <img src="img/small_2x_6deade1b-c4cf-4458-bb3e-9895a8fd6f6e.png" alt="user">
                        <h2>Login Here</h2>
                        
                        <div class="inputBox">
                            <i class="fas fa-User"></i>
                            <input  type="text" required placeholder="Full Name" max="15" name="username">
                        </div>
                        <div class="inputBox">
                            <i class="fas fa-lock"></i>
                            <input type="password" required placeholder="Password" maxlength="15" name="password">
                        </div>
                        <input id="btn" class="btn btn-primary" type="submit" name="submit" value="LOG IN">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">Remember me .</label>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>