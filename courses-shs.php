<?php

include ('includes/database.php');
include ('includes/functions.php');
include ('includes/header.php');

$querySHS= "SELECT * FROM courses WHERE courses_for=2 AND status=1";
$resultSHS = mysqli_query($conn, $querySHS);

if (mysqli_num_rows($resultSHS) > 0) {
    $rowSHS = mysqli_fetch_assoc($resultSHS);

    $shsTitle = $rowSHS['courses_title'];
    $shsContent = $rowSHS['courses_content'];

} else {
    $shsTitle = "";
    $shsContent = "";
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
    <span class="current">Senior High School</span>

  </div>
</div>
<!-- breadcrumbs end -->
<div class="container pt-5 mb-5">
  <div class="row">
    <div class="col-lg-4">
      <h2 class="section-title-underline" id="#shsstrand">
        <span><?php echo $shsTitle; ?></span>
      </h2>
    </div>
  </div>
  <div class="col-lg-12">
    <?php echo $shsContent; ?>
  </div>
</div>






<!-- footer -->
<?php include ('includes/footer.php') ?>