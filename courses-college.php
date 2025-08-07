<?php

include ('includes/database.php');
include ('includes/functions.php');
include ('includes/header.php');

$queryCollege = "SELECT * FROM courses WHERE courses_for=1 AND status=1";
$resultCollege = mysqli_query($conn, $queryCollege);

if (mysqli_num_rows($resultCollege) > 0) {
    $rowCollege = mysqli_fetch_assoc($resultCollege);

    $collegeTitle = $rowCollege['courses_title'];
    $collegeContent = $rowCollege['courses_content'];

} else {
    $collegeTitle = "";
    $collegeContent = "";
}

?>


<!-- breadcrumbs -->
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">Courses Offered</h2>
        <p>ACLC College of Sorsogon</p>
      </div>
    </div>
  </div>
</div>

<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="index.php">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span>Courses Offered</span>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">College</span>

  </div>
</div>
<!-- breadcrumbs end -->
<div class="container pt-5 mb-5">
  <div class="row">
    <div class="col-lg-4">
      <h2 class="section-title-underline" id="#collegecourse">
        <span><?php echo $collegeTitle; ?></span>
      </h2>
    </div>
  </div>
  <div class="col-lg-12">
    <?php echo $collegeContent; ?>
  </div>
</div>






<!-- footer -->
<?php include ('includes/footer.php') ?>