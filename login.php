<?php
include ('includes/database.php');
include ('includes/functions.php');
include ('includes/header.php');
?>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end justify-content-center text-center">
      <div class="col-lg-7">
        <h2 class="mb-0">Login</h2>
        <p>Please sign-in to your account.</p>
      </div>
    </div>
  </div>
</div>

<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="index.php">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Login</span>
  </div>
</div>

<div class="site-section" style="padding-top: 2em;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
      <div class="alert alert-danger alert-dismissible fade show" role="alert" id="shownorecords" style="display:none;position:unset!important"> <strong>These credentials do not match our records.</strong></div>
      <div class="alert alert-success alert-dismissible fade show" role="alert" id="showsuccess" style="display:none;position:unset!important;visibility:gone"><strong>You have successfully logged in.</strong> Redirecting...</div>
        <form id="loginForm">
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="username">Username</label>
              <input type="text" id="username" name="username" class="form-control form-control-lg">
            </div>
            <div class="col-md-12 form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control form-control-lg">
            </div>
          </div>
          <p>Don't have an account? <a href="register.php">Register here</a></p>
          <div class="row">
            <div class="col-12">
              <input type="submit" value="Log In" class="btn btn-primary btn-lg px-5">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include ('includes/footer.php') ?>
<script>
  $(document).ready(function() {
    $('#loginForm').submit(function(event) {
      event.preventDefault();

      var formData = $(this).serialize();

      $.ajax({
        type: 'POST',
        url: 'login-process.php',
        data: formData,
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            $('#showsuccess').css('display', 'block');
            setTimeout(function() {
              window.location.href = 'index.php'; 
            }, 3000);
          } else {
            $('#shownorecords').css('display', 'block');
            setTimeout(function() {
              $('#shownorecords').css('display', 'none');
            }, 5000);
          }
        },
        error: function() {
          $('#shownorecords').css('display', 'block');
          setTimeout(function() {
            $('#shownorecords').css('display', 'none');
          }, 5000);
        }
      });
    });
  });
</script>
