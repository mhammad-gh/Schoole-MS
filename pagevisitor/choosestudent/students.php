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
    $path =  '../../languages/' . $lang . '.php';
    return $path;
}
makee_lang();
$languages_file = lang_path();
include $languages_file;
if (isset($_POST['submit'])) {
    $sub=$_POST['subject'];
    //session_start();
    $_SESSION['sub']=$sub;
    header("location: ‏‏..\../exam/exam_now.php?sub=$sub");
    

}
if (isset($_POST['quize'])) {
    $sub=$_POST['subject'];
    session_start();
    $_SESSION['sub']=$sub;
    header("location: ‏‏..\../exam/quize_now.php?sub=$sub");
    

}

if (isset($_POST['homework'])) {
    $sub=$_POST['subject'];
    session_start();
    $_SESSION['sub']=$sub;
    header("location: ‏‏..\../exam/homework.php?sub=$sub");
    

}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="../../css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/student.css">
    <title>student</title>
</head>

<body>
    <div class="close">
        <a href="../../index.php"><i class="fas fa-window-close"></i></a>
    </div>
    <div id="btn_return">
        <i class="fas fa-arrow-alt-circle-left"></i>
    </div>
    <div id="logo">
        <img src="../../img/logo_fixed.png">
    </div>
    <section>
        <h1 class="heading">
            <span>S</span>
            <span>T</span>
            <span>U</span>
            <span>D</span>
            <span>E</span>
            <span>N</span>
            <span>T</span>
        </h1>

    </section>
    <section id="content">
        <div class="container">
            <ul>
                <div id="accordion">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <li><a href="#" class="item"><?php echo $lang[
        'Homework'
    ];?></a></li>
            </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                        <form action="students.php" method="POST"> <div class="card-body">   
                        <div class="card-body">
                                <span class="input-group-text" id="inputGroup-sizing-default">Choose The Subject</span>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="subject">
              <option selected>Choose...</option>
              <option >Mathematics</option>
              <option >Physics</option>
              <option >Chemistry</option>
              <option >Science</option>
              <option >Informative</option>
              <option >Philosophy</option>
              <option >Arabic</option>
              <option >English</option>
              <option >French</option>
              <option >Geography</option>
              <option >History</option>
              <option >National Education</option>
              <option >Religious Education</option>
              <option >Art</option>
              <option >Physical Education</option>
            </select><br>
            <input class="btn btn-primary" type="submit" name="homework" value="enter" >
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <li><a href="#" class="item"> <?php echo $lang[
        'Quiz'
    ];?></a></li>
            </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <form action="students.php" method="POST"> <div class="card-body">
                                <span class="input-group-text" id="inputGroup-sizing-default">Choose The Subject</span>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="subject">
              <option selected>Choose...</option>
              <option >Mathematics</option>
              <option >Physics</option>
              <option >Chemistry</option>
              <option >Science</option>
              <option >Informative</option>
              <option >Philosophy</option>
              <option >Arabic</option>
              <option >English</option>
              <option >French</option>
              <option >Geography</option>
              <option >History</option>
              <option >National Education</option>
              <option >Religious Education</option>
              <option >Art</option>
              <option >Physical Education</option>
            </select><br>
            <input class="btn btn-primary" type="submit" name="quize" value="enter" >
                            </div>
                        </div>
                        </form>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <li><a href="#" class="item"><?php echo $lang[
        'Exams'
    ];?></a></li>
            </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <form action="students.php" method="POST"><div class="card-body">
                                <span class="input-group-text" id="inputGroup-sizing-default">Choose The Subject</span>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="subject">
              <option selected>Choose...</option>
              <option  >Mathematics</option>
              <option >Physics</option>
              <option >Chemistry</option>
              <option >Science</option>
              <option >Informative</option>
              <option >Philosophy</option>
              <option >Arabic</option>
              <option >English</option>
              <option >French</option>
              <option >Geography</option>
              <option >History</option>
              <option >National Education</option>
              <option >Religious Education</option>
              <option >Art</option>
              <option >Physical Education</option>
            </select><br>
                                <input class="btn btn-primary" type="submit" name="submit" value="enter" >
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col">
                        <li><a href="../../pagevisitor/choosestudent/working_program_final_1.php" class="item"><?php echo $lang[
        'Program'
    ];?></a></li>
                    </div>
                    <div class="col">
                        <li><a href="courses_choos.php" class="item"><?php echo $lang[
        'Curriculum'
    ];?></a></li>
                    </div>
                    <div class="col">
                        <li><a href="holiday.php" class="item"><?php echo $lang[
        'Holiday'
    ];?></a></li>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <li><a href="start_school_stu.php" class="item"><?php echo $lang[
        'Calendar'
    ];?></a></li>
                    </div>
                    <div class="col">
                        <li><a href="../choosestudent/advertisement_stu.php" class="item"><?php echo $lang[
        'Ads'
    ];?></a></li>
                    </div>
                    <div class="col">
                        <li><a href="‏‏more_details_std.php" class="item"><?php echo $lang[
        'Mraks'
    ];?></a></li>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <li><a href="working_program_final.php" class="item"><?php echo $lang[
        'Certificate'
    ];?></a></li>
                    </div>
                    <div class="col">
                        <li><a href="more_details.php" class="item"><?php echo $lang[
        'Study Sequence'
    ];?></a></li>
                    </div>
                </div>


                <div id="hr"></div>
                <div class="row">
                    <div class="col">
                        <li><a href="#" class="btn1"><?php echo $lang[
        'Chatting'
    ];?></a></li>

                    </div>
                    <div class="col">
                        <li><a href="../../demo_QR/index.php" class="btn1"><?php echo $lang[
        'Send Message'
    ];?></a></li>

                    </div>
                </div>

            </ul>
        </div>
    </section>
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>