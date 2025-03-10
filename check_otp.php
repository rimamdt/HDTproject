<?php
require('connection.php');
require('function.inc.php');

$type = get_safe_value($con, $_POST['type']);
$otp = get_safe_value($con, $_POST['otp']);

session_start();

if ($type == 'email') {
    if (isset($_SESSION['EMAIL_OTP']) && $_SESSION['EMAIL_OTP'] == $otp) {
        unset($_SESSION['EMAIL_OTP']);
        echo "done";
    } else {
        echo "no";
    }
}
?>