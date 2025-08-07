<?php

include ('includes/database.php');
include ('includes/functions.php');
include ('includes/header.php');

$querySHSAdmission = "SELECT * FROM courses WHERE courses_for=6 AND status=1";
$resultSHSAdmission = mysqli_query($conn, $querySHSAdmission);

if (mysqli_num_rows($resultSHSAdmission) > 0) {
    $rowSHSAdmission = mysqli_fetch_assoc($resultSHSAdmission);

    $SHSTitleAdmission = $rowSHSAdmission['courses_title'];
    $SHSContentAdmission = $rowSHSAdmission['courses_content'];

    $SHSContentAdmission = str_replace('<p>', '<li>', $SHSContentAdmission);
    $SHSContentAdmission = str_replace('</p>', '</li>', $SHSContentAdmission);

} else {
    $SHSTitleAdmission = "<style>div#incomingshs{display:none}</style>";
    $SHSContentAdmission = "<style>div#incomingshs{display:none}</style>";
}

$querySHSTransAdmissionTrans = "SELECT * FROM courses WHERE courses_for=7 AND status=1";
$resultSHSTransAdmissionTrans = mysqli_query($conn, $querySHSTransAdmissionTrans);

if (mysqli_num_rows($resultSHSTransAdmissionTrans) > 0) {
    $rowSHSTransAdmission = mysqli_fetch_assoc($resultSHSTransAdmissionTrans);

    $SHSTransTitleAdmissionTrans = $rowSHSTransAdmission['courses_title'];
    $SHSTransContentAdmissionTrans = $rowSHSTransAdmission['courses_content'];

    $SHSTransContentAdmissionTrans = str_replace('<p>', '<li>', $SHSTransContentAdmissionTrans);
    $SHSTransContentAdmissionTrans = str_replace('</p>', '</li>', $SHSTransContentAdmissionTrans);

} else {
    $SHSTransTitleAdmissionTrans = "<style>div#transshs{display:none}</style>";
    $SHSTransContentAdmissionTrans = "<style>div#transshs{display:none}</style>";
}

?>


<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">Senior High School Admissions</h2>
        <p>Enroll now and be part of our growing family.</p>
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
    <span class="current">Senior High School</span>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5" id="incomingshs">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <img src="images/course_6.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-5 ml-auto align-self-center">
        <h2 class="section-title-underline mb-5">
          <span><?php echo $SHSTitleAdmission; ?></span>
        </h2>
        <ol class="ul-check primary list-unstyled">
          <?php echo $SHSContentAdmission; ?>
        </ol>

      </div>
    </div>

    <div class="row" id="transshs">
      <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
        <img src="images/course_3.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
        <h2 class="section-title-underline mb-5">
          <span><?php echo $SHSTransTitleAdmissionTrans; ?></span>
        </h2>
        <ol class="ul-check primary list-unstyled">
          <?php echo $SHSTransContentAdmissionTrans; ?>
        </ol>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<?php include ('includes/footer.php') ?>