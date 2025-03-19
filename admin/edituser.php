<?php
$conn = new mysqli("localhost", "root", "", "hdtproject");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if all fields are received
if (isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['contact'], $_POST['gender'], $_POST['password'])) {
    $user_id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $contact = $conn->real_escape_string($_POST['contact']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $password = md5($_POST['password']); // MD5 Encryption

    // Prepare SQL statement
    $stmt = $conn->prepare("UPDATE user SET Name = ?, Email = ?, contact = ?, gender = ?, Password = ? WHERE ID = ?");
    $stmt->bind_param("sssssi", $name, $email, $contact, $gender, $password, $user_id);

    if ($stmt->execute()) {
        echo "User updated successfully!";
    } else {
        echo "Error updating user: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request!";
}

$conn->close();
?>
