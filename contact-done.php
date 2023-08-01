<!doctype html>
<html lang="zxx" class="theme-light">

<!-- index-14.html section ending  3:40 -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" href="assets/revolution/css/navigation.css">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/viewer.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/dark.css"> -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>WritingNut - Education Courses & Online Training HTML Template</title>

    <link rel="icon" type="image/png" href="assets/img/original_img/logo.jpeg">
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
                            <a href="https://instagram.com/the_writing_nut?igshid=Y2IzZGU1MTFhOQ==" target="_blank"><i class='bx bxl-instagram'></i></a>
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
                            <a href="index.html">
                                <img src="assets/img/original_img/wnb.png" class="black-logo" alt="logo">
                                <img src="assets/img/original_img/wnw.png" class="white-logo" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="WritingNut-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/original_img/wnb.png" class="black-logo" alt="logo">
                            <img src="assets/img/original_img/wnw.png" class="white-logo" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="index.html" class="nav-link">Home </a></i>
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
                        <a class="navbar-brand" href="./index.html">
                            <img src="assets/img/original_img/wnb.png" class="black-logo" alt="logo">
                            <img src="assets/img/original_img/wnw.png" class="white-logo" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="./index.html" class="nav-link">Home </a></i>
                                <li class="nav-item"><a href="./about.html" class="nav-link">About Us </a></i>
                                <li class="nav-item"><a href="./course.html" class="nav-link">Courses </a></i>
                                <li class="nav-item"><a href="./gallery.html" class="nav-link">Gallery </a></i>
                                <li class="nav-item"><a href="./contact.html" class="nav-link">Contact Us </a></i>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Sticky Navbar Area -->

        <?php
        include_once './config.php';
        if (isset($_POST['submit'])) {
            // var_dump($_POST);
            $date = date("d-m-Y");
            $time = date("h:i");
            $name = $_POST['con_name'];
            $email = $_POST['con_email'];
            $phone = $_POST['con_phone'];
            $subject = $_POST['con_subject'];
            $message = $_POST['con_message'];
            $sql = "INSERT INTO writingnut_contact (date, time, name, email, phone, subject, message) 
        VALUES ('$date','$time','$name','$email','$phone','$subject', '$message')";
            if ($conn->query($sql) === TRUE) {
                // echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
        ?>

    </header>
    <!-- End Header Area -->

    <!--End Contact us page php -->

    <!-- Start Error 404 Area -->
    <div class="error-404-area">
        <div class="container">
            <div class="notfound">
                <div class="notfound-bg">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <h1>Your Message Sent</h1>
                <h3>Thanks for your response</h3>
                <p>Our team will get in touch with you as soon as possible.</p>
                <a href="index.html" class="default-btn"><i class='bx bx-home-circle icon-arrow before'></i><span class="label">Back Home</span><i class="bx bx-home-circle icon-arrow after"></i></a>
            </div>
        </div>
    </div>
    <!-- End Error 404 Area -->


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
                                <a href="#" target="_blank">Chennai, Tamilnadu, India</a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="#">+91 994-006-7344</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="#"><span class="__cf_email__" data-cfemail="0e666b6262614e7c6f7f7b6b206d6163">thewritingnut@gmail.com</span></a>
                            </li>
                        </ul>

                        <ul class="social-link">
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="https://instagram.com/the_writing_nut?igshid=Y2IzZGU1MTFhOQ==" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
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
                            <li><a href="index.html">Home</a></li>
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

                            <form id="contact-form" action="subscribe-done.php" method="POST" enctype="multipart/form-data">
                                <label>Your e-mail address:</label>
                                <input type="email" class="input-newsletter" placeholder="Enter your email" name="sub_email" required autocomplete="off">
                                <button type="submit">Subscribe</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-area footer-bottom-style-wrap">
            <div class="container">
                <div class="logo">
                    <a href="index.html" class="d-inline-block"><img src="assets/img/original_img/wnw.png" alt="image"></a>
                </div>
                <p><i class='bx bx-copyright'></i>
                    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear())
                    </script> <a href="index.html" target="_blank">The
                        Writing Nut</a> All rights reserved | Designed & Developed by <a href="https://toolfe.com target=" _blank">Toolfe</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

    <!-- Dark version -->
    <!-- <div class="dark-version">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div> -->
    <!-- Dark version -->

    <!-- Links of JS files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/meanmenu.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/viewer.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>