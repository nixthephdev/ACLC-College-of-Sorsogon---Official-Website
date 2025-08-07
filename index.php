<?php
include 'includes/database.php';

$collegeContent = "";
$shsContent = "";
$ladderizedContent = "";
$collegeStatus = 0;

$query = "SELECT * FROM newsupdates WHERE newsupdates_date ORDER BY newsupdates_date DESC, newsupdates_time DESC LIMIT 1";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error: " . mysqli_error($conn);
} else {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $latestNewsTitle = $row['newsupdates_title'];
        $latestNewsDate = date("F j, Y", strtotime($row['newsupdates_date']));
        $latestNewsTime = date("g:i A", strtotime($row['newsupdates_time']));
        $latestNewsImage = $row['newsupdates_image'];
        $latestNewsId = $row['newsupdates_id'];
    } else {
        echo "<style>#newsupdatesectiondiv{display:none;}#nonewsupdate{display:block!important;}</style>";
    }
}

$queryCoursesHome= "SELECT * FROM courses";
$resultCoursesHome = mysqli_query($conn, $queryCoursesHome);

if (mysqli_num_rows($resultCoursesHome) > 0) {
    while ($rowCoursesHome = mysqli_fetch_assoc($resultCoursesHome)) {
        if ($rowCoursesHome['courses_for'] == 1) {
            $collegeContent = $rowCoursesHome['courses_offered'];
            $collegeStatus = $rowCoursesHome['status'];
        } elseif ($rowCoursesHome['courses_for'] == 2) {
            $shsContent = $rowCoursesHome['courses_offered'];
            $shsStatus = $rowCoursesHome['status'];
        } elseif ($rowCoursesHome['courses_for'] == 3) {
            $ladderizedContent = $rowCoursesHome['courses_offered'];
            $ladderizedStatus = $rowCoursesHome['status'];
        }
    }
} else {
    $collegeContent = "ACLC College of Sorsogon offers the following courses:<br><br>- BS in Information Technology<br>- Hospitality Management<br>- BS Accounting Information System<br>- BS Entrepreneurship";
    $shsContent = "ACLC College of Sorsogon offers the following strands in Senior High School:<br><br>- Accountancy, Business, and Management (ABM)<br>- TVL-ICT<br>- TVL-HRM<br>- TVL-TM";
    $ladderizedContent = "ACLC College of Sorsogon offers the following ladderized programs:<br><br>- 2 YR Associate in Computer Technology";
}

mysqli_close($conn);

if ($collegeStatus == 0) {
  echo "<style>#collegedivpo{display:none;}.feature-1 .icon-wrapper > span, .person .icon-wrapper > span{position:unset!important}</style>";
}
if ($shsStatus == 0) {
  echo "<style>#shsdivpo{display:none;}.feature-1 .icon-wrapper > span, .person .icon-wrapper > span{position:unset!important}</style>";
}
if ($ladderizedStatus == 0) {
  echo "<style>#ladderdivpo{display:none;}.feature-1 .icon-wrapper > span, .person .icon-wrapper > span{position:unset!important}</style>";
}
?>

<?php

include ('includes/database.php');
include ('includes/header.php');

?>

<!-- carousel start -->
<div class="hero-slide owl-carousel">
  <?php
  $query = "SELECT carousel_image FROM carousel_contents WHERE status = 1";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          $image_url = 'carousel_config/carousel_images/' . $row['carousel_image'];
          ?>
          <div class="intro-section" style="background-image: url('admin/<?php echo $image_url; ?>');">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                </div>
              </div>
            </div>
          </div>
          <?php
      }
  } else {
      ?>
      <div class="intro-section" style="background-image: url('images/aclcimg/bg 2.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
            </div>
          </div>
        </div>
      </div>
      <?php
  }
  ?>
</div>
<!-- carousel end -->



<!-- courses -->
<div class="site-section" id="courses-offered">
  <div class="container">
    <div class="row mb-5 justify-content-center text-center">
      <div class="col-lg-4 mb-5">
        <h2 class="section-title-underline mb-5" >
          <span>Courses Offered</span>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" id="collegedivpo">

        <div class="feature-1 border">
          <div class="icon-wrapper bg-primary" style="background-color:#010066 !important">
            <span class="flaticon-mortarboard text-white" style=""></span>
          </div>
          <div class="feature-1-content" style>
            <h2>College</h2>
            <?php echo $collegeContent; ?>
            <div>
              <div class="button-container">
                <a href="./pre-registration.php" class="btn btn-primary rounded-0">Pre-register</a>
                <a href="./courses-college.php" class="btn btn-light ml-2 rounded-0">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" id="ladderdivpo">
        <div class="feature-1 border">
          <div class="icon-wrapper bg-primary" style="background-color:#010066 !important">
            <span class="flaticon-school-material text-white"style=""></span>
          </div>
          <div class="feature-1-content">
            <h2>Ladderized Programs</h2>
            <?php echo $ladderizedContent; ?>
            <div class="button-container">
              <a href="./pre-registration.php" class="btn btn-primary rounded-0">Pre-register</a>
                <a href="./courses-ladderized.php" class="btn btn-light ml-2 rounded-0">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" id="shsdivpo">
        <div class="feature-1 border">
          <div class="icon-wrapper bg-primary" style="background-color:#010066 !important">
            <span class="flaticon-library text-white" style=""></span>
          </div>
          <div class="feature-1-content">
            <h2>Senior High</h2>
            <?php echo $shsContent; ?>
            <div class="button-container">
              <a href="./pre-registration.php" class="btn btn-primary rounded-0">Pre-register</a>
                <a href="./courses-shs.php" class="btn btn-light ml-2 rounded-0">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- courses end -->
