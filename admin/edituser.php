<?php
$conn = new mysqli("localhost", "root", "", "hdtproject");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['contact'], $_POST['gender'], $_POST['password'])) {
    $user_id = intval($_POST['id']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("UPDATE user SET Name = ?, Email = ?, contact = ?, gender = ?, Password = ? WHERE ID = ?");
    $stmt->bind_param("sssssi", $name, $email, $contact, $gender, $password, $user_id);

    if ($stmt->execute()) {
        echo "User updated successfully";
    } else {
        echo "Error updating user: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
