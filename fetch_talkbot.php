<?php
session_start();
include ('includes/database.php');

$responseData = array();

$sqlChatbot = "SELECT chatbot_keywords, chatbot_respond FROM chatbot WHERE status !=1";
$resultChatbot = $conn->query($sqlChatbot);

if ($resultChatbot->num_rows > 0) {
    while ($row = $resultChatbot->fetch_assoc()) {
        $keywords = $row["chatbot_keywords"];
        $response = $row["chatbot_respond"];
        $responseData[] = array("keywords" => $keywords, "response" => $response);
    }
}

$sqlAboutUs = "SELECT content_text FROM aboutus_contents WHERE content_for = 2";
$resultAboutUs = $conn->query($sqlAboutUs);

if ($resultAboutUs->num_rows > 0) {
    $row = $resultAboutUs->fetch_assoc();
    $responseData[] = array("keywords" => "history,about aclc,about us,what is aclc?,about", "response" => $row["content_text"]);
}

$sqlCourses = "SELECT courses_content FROM courses WHERE courses_for = 1";
$resultCourses = $conn->query($sqlCourses);

if ($resultCourses->num_rows > 0) {
    $row = $resultCourses->fetch_assoc();
    $coursesContent = strip_tags($row["courses_content"]);
    $responseData[] = array("keywords" => "course,courses,programs,what courses are offered?,college courses,what are the college courses offered?", "response" => $coursesContent);
}

$sqlSHS = "SELECT courses_content FROM courses WHERE courses_for = 2";
$resultSHS = $conn->query($sqlSHS);

if ($resultSHS->num_rows > 0) {
    $row = $resultSHS->fetch_assoc();
    $shsContent = strip_tags($row["courses_content"]);
    $responseData[] = array("keywords" => "senior high school,shs,what are the strands offered in Senior High School?,what are the tracks offered in senior high school?,strand,shs strand", "response" => $shsContent);
}

$sqlLadd = "SELECT courses_content FROM courses WHERE courses_for = 3";
$resultLadd = $conn->query($sqlLadd);

if ($resultLadd->num_rows > 0) {
    $row = $resultLadd->fetch_assoc();
    $LaddContent = strip_tags($row["courses_content"]);
    $responseData[] = array("keywords" => "ladderized", "response" => $LaddContent);
}

$sqlNews = "SELECT newsupdates_description FROM newsupdates";
$resultNews = $conn->query($sqlNews);

if ($resultNews->num_rows > 0) {
    $row = $resultNews->fetch_assoc();
    $NewsContent = strip_tags($row["newsupdates_description"]);
    $responseData[] = array("keywords" => "news,updates,events,event", "response" => $NewsContent);
}




$conn->close();

header('Content-Type: application/json');

echo json_encode($responseData);
?>
