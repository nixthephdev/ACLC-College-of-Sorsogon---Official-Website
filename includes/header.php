
<?php
session_start();

?>

<?php
$queryContact = "SELECT * FROM contactus_contents WHERE status=1";
$resultContact = mysqli_query($conn, $queryContact);

if (mysqli_num_rows($resultContact) > 0) {
    $rowContact = mysqli_fetch_assoc($resultContact);

    $contactus_address = $rowContact['contactus_address'];
    $contactus_phone = $rowContact['contactus_phone'];
    $contactus_email = $rowContact['contactus_email'];
} else {
    $contactus_address = "<style>div#contactushiddenone{visibility:hidden}a#haveaquest{visibility:visible}ul#footercontact{display:none}</style>";
    $contactus_phone =  "<style>div#contactushiddenone{visibility:hidden}ul#footercontact{display:none}</style>";
    $contactus_email =  "<style>div#contactushiddenone{visibility:hidden}ul#footercontact{display:none}</style>";
}

$queryAboutUs = "SELECT * FROM aboutus_contents WHERE content_id = 2 AND content_active = 1";
$resultAbout = mysqli_query($conn, $queryAboutUs);

if (mysqli_num_rows($resultAbout) > 0) {
    $rowAbout = mysqli_fetch_assoc($resultAbout);

    $aboutus_aclc = $rowAbout['content_text'];
} else {
    $aboutus_aclc = "<style>div#aboutussection{display:none}</style>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ACLC Sorsogon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" type="text/css" href="./admin/assets/css/font-awesome.min.css">

    <link rel="icon" href="./images/favicon.png" type="image/x-icon">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0" nonce="ajoC5Q8w"></script>

</head>
<!-- nav start -->

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <div class="py-2 bg-light">
            <div class="container">
                <div class="row align-items-center" style="margin-bottom: 4px; margin-top: 5px;">
                    <div class="col-lg-9 d-none d-lg-block" id="contactushiddenone">
                        <a href="contact.php" class="small mr-3" id="haveaquest" style=""><span class="icon-question-circle-o mr-2"></span> Have a
                            questions?</a>
                        <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> <?php echo $contactus_phone; ?></a>
                        <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span>
                        <?php echo $contactus_email; ?></a>
                    </div>
                    <div class="col-lg-3 text-right">
                        <a href="login.php" class="small mr-3"><span class="icon-user mr-1"></span> <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'My Account'; ?></a>
                        <a href="pre-registration.php" class="" style="color: #fff; text-decoration: none; background: #D70D0D; font-size: 12px; padding: 8px 24px; font-weight: bold; text-transform: uppercase; border-radius: 18px;">
                            Pre-register</a>
                    </div>
                </div>
            </div>
        </div>
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner" >

            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="site-logo">
                        <a href="index.php" class="d-block">
                            <img src="images/aclcbluelogo.png" alt="Image" class="img-fluid">
                        </a>
                    </div>
                    <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="active">
                                    <a href="index.php" class="nav-link text-left">Home</a>
                                </li>
                                <li class="has-children">
                                    <a class="nav-link text-left">About Us</a>
                                    <ul class="dropdown">
                                        <li><a href="branch_history.php">Branch History</a></li>
                                        <li><a href="mission-vision.php">Mission &amp; Vision</a></li>
                                        <li><a href="organizational_chart.php">Organizational Chart</a></li>
                                    </ul>
                                </li>
                                <li>
                                <li class="has-children">
                                    <a class="nav-link text-left">Admission</a>
                                    <ul class="dropdown">
                                        <li><a href="college-admissions.php">College</a></li>
                                        <li><a href="shs-admissions.php">Senior High</a></li>
                                        <!--<li><a href="#!">Scholarship</a></li>-->
                                        <li><a href="pre-registration.php">Pre-register</a></li>
                                    </ul>
                                </li>
                                <li>
                                <li class="has-children">
                                    <a class="nav-link text-left">Courses</a>
                                    <ul class="dropdown">
                                        <li><a href="courses-college.php">College</a></li>
                                        <li><a href="courses-shs.php">Senior High</a></li>
                                        <li><a href="courses-ladderized.php">Ladderized</a></li>
                                    </ul>
                                </li>
                                </li>
                                <li>
                                    <a hclass="nav-link scroll-link" href="./#news-updates-events">News &amp; Events</a>
                                </li>

                                <li>
                                    <a href="contact.php" class="nav-link text-left">Contact</a>
                                </li>
                            </ul>
                            </ul>
                        </nav>

                    </div>
                    <div class="ml-auto">
                        <div class="social-wrap">
                            <a href="https://www.facebook.com/aclccollegesorsogon" target="_blank"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-instagram"></span></a>
                            <a href="#"><span class="icon-linkedin"></span></a>

                            <a href="#"
                                class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                    class="icon-menu h3"></span></a>
                        </div>
                    </div>

                </div>
            </div>

        </header>