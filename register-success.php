<?php

include ('includes/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pword'];
    $confirmPassword = $_POST['pword2'];
    $status = 2;

    if (empty($fullname) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
    } elseif ($password != $confirmPassword) {
        echo json_encode(["success" => false, "message" => "Passwords do not match."]);
    } else {
        $checkEmailQuery = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $checkEmailQuery);

        if (mysqli_num_rows($result) > 0) {
            echo json_encode(["success" => false, "message" => "emailexists"]);
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO user (name, username, email, password, status) VALUES ('$fullname', '$username', '$email', '$hashedPassword', '$status')";
        
            if (mysqli_query($conn, $query)) {
                echo json_encode(["success" => true, "message" => "User registered successfully."]);
            } else {
                echo json_encode(["success" => false, "message" => "Error: " . mysqli_error($conn)]);
            }
        }
    }
}


?>
