<?php
$conn = new mysqli("localhost", "root", "", "hdtproject");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id'])) {
    $user_id = intval($_POST['id']);
    $stmt = $conn->prepare("DELETE FROM user WHERE ID = ?");
    $stmt->bind_param("i", $user_id);
    
    if ($stmt->execute()) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
