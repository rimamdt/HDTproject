<?php
require('connection.php');
require('function.inc.php');

session_start();

$Name = get_safe_value($con, $_POST['name']);
$Email = get_safe_value($con, $_POST['email']);
$Password = get_safe_value($con, md5($_POST['password']));

// Check if email exists
$check_user = mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE email='$Email'"));
if ($check_user > 0) {
    echo "email_present";
} else {
    // Insert user into database
    $query = "INSERT INTO user (Name, Email, Password) VALUES ('$Name','$Email','$Password')";
    if (mysqli_query($con, $query)) {
        echo "insert";
        // header("Location: login.php");
        // exit();
    } else {
        echo "error"; // Error inserting data
    }
}
?>