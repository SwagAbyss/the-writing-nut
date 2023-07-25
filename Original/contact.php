<?php error_reporting(0); ?>
<?php
$action = $_REQUEST['action'];
if ($action == "")    /* display the contact form */ {
?>
<!doctype html>
<html lang="zxx" class="theme-light">

<!-- index-14.html section ending  3:40 -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="../assets/revolution/css/settings.css">
    <link rel="stylesheet" href="../assets/revolution/css/layers.css">
    <link rel="stylesheet" href="../assets/revolution/css/navigation.css">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/boxicons.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/odometer.min.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/nice-select.min.css">
    <link rel="stylesheet" href="../assets/css/viewer.min.css">
    <link rel="stylesheet" href="../assets/css/slick.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dark.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <title>WritingNut - Education Courses & Online Training HTML Template</title>

    <link rel="icon" type="image/png" href="../assets/img/original_img/logo.jpeg">
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Header Area -->
    <header class="header-area p-relative">

        <div class="top-header top-header-style-four training-top-header-with-black-color">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-header-contact-info">
                            <li>
                                Call:
                                <a href="tel:9940067344">+91 994-006-7344</a>
                            </li>
                        </ul>

                        <div class="top-header-social">
                            <span>Follow us:</span>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                            <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                            <a href="https://instagram.com/the_writing_nut?igshid=Y2IzZGU1MTFhOQ==" target="_blank"><i
                                    class='bx bxl-instagram'></i></a>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4 col-md-4">
                        <ul class="top-header-login-register">
                            <li><a href="login.html"><i class='bx bx-log-in'></i> Login</a></li>
                            <li><a href="register.html"><i class='bx bx-log-in-circle'></i> Register</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-style-three">
            <div class="WritingNut-responsive-nav">
                <div class="container">
                    <div class="WritingNut-responsive-menu">
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="../assets/img/black-logo.png" class="black-logo" alt="logo">
                                <img src="../assets/img/logo.png" class="white-logo" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="WritingNut-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index-2.html">
                            <img src="../assets/img/black-logo.png" class="black-logo" alt="logo">
                            <img src="../assets/img/logo.png" class="white-logo" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="home.html" class="nav-link">Home </a></i>
                                <li class="nav-item"><a href="about.html" class="nav-link">About Us </a></i>
                                <li class="nav-item"><a href="course.html" class="nav-link">Courses </a></i>
                                <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery </a></i>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->


        <!-- Start Sticky Navbar Area -->
        <div class="navbar-area navbar-style-three header-sticky">
            <div class="WritingNut-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index-2.html">
                            <img src="../assets/img/black-logo.png" class="black-logo" alt="logo">
                            <img src="../assets/img/logo.png" class="white-logo" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="home.html" class="nav-link">Home </a></i>
                                <li class="nav-item"><a href="about.html" class="nav-link">About Us </a></i>
                                <li class="nav-item"><a href="course.html" class="nav-link">Courses </a></i>
                                <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery </a></i>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us </a></i>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Sticky Navbar Area -->

    </header>
    <!-- End Header Area -->

    <!-- Search Box Layout -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>

                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>

                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Box Layout -->

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="index-2.html">Home</a></li>
                    <li>Contact</li>
                </ul>
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Info Area -->

    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-envelope'></i>
                        </div>

                        <h3>Email Here</h3>
                        <p><a href="thewritingnut@gmail.com">thewritingnut@gmail.com</a>
                        </p>
                        <p><a href="ramyashree.v@gmail.com">ramyashree.v@gmail.com</a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>

                        <h3>Location Here</h3>
                        <p><a href="https://goo.gl/maps/Mii9keyeqXeNH4347" target="_blank">Chennai, India</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>

                        <h3>Call Here</h3>
                        <p><a href="tel:9940078344">+91 9940078344</a></p>
                        <p><a href="tel:8248083597">+91 8248083597</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="particles-js-circle-bubble-2"></div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Contact Us</span>
                <h2>Get in touch for more details</h2>
                <p>Reach out to us for course details and timings</p>
            </div>
            <div class="contact-form">
                <form id="contactForm" action="" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Send Message</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="particles-js-circle-bubble-3"></div>
        <div class="contact-bg-image"><img src="../assets/img/map.png" alt="image"></div>
    </section>
    <!-- End Contact Area -->



    <!-- Start Footer Area -->
    <footer class="footer-area footer-style-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6">
                    <div class="single-footer-widget mb-30">
                        <h3>Contact Us</h3>

                        <ul class="contact-us-link">
                            <li>
                                <i class='bx bx-map'></i>
                                <a href="#" target="_blank">2750 Quadra Street Victoria Road, New York, USA</a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="#">+91 994-006-7344</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="#"><span class="__cf_email__"
                                        data-cfemail="0e666b6262614e7c6f7f7b6b206d6163">thewritingnut@gmail.com</span></a>
                            </li>
                        </ul>

                        <ul class="social-link">
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="https://instagram.com/the_writing_nut?igshid=Y2IzZGU1MTFhOQ==" class="d-block"
                                    target="_blank"><i class='bx bxl-instagram'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget mb-30">
                    <h3>Support</h3>

                    <ul class="support-link">
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Condition</a></li>
                        <li><a href="#">Policy</a></li>
                    </ul>
                </div>
            </div> -->

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget mb-30">
                        <h3>Useful Link</h3>

                        <ul class="useful-link">
                            <li><a href="home.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="course.html">Courses</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget mb-30">
                        <h3>Newsletter</h3>

                        <div class="newsletter-box">
                            <p>To get the latest news and latest updates from us.</p>

                            <form class="newsletter-form" data-bs-toggle="validator">
                                <label>Your e-mail address:</label>
                                <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL"
                                    required autocomplete="off">
                                <button type="submit">Subscribe</button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-area footer-bottom-style-wrap">
            <div class="container">
                <div class="logo">
                    <a href="index-2.html" class="d-inline-block"><img src="../assets/img/logo.png" alt="image"></a>
                </div>
                <p><i class='bx bx-copyright'></i>
                    <script data-cfasync="false"
                        src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>document.write(new Date().getFullYear())</script> <a href="index-2.html" target="_blank">The
                        Writing Nut</a> designed by <a href="https://toolfe.com target=" _blank">Toolfe</a> | All rights
                    reserved.
                </p>
            </div>© 2023 Stallion Group. All Rights Reserved.
        </div>
    </footer>
    <!-- End Footer Area -->

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

    <!-- Dark version -->
    <div class="dark-version">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <!-- Dark version -->

    <!-- Links of JS files -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/mixitup.min.js"></script>
    <script src="../assets/js/parallax.min.js"></script>
    <script src="../assets/js/jquery.appear.min.js"></script>
    <script src="../assets/js/odometer.min.js"></script>
    <script src="../assets/js/particles.min.js"></script>
    <script src="../assets/js/meanmenu.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/viewer.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="../assets/js/form-validator.min.js"></script>
    <script src="../assets/js/contact-form-script.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

<!-- contact.html section ending  4:07 -->

</html>
<?php
} else                /* send the submitted data */ {
    $con_name = $_REQUEST['name'];
    $con_email = $_REQUEST['email'];
    $con_phone = $_REQUEST['phone_number'];
    $con_subject = $_REQUEST['msg_subject'];
    $con_message = $_REQUEST['message'];

    $from = "From: $con_name<$con_email>\r\nReturn-path: $con_email";
    $subject = "$con_subject - From nationaldiamondtools.in";
    $con_message = "Name : $con_name,| Phone : $con_phone, | Email : $con_email, Subject : $con_subject | Message : $con_message";
    mail("sathish8608855@gmail.com", $subject, $con_message, $from);
    echo "Your Message has been sent!";
}
?>