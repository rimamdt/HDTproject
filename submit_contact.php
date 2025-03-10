<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $emailid = $_POST['emailid'];
    $phone = $_POST['phone'];
    $password= $_POST['password'];

    // You can save this data to a database, send an email, or display a thank-you message
    echo "Thank you, $name. We will get back to you soon.";
}
?>
