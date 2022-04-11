
<?php
// connect todatabase
$conn = mysqli_connect('localhost', 'root', '', 'sms');

//check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}




?>
