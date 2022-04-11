<?php
require "config.php";
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
if (isset($_POST['student'])) {
    
    $name = mysqli_real_escape_string( $conn, $_POST['user'] );
    $pass = mysqli_real_escape_string( $conn, $_POST['Password'] );
    $sql = "SELECT * FROM student WHERE fullname='$name' and password='$pass'";
    $result = mysqli_query( $conn, $sql );
   
    // fetch result in array format
    $studen = mysqli_fetch_assoc( $result );
   
    mysqli_free_result( $result );
    mysqli_close( $conn );
   
   
    if($studen){
        
        $_SESSION['claas'] = $studen['type_class'];
        $_SESSION['id'] = $studen['id'];
       header("location: pagevisitor/choosestudent/students.php");
    }
    }

if (isset($_POST['teacher'])) {
    
    $name = mysqli_real_escape_string( $conn, $_POST['user'] );
    $pass = mysqli_real_escape_string( $conn, $_POST['Password'] );
    $sql = "SELECT * FROM teacher WHERE fullname='$name' and password='$pass'";
    $result = mysqli_query( $conn, $sql );
   
    // fetch result in array format
    $teacher = mysqli_fetch_assoc( $result );
   
    mysqli_free_result( $result );
    mysqli_close( $conn );
   
   
    if($teacher){
       header("location: pagevisitor/chooseteacher/teachers.php");
    }
    }

    if (isset($_POST['parent'])) {
    
        $name = mysqli_real_escape_string( $conn, $_POST['user'] );
        $pass = mysqli_real_escape_string( $conn, $_POST['Password'] );
        $sql = "SELECT * FROM student WHERE fullname='$name' and password='$pass'";
        $result = mysqli_query( $conn, $sql );
       
        // fetch result in array format
        $studen = mysqli_fetch_assoc( $result );
       
        mysqli_free_result( $result );
        mysqli_close( $conn );
       
       
        if($studen){
           header("location: pagevisitor/chooseparents/parents.php");
        }
        }
    ?>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vis.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/js.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>index</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div id="close">
        <i class=" fas fa-window-close "></i>
    </div>


    <section id="home">
        <div id="logo">
            <img src="img/logo_fixed.png">
        </div>


        <nav class="menu">

            <div class="menu_btn ">
                <span class="fas fa-bars"></span>
            </div>

            <ul id="menu_list">
                <div id="list">
                    <li>
                        <a class="nav-link" href="#home"><i id="iconbar" class="fas fa-home"></i><?php echo $lang[
        'HOME'
    ];?></a>
                    </li>
                    <li>
                        <a class="nav-link" href="#about"><i id="iconbar" class="fas fa-info-circle"></i><?php echo $lang[
        'ABOUT US'
    ];?></a>
                    </li>
                    <li>
                        <a class="nav-link" href="#Headteacher"><i id="iconbar" class="fas fa-users"></i><?php echo $lang[
        'Headteacher'
    ];?></a>
                    </li>
                    <li>
                        <a class="nav-link" href="#curriculum"><i id="iconbar" class="fas fa-book"></i><?php echo $lang[
        'CURRICULUM'
    ];?></a>
                    </li>
                    <li>
                        <a class="nav-link" href="#contactt"><i id="iconbar" class="fas fa-comments"></i><?php echo $lang[
        'CONTACT'
    ];?></a>
                    </li>
                    <li>
                        <a class="nav-link lan " href="#"><i id="iconbar" class="fas fa-language"></i><?php echo $lang[
        'language'
    ];?></a>
                        <br>
                        <ul class="showlist">
                            <form action="index.php" method="POST">
                                <div class="form-check">
                                    <input class="form-check-input" type="submit" name="eng" id="gridRadios1"
                                        value="english">

                                </div>
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input" type="submit" name="ara" id="gridRadios1"
                                        value="عربي">

                                </div>
                            </form>
                        </ul>
                </div>
            </ul>
            </li>


            </ul>
        </nav>


        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="photo w-100" src="img/IMG_8563+sky.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="photo w-100" src="img/Nailsea-School-2.jpg" alt="Third slide">
                </div>

                <div class="carousel-item">
                    <img class="photo w-100" src="img/2429237300000578-2880555-image-a-19_1418993618094.jpg"
                        alt="Third slide">
                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <div>
            <form action="index.php" method="POST">
                <button id="sigin" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    <i class="far fa-user-circle"></i>
                </button>

                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title"><?php echo $lang[
        'Login'
    ];?></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                <h5 class="modal-title"><?php echo $lang[
        'Login Here'
    ];?></h5>
                                <form class="sign_box">
                                    <div class="inputBox">
                                        <i class="fas fa-User"></i>
                                        <input name="user" type="text" required placeholder="<?php echo $lang[
        'Your Account'
    ];?>" maxlength="25">
                                    </div>
                                    <div class="inputBox">
                                        <i class="fas fa-lock"></i>
                                        <input name="Password" type="password" required placeholder="<?php echo $lang[
        'Password'
    ];?>" maxlength="15">
                                    </div>
                                </form>

                                <div class="modal-footer">

                                    <input type="submit" name="student" id="teacher" class="btn btn-primary " value="<?php echo $lang[
        'Sign In'
    ];?> <?php echo $lang[
        'Student'
    ];?>"> <i id="loicon" class="fas fa-chalkboard-teacher"></i></button>
                                    <input type="submit" name="teacher" class="btn btn-primary" value="<?php echo $lang[
        'Sign In'
    ];?><?php echo $lang[
        'Teacher'
    ];?>"><i id="loicon" class="fas fa-book-reader"></i></button>
                                    <input type="submit"name="parent" id="parents" class="btn btn-primary" value="<?php echo $lang[
        'Sign In'
    ];?> <?php echo $lang[
        'Parent'
    ];?>"><i id="loicon" class="fas fa-user-friends"></i></button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang[
        'Close'
    ];?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="title_text">
            <p><?php echo $lang[
        'Welcome to Nailsea School'
    ];?></p>
        </div>

        <div class="home_box">

            <p id="par">

                <?php echo $lang[
        'all'
    ];?>
            </p>
            <p><small class="text-muted"> <?php echo $lang[
        'all2'
    ];?>  </small></p>

        </div>
    </section>

    <section id="about">
        <div class="title_text">
            <p><?php echo $lang[
        'ABOUT US'
    ];?></p>
        </div>
        <div class="about_box">
            <p id="par">

                <?php echo $lang[
        'all3'
    ];?>
            </p>
            <div class="about_imgss"><img src="img/Classroom-2.jpg"></div>
            <div class="about_imgss"><img src="img/Science-Super-Laboratory-Room-2.jpg"></div>
            <div class="about_imgss"><img src="img/music-3.jpg"></div>
            <div class="about_imgss"><img src="img/Canteen-2 (1).jpg"></div>

            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" id="about_title_pa" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <?php echo $lang[
        'OUR FACILITIES'
    ];?>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $lang[
        'all4'
    ];?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="Headteacher">
        <div class="title_text">
            <p><?php echo $lang[
        'Headteacher'
    ];?></p>
        </div>
        <div class="Headteacher_box">
            <h1 id="Headteacher-title"><?php echo $lang[
        'Senior Leadership Team (SLT)'
    ];?></h1>
            <div class="card-group">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $lang[
        'Mrs D Elliott'
    ];?></h4>
                        <p class="card-text"><small class="text-muted"><?php echo $lang[
        'Headteacher'
    ];?></a></small></p>
                        <p class="card-text">
                            <?php echo $lang[
        'all5'
    ];?> </p>
                        <p class="card-text"><small class="text-muted"> <?php echo $lang[
        'Teaching Area: History'
    ];?> <wbr>
                                <?php echo $lang[
        'all6'
    ];?>  </small></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo $lang[
        'Mrs S Hurlow'
    ];?></h4>
                        <p class="card-text"><small class="text-muted"> <?php echo $lang[
        'Business Manager'
    ];?></small></p>
                        <p class="card-text"> <?php echo $lang[
        'all7'
    ];?></p>
                        <p id="HURLOW" class="card-text"><small class="text-muted"> <?php echo $lang[
        'all8'
    ];?><wbr>    <?php echo $lang[
        'all9'
    ];?></small>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="curriculum" class="cur_container">
        <div class="title_text">
            <p> <?php echo $lang[
        'CURRICULUM'
    ];?></p>
        </div>
        <div class="curriculum_box">
            <div class="curriculum_item"> <img src="img/Mathematics.jpg">
                <div class="curriculum_desc">
                    <h3> <?php echo $lang[
        'Mathematics'
    ];?></h3>
                    <hr>
                    <p>A collection of abstract knowledge resulting from logical deductions applied to various
                        mathematical objects such as sets, numbers, shapes, and transformations.</p>
                    <h4> Tenth , Eleven , Baccalaureate</h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/Physics.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'Physical Education'
    ];?></h3>
                    <hr>
                    <p>The science of material, energy and motion, in addition to the nature of gravitational, nuclear
                        and electromagnetic forces.</p>
                    <h4> Tenth , Eleven , Baccalaureate</h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/Chemistry.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'Chemistry'
    ];?></h3>
                    <hr>
                    <p>The study of material and its properties, how and why substances combine or separate to form
                        other substances, and how substances interact with energy.
                    </p>
                    <h4> Tenth , Eleven , Baccalaureate</h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/Science.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'Science'
    ];?></h3>
                    <hr>
                    <p>It is a natural science concerned with the study of life and living organisms, including their
                        structures, functions, growth, evolution, distribution, and classification.
                    </p>
                    <h4> Tenth , Eleven , Baccalaureate</h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/Informatics.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'Informative'
    ];?></h3>
                    <hr>
                    <p>A science that studies computing, data processing, theories and applications that form the basis
                        for the transfer of information, by studying computer programs and applications (software) and
                        hardware components.

                    </p>
                    <h4> Tenth , Eleven </h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/Philosophy.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'Philosophy'
    ];?></h3>
                    <hr>
                    <p>A study of general and basic questions about existence, knowledge, values, reason, reasoning, and
                        language.   Philosophical methods include questioning, critical discussion, logical argument,
                        and systematic presentation.</p>
                    <h4> Tenth </h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/Arabic.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'Arabic'
    ];?></h3>
                    <hr>
                    <p>Acquiring the skills of analysis, criticism, thinking, rhetoric and rhetoric in the Arabic
                        language through its phonetic, morphological and grammatical system. and syntax, as its words
                        have connotations of their own.
                    </p>
                    <h4> Tenth , Eleven , Baccalaureate</h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/English.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'English'
    ];?></h3>
                    <hr>
                    <p>Applied English linguistics includes English phonetics, syntax, morphology, semantics, and body
                        language. English sociolinguistics includes discourse analysis of the written and spoken texts
                        of the language.</p>
                    <h4> Tenth , Eleven , Baccalaureate</h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/French.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'French'
    ];?></h3>
                    <hr>
                    <p>It provides students with skills and experiences that enable them to practice the French language
                        in perfectly sound ways through grammatical rules and mastery of writing and speaking.</p>
                    <h4> Tenth , Eleven , Baccalaureate</h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/Geography.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'Geography'
    ];?></h3>
                    <hr>
                    <p>The study of the nature of the Earth in terms of the geological structure, weather phenomena,
                        flora and fauna, natural or terrestrial.</p>
                    <h4> Tenth , Eleven </h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/History.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'History'
    ];?></h3>
                    <hr>
                    <p>History is a study of past temporal periods. It helps to understand what people are, the truth of
                        their existence, their historical origin, and their place among nations.
                    </p>
                    <h4> Tenth , Eleven</h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/National Education.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'National Education'
    ];?></h3>
                    <hr>
                    <p>A study of general and basic questions about existence, knowledge, values, reason, reasoning, and
                        language.   Philosophical methods include questioning, critical discussion, logical argument,
                        and systematic presentation.
                    </p>
                    <h4> Tenth , Eleven , Baccalaureate</h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/Religious Education.png">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'Religious Education'
    ];?></h3>
                    <hr>
                    <p>It is an educational science which is seek to organize the behavior of individuals and it aims to
                        educate people on the ethic of islam and develop their minds and stimulate itto think properly
                        to discover the religion</p>
                    <h4> Tenth , Eleven , Baccalaureate</h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/Art.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'Art'
    ];?></h3>
                    <hr>
                    <p>The art of expressing the ideas that carried by human, by creating certain aesthetic qualities,
                        through a two-dimensional visual language, using a set of tools.</p>
                    <h4> Tenth , Eleven </h4>
                </div>
            </div>
            <div class="curriculum_item"><img src="img/Physical Education.jpg">
                <div class="curriculum_desc">
                    <h3><?php echo $lang[
        'sport'
    ];?></h3>
                    <hr>
                    <p>The selected group of activities in order to achieve the integrated development of students to
                        acquire physical abilities and motor skills.</p>
                    <h4> Tenth , Eleven , Baccalaureate</h4>
                </div>
            </div>

        </div>
    </section>

    <section id="contactt">

        <div class="title_text">
            <p> <?php echo $lang[
        'School Contact Details'
    ];?></p>
        </div>
        <div id="contactt_box">
            <p id="contact_title"><i class="fas fa-map-marked-alt"></i> Mizzymead Road,Nailsea, Bristol, BS48 2HN</p>

            <table class="content-table" style="width:100%">
                <tbody>
                    <tr>
                        <td>School Receptio:</td>
                        <td>01275852251</td>
                    </tr>
                    <tr>
                        <td>Student Absence Line:</td>
                        <td>01275850400</td>
                    </tr>
                    <tr>
                        <td>School Fax Number:</td>
                        <td>01275854512</td>
                    </tr>
                    <tr>
                        <td>General Enquiries:</td>
                        <td>info@nailseaschool.com</td>
                    </tr>
                </tbody>
            </table>
            <p id="contact_title">Travelling to Nailsea School</p>
            <p id="contact_info"><i id="contact_icon" class="fas fa-train"></i><span
                    id="contact_title_info">TRAIN:</span> The nearest station is Nailsea & Backwell. It is a 25 minute
                walk from the station to the school</p>
            <p id="contact_info"><i id="contact_icon" class="fas fa-bus-alt"></i><span id="contact_title_info">
                    BUS:</span> The Mizzymead Road bus stop is directly outside of the school (X8 service)</p>
            <p id="contact_info"><i id="contact_icon" class="fas fa-car-alt"></i><span id="contact_title_info">
                    CAR:</span> There are bookable parking facilities at Nailsea School, please call in advance to
                reserve a place. For satellite navigation please use this postcode
                BS48 2LE – it will take you to the front entrance, whereas our postcode takes you to the back (secured)
                entrance. </p>

            <p id="contact_title">Report a Student Absence</p>
            <P id="contact_info">By law we have to keep a detailed record of reasons for student absence. The number of
                times that a student has been absent during that academic year, is reported in their reports. This is a
                national requirement. It is vital that parents inform
                the school of the reason for any absence of their child.  </P>
            <table class="content-table" style="width:100%">
                <tr>
                    <td>Student Absence Line :</td>
                    <td>01275 850400</td>
                </tr>

                <tr>
                    <td>ALL Covid19 absence, queries and track & trace to:</td>
                    <td>C19@nailseaschool.com</td>
                </tr>

            </table>
        </div>

    </section>

    <footer>

        <div class="row">
            <img src="img/Horizontal-line.gif">
            <div class="col">

                <h3>Nailsea School
                    <div class="underline "><span></span></div>
                </h3><wbr>
                <p id="footer_p">I would encourage you to visit the school to experience things for yourself and I would
                    be more than happy to take you on a tour of the site to see our staff and students in action.
                    Please contact the school reception team on 01275 852251
                    to arrange a time that is convenient. </p>
            </div>
            <div class="col ">
                <h3 id="footer-links"> LINKS
                    <div class="underline "><span></span></div>
                </h3>
                <ul>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT US</a></li>
                    <li><a href="#Headteacher">Headteacher</a></li>
                    <li> <a href="#curriculum">CURRICULUM</a></li>
                    <li><a href="#contactt">CONTACT</a></li>
                    </li>
                </ul>
            </div>
            <div class="col footer_find">
                <h3>FIND US
                    <div class="underline "><span></span></div>
                </h3>
                <p id="footer_p"> Mizzymead Road , Nailsea , BS48 2HN</p>
                <img id="footer-img" src="img/logo_fixed.png">
            </div>

        </div>
        <hr id="footer_hr">
        <p class="copyright">All Rights Reserved @ 2021</p>
    </footer>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>


</html>