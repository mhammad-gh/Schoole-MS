<?php
session_start();
function makee_lang()
{
    if (@$_POST['ara']) {
        $_SESSION['arabic'] = true;
        unset($_SESSION['english']);
    }
    if (@$_POST['eng']) {
        $_SESSION['english'] = true;
        unset($_SESSION['arabic']);
    }
}

function lang_path()
{
    if (!isset($_SESSION['arabic'])) {
        $_SESSION['english'] = true;
    }
    if (isset($_SESSION['arabic'])) {
        $lang = 'arabic';
    }
    if (isset($_SESSION['english'])) {
        $lang = 'english';
    }
    $path = dirname(__FILE__) . '/languages/' . $lang . '.php';
    return $path;
}
makee_lang();
$languages_file = lang_path();
include $languages_file;
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>home</title>
    <!--<link rel="stylesheet" href="style.css">-->
</head>
<body>
   <form action="visitor.php" method="POST" >
       <input type="submit" name ="eng" value ="english"/>
       <input type ="submit" name ="ara" value ="عربي"/>
    <nav>
    <a href="pagevisitor/choosestudent/enterstudent.php"><?php echo $lang[
        'studentlogin'
    ]; ?></a>
    </nav>
    <nav>
    <a href="pagevisitor/chooseteacher/enterteacher.php"><?php echo $lang[
        'teacherlogin'
    ]; ?></a>
    </nav>
    <nav>
    <a href="pagevisitor/chooseparents/enterparents.php"><?php echo $lang[
        'parentslogin'
    ]; ?></a>
    </nav>
    <nav>
    <a href="visitor.php"><?php echo $lang[
        'exit'
    ]; ?></a>
    </nav>
    </form>
</body>
</html>


