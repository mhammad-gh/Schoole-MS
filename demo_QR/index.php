<?php

include('libs/phpqrcode/qrlib.php'); 

function getUsernameFromEmail($email) {
	$find = '@';
	$pos = strpos($email, $find); 
	$username = substr($email, 0, $pos);   
	return $username;
}

if(isset($_POST['submit']) ) {
	$tempDir = 'temp/'; 
	$email = $_POST['mail'];
	$subject =  $_POST['subject'];
	$filename = getUsernameFromEmail($email);
	$body =  $_POST['msg'];
	$codeContents = 'mailto:'.$email.'?subject='.urlencode($subject).'&body='.urlencode($body);
   
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Send Message by QR</title>
      <link rel="stylesheet" href="libs/css/bootstrap.min.css">
      <link href="css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="libs/style.css">
    <link rel="stylesheet" href="email.css">
      </head>
	<body>
    <div class="close">
     <a href="../admin1.php"> <i class="fas fa-window-close"></i></a>
    </div>
    <div   id="btn_return">
      <i class="fas fa-arrow-alt-circle-left"></i>
      </div>
    <div id="logo">
     <img   src="img/logo_fixed.png">
    </div>
<section id="qr">
	<br></br>
			<h3 ><strong id="tit">Send Message by QR</strong></h3>
			<div class="input-field">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="mail" style="width:20em;" placeholder="Enter your Email" value="<?php echo @$email; ?>" required />
					</div>
					<div class="form-group">
						<label>Subject</label>
						<input type="text" class="form-control" name="subject" style="width:20em;" placeholder="Enter your Email Subject" value="<?php echo @$subject; ?>" required pattern="[a-zA-Z .]+" />
					</div>
					<div class="form-group">
						<label id="message">Message</label>
						<textarea rows="15" cols="30" type="text" class="form-control" name="msg" style="width:20em;" value="<?php echo @$body; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" value="SUBMIT" id="submit" name="submit" class="btn btn-danger  submitBtn" style="width:20em; margin:0;" />
					</div>
				</form>
			</div>
			<?php
			if(!isset($filename)){
				$filename = "TechSu";
			}
			?>
			<div class="qr-field">
				<h2 style="text-align:center">QR Code Result: </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-default submitBtn" style="width:210px; margin:5px 0;" id="download" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
				</center>
				</div>
			
			
    <section>
	</body>

</html>



