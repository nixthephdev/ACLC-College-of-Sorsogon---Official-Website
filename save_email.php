<?php
session_start();
include ('includes/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];
    $date = date('Y-m-d');

    $stmt = $conn->prepare("INSERT INTO chatbot_email (email,date) VALUES (?,?)");
    $stmt->bind_param("ss", $email,$date);

    if ($stmt->execute()) {
        echo "Email saved successfully.";
    } else {
        echo "Failed to save email.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
