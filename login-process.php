<?php
session_start();
include ('includes/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $response = array(
            'success' => false,
            'message' => 'Username and password are required.'
        );
    } else {
        $query = "SELECT * FROM user WHERE username = '$username' AND status = 2";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row['password'];

            if (password_verify($password, $hashedPassword)) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['fullname'] = $row['name'];

                $response = array(
                    'success' => true,
                    'message' => 'Login successful.'
                );
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'Incorrect password.'
                );
            }
        } else {
            $response = array(
                'success' => false,
                'message' => 'Invalid username.'
            );
        }
    }

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    header('Location: login.php');
}
?>
