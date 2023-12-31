<?php
include "../config.php"; // Using database connection file here
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>The Writing Nut</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/original_img/logo.jpeg" rel="icon">
    <link href="../assets/img/original_img/logo.jpeg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
          <img src="../assets/img/original_img/logo.jpeg" alt="">
          <span class="d-none d-lg-block">The Writing Nut</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->


      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li><!-- End Search Icon-->




          <li class="nav-item dropdown pe-3">

            

          <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/profile-img.gif" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2">The Writing Nut</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6>Ramyasree</h6>
                <span>Admin</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="../index.html">
                  <i class="bi bi-question-circle"></i>
                  <span>Visit Website</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="./log_logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Log Out</span>
                </a>
              </li>
            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

        </ul>
      </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link collapsed" href="home.php">
            <i class="bi bi-grid"></i>
            <span>Contacts</span>
          </a>
        </li><!-- End Contacts Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="subscribe.php">
            <i class="bi bi-journal-text"></i>
            <span>Subscribers</span>
          </a>
        </li><!-- End Contacts Nav -->


    </aside><!-- End Sidebar-->

    <main id="main" class="main">

      <div class="pagetitle">


      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Contact List</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th onclick="sortBy(0)">ID</th>
                      <th onclick="sortBy(1)">Date</th>
                      <th onclick="sortBy(2)">Time</th>
                      <th onclick="sortBy(3)">Name</th>
                      <th onclick="sortBy(4)">Email</th>
                      <th onclick="sortBy(5)">Phone</th>
                      <th onclick="sortBy(6)">Subject</th>
                      <th onclick="sortBy(7)">Message</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $num = 1;
                    $query = mysqli_query($conn, "select * from writingnut_contact");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                      <tr>
                        <th scope="row">
                          <?php echo $num++ ?>
                        </th>
                        <td>
                          <?php echo $row['date']; ?>
                        </td>
                        <td>
                          <?php echo $row['time']; ?>
                        </td>
                        <td>
                          <?php echo $row['name']; ?>
                        </td>
                        <td>
                          <?php echo $row['email']; ?>
                        </td>
                        <td>
                          <?php echo $row['phone']; ?>
                        </td>
                        <td>
                          <?php echo $row['subject']; ?>
                        </td>
                        <td>
                          <?php echo $row['message']; ?>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->

              </div>
            </div>

          </div>
        </div>
      </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; 2023 <strong><span>The Writing Nut</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed & Developed by<a href="https://Toolfe.com/">Toolfe</a>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/admin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/admin/assets/vendor/quill/quill.min.js"></script>
    <script src="/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/admin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/admin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

  </html>
<?php
}
?>