<?php
include ('includes/database.php');
include ('includes/functions.php');
include ('includes/header.php');

$query = "SELECT * FROM contactus_contents WHERE status=1";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $contactus_address = "<b>Address:</b> " . $row['contactus_address'];
    $contactus_phone = "<b>Phone:</b> " . $row['contactus_phone'];
    $contactus_email = "<b>Email:</b> ". $row['contactus_email'];
} else {
    $contactus_address = "";
    $contactus_phone = "";
    $contactus_email = "";
}
?>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">Contact</h2>
        <p>Get in touch with us.</p>
      </div>
    </div>
  </div>
</div>

<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="index.php">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Contact</span>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 order-md-2">

        <div style="float:right;">
        <div style="float:right;padding:20px;background-color:#010066">
        <h3 style="font-size:18px;color:#fff;margin-bottom:20px;">FIND US ON MAP</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1943.997917265835!2d124.00728600000001!3d12.972118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a0ef174bd54bd7%3A0x699725aad1562887!2sACLC%20-%20Sorsogon!5e0!3m2!1sen!2sph!4v1714325570260!5m2!1sen!2sph" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div style="float:right;padding:20px;background-color:#010066;margin-top:20px">
        <h3 style="font-size:18px;margin-bottom:20px;color:#fff">FOLLOW US ON FACEBOOK</h3>
        <div class="fb-page" data-href="https://www.facebook.com/aclccollegesorsogon" data-tabs="timeline" data-width="300" data-height="" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/aclccollegesorsogon" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/aclccollegesorsogon">ACLC College Sorsogon Campus</a></blockquote></div>
        </div>
        </div>



      </div>
      <div class="col-md-6 order-md-1">
        <h3 style="font-size:18px;font-weight:bold">CONTACT INFORMATION</h3>
        <u style="list-style-type:none;text-decoration:none;font-size:16px">
        <li>ACLC College of Sorsogon</li>
        <li><?php echo $contactus_address; ?></li>
        <li><?php echo $contactus_phone; ?></li>
        <li><?php echo $contactus_email; ?></li>
        </u>
        <h3 style="font-size:18px;font-weight:bold;margin-top:30px">SEND US A MESSAGE</h3>
        <form id="contact_form" method="post">
        <div class="row" >
          <div class="col-md-6 form-group">
            <label for="fname" style="font-size: 16px;">First Name</label>
            <input type="text" id="submission_fname" name="submission_fname" class="form-control form-control-lg">
          </div>
          <div class="col-md-6 form-group">
            <label for="lname" style="font-size: 16px;">Last Name</label>
            <input type="text" id="submission_lname" name="submission_lname" class="form-control form-control-lg">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="eaddress" style="font-size: 16px;">Email Address</label>
            <input type="text" id="submission_email" name="submission_email" class="form-control form-control-lg">
          </div>
          <div class="col-md-6 form-group">
            <label for="tel" style="font-size: 16px;">Tel. Number</label>
            <input type="text" id="submission_tel" name="submission_tel" class="form-control form-control-lg">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="message">Message</label>
            <textarea name="submission_message" id="submission_message" cols="30" rows="10" class="form-control"></textarea>
          </div>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="shownorecords" style="display:none;position:unset!important"> <strong>Please fill in all fields.</strong></div>
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="showsuccess" style="display:none;position:unset!important;visibility:gone"> <strong>Thank you!</strong> Your message has been sent, we will get back to you via email as soon as possible.</div>
        <div class="row">
          <div class="col-12">
            <input type="submit" value="Send Message" name="submission_send" id="submission_send" class="btn btn-primary btn-lg px-5">
          </div>
        </div>
        </form>
      </div>
    </div>
    <div style="margin-top:70px">
    </div>

  </div>
</div>

<!-- footer -->
<?php include ('includes/footer.php') ?>

<script>
    $(document).ready(function() {
        $('#submission_send').click(function(e) {
            e.preventDefault(); 

            var formData = {
                submission_fname: $('#submission_fname').val(),
                submission_lname: $('#submission_lname').val(),
                submission_email: $('#submission_email').val(),
                submission_tel: $('#submission_tel').val(),
                submission_message: $('#submission_message').val()
            };

            if (formData.submission_fname == '' || formData.submission_lname == '' || formData.submission_email == '' || formData.submission_tel == '' || formData.submission_message == '') {
                $('#shownorecords').css('display', 'block');
                setTimeout(function() {
                    $('#shownorecords').css('display', 'none');
                    }, 5000);
                return;
            }

            $.ajax({
                type: 'POST',
                url: 'submission_submit.php', 
                data: formData,
                success: function(response) {
                    $('#submission_fname').val('');
                    $('#submission_lname').val('');
                    $('#submission_email').val('');
                    $('#submission_tel').val('');
                    $('#submission_message').val('');

                    $('#showsuccess').css('display', 'block');
                    setTimeout(function() {
                    $('#showsuccess').css('display', 'none');
                    }, 5000);
                },
                error: function(xhr, status, error) {
                    console.error(xhr);}
            });
        });
    });
</script>