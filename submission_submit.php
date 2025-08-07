<?php
session_start();
include ('includes/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['submission_fname'];
    $lname = $_POST['submission_lname'];
    $email = $_POST['submission_email'];
    $tel = $_POST['submission_tel'];
    $message = $_POST['submission_message'];
    //get today's date with a format of Y-m-d
    $date = date('Y-m-d');

    $sql = "INSERT INTO submissions (submissions_firstname, submissions_lastname, submissions_email, submissions_tel, submissions_message, submissions_date) VALUES ('$fname', '$lname', '$email', '$tel', '$message', '$date')";
    if (mysqli_query($conn, $sql)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
