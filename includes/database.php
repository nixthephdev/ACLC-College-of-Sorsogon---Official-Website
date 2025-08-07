<?php

$conn = mysqli_connect("localhost", "root", "", "aclcdb");


if (!$conn) {
    echo "Connection error" . mysqli_connect_error() or die;
}
