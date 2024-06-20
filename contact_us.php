<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us | ACEMC - Baypointe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <?php require ('assets/links/favicons.php') ?>


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
  <link href="assets/css/styles1.css" rel="stylesheet"> <!-- Form animation -->

  <!-- Script of the Header -->
  <!-- <script src="assets/js/header.js" defer></script> -->

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
      <!-- Contact Us Section -->
      <section id="contact" class="contact">
        <div class="container">
          <!-- <div class="my-3"> Message
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div> -->
          <?php
          include ("config/db_con.php"); // Connection to database
          
          $medical = mysqli_query($conn, "SELECT * FROM Contact_Information WHERE Active = 1");
          $row = mysqli_fetch_assoc($medical)
            ?>
          <div class="row gy-5 gx-lg-5">
            <div class="col-lg-5">
              <div class="info">
                <h3 class="mb-3">Get in touch</h3>
                <div class="info-item d-flex">
                  <i class="fa fa-map-marker flex-shrink-0"></i>
                  <div>
                    <h4>Location:</h4>
                    <p>
                      <?php echo '<a style="color: black;" href="https://www.google.com/maps/place/Allied+Care+Experts+(ACE)+Medical+Center+-+Baypointe/@14.8237799,120.2718323,19z/data=!4m14!1m7!3m6!1s0x3396713dc6158cd5:0xce084c90e0457df1!2sAllied+Care+Experts+(ACE)+Medical+Center+-+Baypointe!8m2!3d14.8238888!4d120.2721641!16s%2Fg%2F1w0h50z9!3m5!1s0x3396713dc6158cd5:0xce084c90e0457df1!8m2!3d14.8238888!4d120.2721641!16s%2Fg%2F1w0h50z9?authuser=2&entry=ttu">' . htmlspecialchars(trim($row['Address'])) . '</a><br>'; ?>
                    </p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="fa fa-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>
                      <?php echo '<a style="color: black;" href="https://mail.google.com/mail/?view=cm&fs=1&to=baypointehospitalmedicalcenter@yahoo.com">' . htmlspecialchars(trim($row['Email'])) . '</a><br>'; ?>
                    </p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="fa fa-phone flex-shrink-0"></i>
                  <div>
                    <h4>Phone:</h4>
                    <?php
                    $tele_num = explode("\n", $row['Phone']);
                    foreach ($tele_num as $phone) {
                      echo '<a style="color: black;" href="tel:' . htmlspecialchars(trim($phone)) . '">' . htmlspecialchars(trim($phone)) . '</a><br>';
                    }
                    ?>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="fa fa-mobile flex-shrink-0"></i>
                  <div>
                    <h4>Call:</h4>
                    <?php
                    $mobile_num = explode("\n", $row['Mobile']);
                    foreach ($mobile_num as $mobile) {
                      echo '<a style="color: black;" href="tel:' . htmlspecialchars(trim($mobile)) . '">' . htmlspecialchars(trim($mobile)) . '</a><br>';
                    }
                    ?>
                  </div>
                </div>
              </div> <!-- End Info Item -->

            </div>
            <div class="col-lg-7 bg-white"
              style="href='https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css'">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="form-outline"> <!-- fifth div for outline tatas yung label -->
                      <input type="text" name="name" required class="form-control form-control-lg">
                      <!-- class sa input form-control -->
                      <label for="designation" class="form-label">Name<span class="text-danger"></span></label>
                      <!-- class sa label form-label -->
                    </div>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <div class="form-outline">
                      <input type="tel" name="number" required class="form-control form-control-lg" pattern="0\d{9}"
                        inputmode="numeric" id="numberInput" maxlength="11" oninput="validateNumberInput()">
                      <label for="designation" class="form-label">Number<span class="text-danger"></span></label>
                    </div>
                  </div>

                  <script>
                    function validateNumberInput() {
                      const input = document.getElementById('numberInput');

                      if (input.value.length > 11) {
                        input.value = input.value.slice(0, 11);
                      }
                    }
                  </script>


                  <div class="form-group mt-3">
                    <div class="form-outline"> <!-- fifth div for outline tatas yung label -->
                      <input type="text" name="email" required class="form-control form-control-lg">
                      <!-- class sa input form-control -->
                      <label for="designation" class="form-label">Email<span class="text-danger"></span></label>
                      <!-- class sa label form-label -->
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="form-outline"> <!-- fifth div for outline tatas yung label -->
                      <input type="email" name="subject" required class="form-control form-control-lg">
                      <!-- class sa input form-control -->
                      <label for="designation" class="form-label">Subject<span class="text-danger"></span></label>
                      <!-- class sa label form-label -->
                    </div>
                  </div>
                  <!-- Category Dropdown -->
                  <div class="form-group mt-3">
                    <select name="Category" id="Category" class="form-select">
                      <option value="">Select Category</option>
                      <option value="Category 1">Category 1</option>
                      <option value="Category 2">Category 2</option>
                      <option value="Category 3">Category 3</option>
                      <option value="Category 1">Category 4</option>
                      <option value="Category 2">Category 5</option>
                      <option value="Category 3">Category 6</option>
                      <option value="Category 1">Category 7</option>
                      <option value="Category 2">Category 8</option>
                      <option value="Category 3">Category 9</option>
                    </select>
                  </div>
                  <div class="form-group mt-3">
                    <div class="form-outline"> <!-- fifth div for outline tatas yung label -->
                      <textarea class="form-control form-control-lg" name="message"
                        style="height: 162px; required"></textarea>
                      <label for="designation" class="form-label">Message<span class="text-danger"></span></label>
                      <!-- class sa label form-label -->
                    </div>
                  </div>
                  <div class="text-center appointments-btn"><button type="submit">Send Message</button></div>
              </form>
            </div><!-- End Contact Form -->
          </div>
        </div>
      </section><!-- End Contact Section -->
    </main> <!-- End of the main content of Contact Us -->
  </main> <!-- End Main -->


</body>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

<!-- reload and back to the top -->
<script>
  window.onload = function () {
    window.scrollTo(0, 0);
  }
</script>


</body>

</html>