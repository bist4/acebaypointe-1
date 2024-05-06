<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Script of the Header -->
  <script src="assets/js/header.js" defer></script>

  <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php require ('assets/links/header.php') ?> <!-- The Header -->
  <main> <!-- Main -->
    <!-- Title -->
    <div class="bg-dark py-5 my-5">
      <div class="py-5">
      </div>
      <div class="container">
        <div class="col-lg-6">
          <div class=" display-5 fw-bolder text-center text-xl-start my-5">
            <h1 class="display-5 fw-bolder text-white mb-lg-2">CONTACT US</h1>
            <p class="lead text-white-50 mb-0 mb-lg-3">QUICK CONTACT</p>
          </div>
        </div>
      </div>
    </div> <!-- End of Page Title -->

    <!-- Main content of Contact Us -->
    <main id="main" class="main">
      <div>
        <iframe style="border:0; width: 100%; height: 350px;"
          src="https://maps.google.com/maps?q=Block%208,%20Lot%201A%20and%201B%20Dewey%20Avenue%20Subic%20Bay%20Freeport%20Zone,%20Olongapo,%202222%20Zambales&t=&z=13&ie=UTF8&iwloc=&output=embed"
          frameborder="0" allowfullscreen></iframe>
      </div>
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
          <div class="row gy-5 gx-lg-5">
            <div class="col-lg-5">
              <div class="info">
                <h3 class="mb-3">Get in touch</h3>
                <div class="info-item d-flex">
                  <i class="fa fa-map-marker flex-shrink-0"></i>
                  <div>
                    <h4>Location:</h4>
                    <p>Block 8, Lot 1A and 1B Dewey Avenue Subic Bay Freeport Zone, Olongapo, 2222 Zambales</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="fa fa-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>baypointehospitalmedicalcenter@yahoo.com</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="fa fa-phone flex-shrink-0"></i>
                  <div>
                    <h4>Phone:</h4>
                    <p>(047) 250-6070 Local 100</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="fa fa-mobile flex-shrink-0"></i>
                  <div>
                    <h4>Call:</h4>
                    <p>Smart: 0939-915-7633</p>
                    <p>Globe: 0917-545-1566</p>
                    <p>Sun: 0922-812-8623</p>
                  </div>
                </div>
              </div> <!-- End Info Item -->

            </div>
            <div class="col-lg-7">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <!-- Department Dropdown -->
                <div class="form-group mt-3">
                  <select name="department" id="department" class="form-select">
                    <option value="">Select Department</option>
                    <option value="Department 1">Department 1</option>
                    <option value="Department 2">Department 2</option>
                    <option value="Department 3">Department 3</option>
                    <option value="Department 1">Department 4</option>
                    <option value="Department 2">Department 5</option>
                    <option value="Department 3">Department 6</option>
                    <option value="Department 1">Department 7</option>
                    <option value="Department 2">Department 8</option>
                    <option value="Department 3">Department 9</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center appointments-btn"><button type="submit">Send Message</button></div>
              </form>
            </div><!-- End Contact Form -->
          </div>

        </div>
      </section><!-- End Contact Section -->

    </main> <!-- End of the main content of Contact Us -->
  </main> <!-- End Main -->

  <!-- Footer -->
  <footer>
    <?php require ('assets/links/footer.php') ?>
  </footer> <!-- End Footer -->

  <?php require ('assets/links/back-to-top.php') ?> <!-- Back to Top -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>