<?php
   include 'includes/database.php';
   
   
       $newsupdates_id = $_GET['newsupdates_id'];
   
       $query = "SELECT * FROM newsupdates WHERE newsupdates_id = $newsupdates_id";
       $result = mysqli_query($conn, $query);
   
       if (mysqli_num_rows($result) > 0) {
           $row = mysqli_fetch_assoc($result);
   
       ?>
<?php
   } else {
       echo "<p>Announcement not found.</p>";
   }
   ?>
<?php
   include ('includes/database.php');
   include ('includes/functions.php');
   include ('includes/header.php');
   
   ?>
<!-- breadcrumbs -->
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
   <div class="container">
      <div class="row align-items-end">
         <div class="col-lg-7">
            <h2 class="mb-0">News & Updates</h2>
            <p>Stay updated with the latest news and updates from ACLC College of Sorsogon.</p>
         </div>
      </div>
   </div>
</div>
<div class="custom-breadcrumns border-bottom">
   <div class="container">
      <a href="index.php">Home</a>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
      <span>News & Updates</span>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
      <span class="current"><?php echo $row['newsupdates_title']; ?></span>
   </div>
</div>
<!-- breadcrumbs end -->
<div class="container pt-5 mb-5">
   <div class="row">
      <div class="blog-view">
         <article class="blog blog-single-post">
            <h3 class="blog-title" style="font-weight:bold"><?php echo $row['newsupdates_title']; ?></h3>
            <div class="blog-info clearfix">
               <div class="post-left">
                  <ul>
                     <li><i class="fa fa-calendar"></i> <span><?php echo date("F j, Y", strtotime($row['newsupdates_date'])); ?></span></li>
                     <li><i class="fa fa-clock-o"></i> <?php echo date("g:i A", strtotime($row['newsupdates_time'])); ?></li>
                  </ul>
               </div>
            </div>
            <div class="blog-image">
               <a href="#."><img alt="" src="./admin/newsupdates_config/newsupdates_thumbnail/<?php echo $row['newsupdates_image']; ?>" class="img-fluid"></a>
            </div>
            <div class="blog-content">
               <p><?php echo $row['newsupdates_description']; ?></p>
            </div>
         </article>
         <div class="widget blog-share clearfix">
            <h3>Share the newsupdates</h3>
            <ul class="social-share">
               <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://aclc.is-great.com/newsupdates-details.php?newsupdates_id=<?php echo $row['newsupdates_id']; ?>" title="Facebook"><span class="icon-facebook"></span></a></li>
               <li><a href="https://twitter.com/intent/tweet?text=Check out this newsupdates!&url=http://aclc.is-great.com/newsupdates-details.php?newsupdates_id=<?php echo $row['newsupdates_id']; ?>" title="Twitter"><span class="icon-twitter"></span></a></li>
               <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=http://aclc.is-great.com/newsupdates-details.php?newsupdates_id=<?php echo $row['newsupdates_id']; ?>&title=Check out this newsupdates!" title="Linkedin"><span class="icon-linkedin"></span></i></a></li>
               <li><a href="https://reddit.com/submit?url=http://aclc.is-great.com/newsupdates-details.php?newsupdates_id=<?php echo $row['newsupdates_id']; ?>&title=Check out this newsupdates!" title="Reddit"><span class="icon-reddit"></span></a></li>
            </ul>
         </div>
         <div class="widget author-widget clearfix">
            <h3>About the Author</h3>
            <div class="about-author">
               <div class="about-author-img">
                  <div class="author-img-wrap">
                     <img class="img-fluid rounded-circle" alt="ACLC Sorsogon" src="./images/aclc-sorsogon-logo.jpg">
                  </div>
               </div>
               <div class="author-details">
                  <span class="blog-author-name">ACLC College of Sorsogon</span>
                  <p>Trusted quality IT-based education in Sorsogon for more than 20 years.</p>
               </div>
            </div>
         </div>
      </div>
      <aside class="col-md-4">
         <!--<div class="widget search-widget">
            <h5>Search</h5>
            <form class="search-form">
               <div class="input-group">
                  <input type="text" placeholder="Search..." class="form-control">
                  <div class="input-group-append">
                     <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                  </div>
               </div>
            </form>
         </div>
         <div class="widget post-widget">
            <h5>Latest News & Updates</h5>
            <ul class="latest-posts">
               <?php
                  $query = "SELECT * FROM newsupdates ORDER BY newsupdates_date DESC LIMIT 4";
                  $result = mysqli_query($conn, $query);
                  
                  if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                          ?>
               <li>
                  <div class="post-thumb">
                     <a href="newsupdates-details.php?newsupdates_id=<?php echo $row['newsupdates_id']; ?>">
                     <img class="img-fluid" src="./admin/newsupdates_config/newsupdates_thumbnail/<?php echo $row['newsupdates_image']; ?>" alt="">
                     </a>
                  </div>
                  <div class="post-info">
                     <h4><a href="news-single.php?newsupdates_id=<?php echo $row['newsupdates_id']; ?>"><?php echo $row['newsupdates_title']; ?></a></h4>
                     <p><i aria-hidden="true" class="fa fa-calendar"></i> <?php echo date("F j, Y", strtotime($row['newsupdates_date'])); ?></p>
                  </div>
               </li>
               <?php
                  }
                  } else {
                  echo "<li>No news and updates available.</li>";
                  }
                  ?>
            </ul>
         </div>-->
      </aside>
   </div>
</div>
<!-- footer -->
<?php include ('includes/footer.php') ?>