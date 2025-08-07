<?php

include('includes/database.php');
include('includes/functions.php');
include('includes/header.php');

$queryCollegeAdmission = "SELECT * FROM courses WHERE courses_for=4 AND status=1";
$resultCollegeAdmission = mysqli_query($conn, $queryCollegeAdmission);

if (mysqli_num_rows($resultCollegeAdmission) > 0) {
    $rowCollegeAdmission = mysqli_fetch_assoc($resultCollegeAdmission);

    $collegeTitleAdmission = $rowCollegeAdmission['courses_title'];
    $collegeContentAdmission = $rowCollegeAdmission['courses_content'];

    $collegeContentAdmission = str_replace('<p>', '<li>', $collegeContentAdmission);
    $collegeContentAdmission = str_replace('</p>', '</li>', $collegeContentAdmission);

} else {
    $collegeTitleAdmission = "<style>div#collegefresh{display:none}</style>";
    $collegeContentAdmission = "<style>div#collegefresh{display:none}</style>";
}

$queryCollegeAdmissionTrans = "SELECT * FROM courses WHERE courses_for=5 AND status=1";
$resultCollegeAdmissionTrans = mysqli_query($conn, $queryCollegeAdmissionTrans);

if (mysqli_num_rows($resultCollegeAdmissionTrans) > 0) {
    $rowCollegeAdmission = mysqli_fetch_assoc($resultCollegeAdmissionTrans);

    $collegeTitleAdmissionTrans = $rowCollegeAdmission['courses_title'];
    $collegeContentAdmissionTrans = $rowCollegeAdmission['courses_content'];

    $collegeContentAdmissionTrans = str_replace('<p>', '<li>', $collegeContentAdmissionTrans);
    $collegeContentAdmissionTrans = str_replace('</p>', '</li>', $collegeContentAdmissionTrans);

} else {
    $collegeTitleAdmissionTrans = "<style>div#collegetrans{display:none}</style>";
    $collegeContentAdmissionTrans = "<style>div#collegetrans{display:none}</style>";
}


?>


<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">College Admissions</h2>
        <p>Enroll now and be part of our growing family.
      </div>
    </div>
  </div>
</div>


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="index.php">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span>Admission</span>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">College</span>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5" id="collegefresh">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <img src="images/course_6.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-5 ml-auto align-self-center">
        <h2 class="section-title-underline mb-5">
          <span><?php echo $collegeTitleAdmission; ?></span>
        </h2>
        <ol class='ul-check primary list-unstyled'>
        <?php echo $collegeContentAdmission; ?>
        </ol>

      </div>
    </div>

    <div class="row" id="collegetrans">
      <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
        <img src="images/course_3.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
        <h2 class="section-title-underline mb-5">
          <span><?php echo $collegeTitleAdmissionTrans; ?></span>
        </h2>
        <ol class="ul-check primary list-unstyled">
        <?php echo $collegeContentAdmissionTrans; ?>
        </ol>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<?php include ('includes/footer.php') ?>