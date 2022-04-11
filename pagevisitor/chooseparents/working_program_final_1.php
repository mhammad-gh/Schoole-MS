<?php
require 'fpdf.php';

if (isset($_POST['ou'])) {
    $operat = $_POST['ou'];
    switch ($operat) {
        case 'download' || 'تنزيل':
            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('arial', 'B', 20);
            $pdf->cell(0, 10, 'welcom', 'T', 2, 'C', 2, 'google.com');
            $pdf->output('ten.jpg', 'D');
            $pdf->output();
            break;
        default:
    }
}
if (isset($_POST['on'])) {
    $operat = $_POST['on'];
    switch ($operat) {
        case 'download' || 'تنزيل':
            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('arial', 'B', 20);
            $pdf->cell(0, 10, 'welcom', 'T', 2, 'C', 2, 'google.com');
            $pdf->output('elevent.jpg', 'D');
            $pdf->output();
            break;
        default:
    }
}
if (isset($_POST['om'])) {
    $operat = $_POST['om'];
    switch ($operat) {
        case 'download' || 'تنزيل':
            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('arial', 'B', 20);
            $pdf->cell(0, 10, 'welcom', 'T', 2, 'C', 2, 'google.com');
            $pdf->output('twelve.jpg', 'D');
            $pdf->output();
            break;
        default:
    }
}

session_start();
if (isset($_SESSION['arabic'])) {
    $langu = 'arabic';
}
if (isset($_SESSION['english'])) {
    $langu = 'english';
}
$path = '..\..\languages/' . $langu . '.php';
include $path;
?>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="..\..\css/bootstrap.min.css">
    <link href="..\..\css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="..\..\css\class_1.css">
    <title>class</title>
</head>

<body>
    <div class="close">
        <a href="parents.php"><i class="fas fa-window-close"></i></a>
    </div>
    <div id="btn_return">
        <i class="fas fa-arrow-alt-circle-left"></i>
    </div>
    <div id="logo">
        <img src="..\..\img/logo_fixed.png">
    </div>
    <section>
        <h1 class="heading">
            <span>C</span>
            <span>L</span>
            <span>A</span>
            <span>S</span>
            <span>S</span>
        </h1>

        <section id="class">
            <div id="item">
                <a href="#" class="word"><?php echo $lang['ten']; ?> </a>
                <div id="labl">
                <form action="" method="post">
                <input type="submit" name="ou"id="download" value=<?php echo $lang['down']; ?>>
                    <label>Program</label> <br>
                 
                </form>
                </div>
            </div>

            <div id="item">
                <a href="#" class="word"><?php echo $lang['elevent']; ?> </a>
                <div id="labl">
                <form action="" method="post">
                <input type="submit" name="on" id="download" value=<?php echo $lang['down']; ?>>
                    <label>Program</label> <br>
                  
                </form>
                </div>
            </div>
            <div id="item">
                <a href="#" class="word"><?php echo $lang['twelve']; ?></a>
                <div id="labl">
                <form action="" method="post">
                <input type="submit" name="om"id="download" value=<?php echo $lang['down']; ?>>
                    <label>Program</label> <br>
                
                </form>
                </div>
            </div>
        </section>

        <script src="..\..\js/jquery-3.6.0.min.js"></script>
        <script src="..\..\js/bootstrap.min.js"></script>
</body>

</html>