<!-- about -->
<div class="section-bg style-1" style="background-image: url('images/about_1.jpg');" id="aboutussection">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h2 class="section-title-underline style-2">
          <span>About ACLC Sorsogon</span>
        </h2>
      </div>
      <div class="col-lg-8">
        <p class="lead"><?php echo $aboutus_aclc; ?></p>
        <p><a href="branch_history.php" class="readmoreindex">Read more</a></p>
      </div>
    </div>
  </div>
</div>
<!-- about end -->


<!-- News & Updates -->
<section id="news-updates-events"></section>
<div class="news-updates">
  <div class="container">

    <div class="row">
      <div class="col-lg-9">
        <div class="section-heading">
          <h2 class="text-black">News &amp; Updates</h2>
        </div>
        <p id="nonewsupdate" style="display:none">No news and updates available.</p>
        <div class="row">
          <div class="col-lg-6" id="newsupdatesectiondiv">
            <div class="post-entry-big">
              <a class="img-link" href="news-single.php?newsupdates_id=<?php echo $latestNewsId; ?>"><img src="./admin/newsupdates_config/newsupdates_thumbnail/<?php echo $latestNewsImage; ?>" alt="Image" class="img-fluid"></a>
              <div class="post-content">
                <div class="post-meta">
                  <a href="#!"><i class="icon-calendar"></i> <?php echo $latestNewsDate; ?></a>
                  <span class="mx-1">/</span>
                  <a href="#!"><i class="icon-clock-o"></i> <?php echo $latestNewsTime; ?></a>
                </div>
                <h3 class="post-heading"><a href="news-single.php?newsupdates_id=<?php echo $latestNewsId; ?>"><?php echo $latestNewsTitle; ?></a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
              <?php
              include 'includes/database.php';

              $query = "SELECT * FROM newsupdates WHERE newsupdates_date ORDER BY newsupdates_date DESC, newsupdates_time DESC LIMIT 3";

              $result = mysqli_query($conn, $query);

              if (!$result) {
                  echo "Error: " . mysqli_error($conn);
              } else {
                  while ($row = mysqli_fetch_assoc($result)) {
                      $latestNewsTitle = $row['newsupdates_title'];
                      $latestNewsDate = date("F j, Y", strtotime($row['newsupdates_date']));
                      $latestNewsTime = date("g:i A", strtotime($row['newsupdates_time']));
                      $latestNewsImage = $row['newsupdates_image'];
                      $latestNewsId = $row['newsupdates_id']; 
                      ?>
                      <div class="post-entry-big horizontal d-flex mb-4">
                          <a class="img-link mr-4" href="news-single.php?newsupdates_id=<?php echo $latestNewsId; ?>"><img src="./admin/newsupdates_config/newsupdates_thumbnail/<?php echo $latestNewsImage; ?>" alt="Image" class="img-fluid"></a>
                          <div class="post-content">
                              <div class="post-meta">
                                  <a href="#!"><i class="icon-calendar"></i> <?php echo $latestNewsDate; ?></a>
                                  <span class="mx-1">/</span>
                                  <a href="#!"><i class="icon-clock-o"></i> <?php echo $latestNewsTime; ?></a>
                              </div>
                              <h3 class="post-heading"><a href="news-single.php?newsupdates_id=<?php echo $latestNewsId; ?>"><?php echo $latestNewsTitle; ?></a></h3>
                          </div>
                      </div>
                      <?php
                  }
              }

              mysqli_close($conn);
              ?>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="section-heading">
            <h3 class="text-black">Upcoming Events</h3>
        </div>
        <?php
        include 'includes/database.php';

        $today = date("Y-m-d");

        $query = "SELECT * FROM newsupdates WHERE newsupdates_date >= DATE(NOW()) ORDER BY newsupdates_date ASC LIMIT 2";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "Error: " . mysqli_error($conn);
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $latestNewsId = $row['newsupdates_id'];
                ?>
                <a class="video-1 mb-4" data-fancybox="" data-ratio="2">
                    <img src="./admin/newsupdates_config/newsupdates_thumbnail/<?php echo $row['newsupdates_image']; ?>" alt="ACLC Sorsogon" class="img-fluid">
                </a>
                <?php
            }
        }

        mysqli_close($conn);
        ?>
    </div>
    </div>
  </div>
</div>
<!-- end News &amp; Updates -->


<!-- footer -->
<?php include ('includes/footer.php') ?>