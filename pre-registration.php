<?php

include ('includes/database.php');
include ('includes/functions.php');
include ('includes/header.php');

?>


<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">Pre-registration</h2>
        <p>Fill up the form below to pre-register</p>
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
    <span class="current">Pre-registration</span>
  </div>
</div>

<div class="container pt-5 mb-5">
  <h2 class="section-title-underline">
        <span>Application Form</span>
      </h2>
    <form id="application_form" method="post">
        <div class="row" >
          <div class="col-md-4 form-group">
            <label for="fname" style="font-size: 16px;">First Name</label>
            <input type="text" id="prereg_fname" name="prereg_fname" class="form-control form-control-lg">
          </div>
          <div class="col-md-4 form-group">
            <label for="prereg_mname" style="font-size: 16px;">Middle Name</label>
            <input type="text" id="prereg_mname" name="prereg_mname" class="form-control form-control-lg">
          </div>
          <div class="col-md-4 form-group">
            <label for="prereg_lname" style="font-size: 16px;">Last Name</label>
            <input type="text" id="prereg_lname" name="prereg_lname" class="form-control form-control-lg">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="prereg_dob" style="font-size: 16px;">Date of Birth Address</label>
            <input type="date" id="prereg_dob" name="prereg_dob" class="form-control form-control-lg">
          </div>
          <div class="col-md-6 form-group">
            <label for="prereg_gender" style="font-size: 16px;">Gender</label>
            <select name="prereg_gender" id="prereg_gender" class="form-control form-control-lg">
              <option readonly>Select Gender</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
              <option value="3">Others</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="prereg_mobile" style="font-size: 16px;">Mobile Number</label>
            <input type="text" id="prereg_mobile" name="prereg_mobile" class="form-control form-control-lg">
          </div>
          <div class="col-md-6 form-group">
            <label for="prereg_guardian" style="font-size: 16px;">Name of Guardian</label>
            <input type="text" id="prereg_guardian" name="prereg_guardian" class="form-control form-control-lg">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="prereg_application" style="font-size: 16px;">Application for</label>
            <select name="prereg_application" id="prereg_application" class="form-control form-control-lg">
              <option readonly>Select Application</option>
              <option value="1">Senior High School</option>
              <option value="2">College</option>
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label for="prereg_email" style="font-size: 16px;">Email</label>
            <input type="email" id="prereg_email" name="prereg_email" class="form-control form-control-lg">
          </div>
          <div class="col-md-6 form-group">
            <label for="prereg_facebook" style="font-size: 16px;">Facebook Profile Link</label>
            <input type="text" id="prereg_facebook" name="prereg_facebook" class="form-control form-control-lg">
          </div>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="shownorecords" style="display:none;position:unset!important"> <strong>Please fill in all fields.</strong></div>
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="showsuccess" style="display:none;position:unset!important;visibility:gone"> <strong>Thank you!</strong> Your application has been sent, we will get back to you via email as soon as possible.</div>
        <div class="row">
          <div class="col-12">
            <input type="submit" value="Send Application" name="prereg_send" id="prereg_send" class="btn btn-primary btn-lg px-5">
          </div>
        </div>
        </form>
  </div>
</div>
<!-- footer -->
<?php include ('includes/footer.php') ?>



<script>

$(document).ready(function() {
$('#prereg_send').click(function(e) {
    e.preventDefault();
    var formData = new FormData();
    var prereg_fname = $('#prereg_fname').val();
    var prereg_mname = $('#prereg_mname').val();
    var prereg_lname = $('#prereg_lname').val();
    var prereg_dob = $('#prereg_dob').val();
    var prereg_gender = $('#prereg_gender').val();
    var prereg_mobile = $('#prereg_mobile').val();
    var prereg_guardian = $('#prereg_guardian').val();
    var prereg_application = $('#prereg_application').val();
    var prereg_email = $('#prereg_email').val();
    var prereg_facebook = $('#prereg_facebook').val();



    if (prereg_fname == '' || prereg_mname == '' || prereg_lname == '' || prereg_dob == '' || prereg_gender == '' || prereg_mobile == '' || prereg_guardian == '' || prereg_application == '' || prereg_email == '' || prereg_facebook == '') {
        $('#shownorecords').show();
        setTimeout(function() {
            $('#shownorecords').hide();
        }, 3000);
    } else {
        formData.append('prereg_fname', prereg_fname);
        formData.append('prereg_mname', prereg_mname);
        formData.append('prereg_lname', prereg_lname);
        formData.append('prereg_dob', prereg_dob);
        formData.append('prereg_gender', prereg_gender);
        formData.append('prereg_mobile', prereg_mobile);
        formData.append('prereg_guardian', prereg_guardian);
        formData.append('prereg_application', prereg_application);
        formData.append('prereg_email', prereg_email);
        formData.append('prereg_facebook', prereg_facebook);

        $.ajax({
            url: 'pre-registration-process.php',
            method: 'POST',
            processData: false,  
            contentType: false, 
            data: formData,
            success: function(data) {
                if (data === 'success') {
                    $('#prereg_fname').val('');
                    $('#prereg_mname').val('');
                    $('#prereg_lname').val('');
                    $('#prereg_dob').val('');
                    $('#prereg_gender').val('');
                    $('#prereg_mobile').val('');
                    $('#prereg_guardian').val('');
                    $('#prereg_application').val('');
                    $('#prereg_email').val('');
                    $('#prereg_facebook').val('');


                    $('#showsuccess').show();
                    setTimeout(function() {
                        $('#showsuccess').hide();
                        window.location.href = 'pre-registration.php';
                    }, 7000);
                } else {
                  console.log(data);
                }
            }
        });
    }
});
});

</script>
