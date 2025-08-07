<?php
include ('includes/database.php');
include ('includes/functions.php');
include ('includes/header.php');

$query = "SELECT content_image, content_image2, content_image3, content_image1_status, content_image2_status, content_image3_status FROM aboutus_contents";
$result = mysqli_query($conn, $query);

$content_images = [];
while ($row = mysqli_fetch_assoc($result)) {
    $content_image1_status = $row['content_image1_status'];
    $content_image2_status = $row['content_image2_status'];
    $content_image3_status = $row['content_image3_status'];

    if ($content_image1_status == 1) {
        $content_images[] = "admin/aboutus_config/aboutus_chart/" . $row['content_image'];
    }
    if ($content_image2_status == 1) {
        $content_images[] = "admin/aboutus_config/aboutus_chart/" . $row['content_image2'];
    }
    if ($content_image3_status == 1) {
        $content_images[] = "admin/aboutus_config/aboutus_chart/" . $row['content_image3'];
    }
}

if (empty($content_images)) {
    $content_images = [
        "",
        "",
        ""
    ];
}

?>

<!-- breadcrumbs -->
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">About Us</h2>
      </div>
    </div>
  </div>
</div>

<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="index.php">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span>About Us</span>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Organizational Chart</span>

  </div>
</div>
<!-- breadcrumbs end -->
<div class="container pt-5 mb-5">
  <div class="row">
    <div class="col-lg-4">
      <h2 class="section-title-underline">
        <span>Organizational Chart</span>
      </h2>
    </div>
  </div>
  <div class="col-lg-12">
    <?php foreach ($content_images as $image): ?>
        <img src="<?php echo $image; ?>" class="img-responsive" width="100%" />
    <?php endforeach; ?>
  </div>
</div>

<!-- footer -->
<?php include ('includes/footer.php') ?>
