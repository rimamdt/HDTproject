
<?php
require('connection.php');
require('function.inc.php');

session_start();

$email = get_safe_value($con, $_POST['email']);
//$otp = rand(100000, 999999); // Generate a random 6-digit OTP
//$_SESSION['EMAIL_OTP'] = $otp; // Store OTP in session

// Check if email already exists
$check_user = mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE email='$email'"));
if ($check_user > 0) {
    echo "email_present"; // Email already exists
    exit;
}

	$otp = rand(1111, 9999);
	$_SESSION['EMAIL_OTP'] = $otp;
	$html = "$otp is your otp";
	include('smtp/PHPMailerAutoload.php');
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->SMTPSecure = "tls";
	$mail->SMTPAuth = true;
	$mail->Username = "rimadasmdt@gmail.com";
	$mail->Password = "imzcaoehbzkrlxac";
	$mail->setfrom("rimadasmdt@gmail.com");
	$mail->addAddress($email);
	$mail->IsHTML(true);
	$mail->Subject = "New OTP";
	$mail->Body = $html;
	$mail->SMTPOptions = array('ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => false
	));
	if ($mail->send()) {
		echo "done";
	} else {
		echo "please  wait";
	}
?>
