<?php
   include ('includes/database.php');
   include ('includes/functions.php');
   include ('includes/header.php');
   
   ?>
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
   <div class="container">
      <div class="row align-items-end justify-content-center text-center">
         <div class="col-lg-7">
            <h2 class="mb-0">Register</h2>
            <p>Please sign-up to create an account.
         </div>
      </div>
   </div>
</div>
<div class="custom-breadcrumns border-bottom">
   <div class="container">
      <a href="index.php">Home</a>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
      <span class="current">Register</span>
   </div>
</div>
<div class="site-section">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-5">
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="showpleasefill" style="display:none;position:unset!important"> <strong>Please fill in all fields.</strong></div>
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="showemailexist" style="display:none;position:unset!important"> <strong>The email has already been taken.</strong></div>
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="showdonotmatch" style="display:none;position:unset!important"> <strong>The password confirmation does not match.</strong></div>
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="showsuccess" style="display:none;position:unset!important;visibility:gone"><strong>You have successfully registered. </strong>Please login to continue.</div>
            <form id="registrationForm">
               <div class="row">
                  <div class="col-md-12 form-group">
                     <label for="fullname">Full Name</label>
                     <input type="text" id="fullname" name="fullname" class="form-control form-control-lg">
                  </div>
                  <div class="col-md-12 form-group">
                     <label for="username">Username</label>
                     <input type="text" id="username" name="username" class="form-control form-control-lg">
                  </div>
                  <div class="col-md-12 form-group">
                     <label for="email">Email</label>
                     <input type="email" id="email" name="email" class="form-control form-control-lg">
                  </div>
                  <div class="col-md-6 form-group">
                     <label for="pword">Password</label>
                     <input type="password" id="pword" name="pword" class="form-control form-control-lg"> 
                  </div>
                  <div class="col-md-6 form-group">
                     <label for="pword2">Re-type Password</label>
                     <input type="password" id="pword2" name="pword2" class="form-control form-control-lg"> 
                  </div>
               </div>
               <p>Already have an account? <a href="login.php">Login here</a></p>
               <div class="row">
                  <div class="col-12">
                     <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php include ('includes/footer.php') ?>
<script>
   $(document).ready(function(){
       $('#registrationForm').submit(function(event){
           event.preventDefault();
           
           var formData = $(this).serialize(); 
           
           if ($('#fullname').val() == '' || $('#username').val() == '' || $('#email').val() == '' || $('#pword').val() == '' || $('#pword2').val() == '') {
               $('#showpleasefill').css('display', 'block');
               setTimeout(function() {
                  $('#showpleasefill').css('display', 'none');
               }, 5000);
               return;
           }

             if ($('#pword').val() != $('#pword2').val()) {
                   $('#showdonotmatch').css('display', 'block');
                   setTimeout(function() {
                      $('#showdonotmatch').css('display', 'none');
                   }, 5000);
                return;
             }

           $.ajax({
               type: 'POST',
               url: 'register-success.php', 
               data: formData,
               dataType: 'json',
               success: function(response){
                   if (response.success) {
                        $('#showsuccess').css('display', 'block');
                        setTimeout(function() {
                            window.location.href = 'login.php';
                        }, 3000);
                     } else if (response.message == 'emailexists') {
                       $('#showemailexist').css('display', 'block');
                       setTimeout(function() {
                           $('#showemailexist').css('display', 'none');
                       }, 5000);
                   } else {
                       var errorAlert = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Error!</strong> ' + response.message + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>';
                               $('.site-wrap').prepend(errorAlert);
                               setTimeout(function() {
                                   $('.site-wrap').find('.alert').remove();
                               }, 2000);
                   }
               },
               error: function(){
                   var errorAlert = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Error!</strong> An error has occurred. Please try again later. <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>';
               }
           });
       });
   });
</script>