<?php
session_start();
include('connection.php'); //

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verify'])) {
    $entered_otp = $_POST['otp'];

    if ($entered_otp == $_SESSION['otp']) {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $hashed_password = $_SESSION['hashed_password'];

        // Use prepared statement to insert user securely
        $stmt = $con->prepare("INSERT INTO user (Name, Email, Password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashed_password);

        if ($stmt->execute()) {
            // Clear session data after successful registration
            unset($_SESSION['otp'], $_SESSION['name'], $_SESSION['email'], $_SESSION['hashed_password']);

            // Redirect to login page
            header('Location: login.php');
            exit();
        } else {
            die('Database error: ' . $stmt->error);
        }
    } else {
        echo "<script>alert('Invalid OTP! Please try again.'); window.location.href='register.php';</script>";
    }
} else {
    header('Location: signup.php');
    exit();
}
?>
