<?php
session_start();
include ('includes/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prereg_fname = $_POST['prereg_fname'];
    $prereg_mname = $_POST['prereg_mname'];
    $prereg_lname = $_POST['prereg_lname'];
    $prereg_dob = $_POST['prereg_dob'];
    $prereg_gender = $_POST['prereg_gender'];
    $prereg_mobile = $_POST['prereg_mobile'];
    $prereg_guardian = $_POST['prereg_guardian'];
    $prereg_application = $_POST['prereg_application'];
    $prereg_email = $_POST['prereg_email'];
    $prereg_facebook = $_POST['prereg_facebook'];

    $date = date('Y-m-d');

    $sql = "INSERT INTO preregister (prereg_fname, prereg_mname, prereg_lname, prereg_dob, prereg_gender, prereg_mobile, prereg_guardian, prereg_application, prereg_email, prereg_facebook, prereg_date) VALUES ('$prereg_fname', '$prereg_mname', '$prereg_lname', '$prereg_dob', '$prereg_gender', '$prereg_mobile', '$prereg_guardian', '$prereg_application', '$prereg_email', '$prereg_facebook', '$date')";

    if (mysqli_query($conn, $sql)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
