<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Department & Services | ACEMC - Baypointe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logos/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <style>
    .carousel-inner {
      display: flex;
      flex-wrap: nowrap;
    }

    .carousel-item {
      width: 300px;
      text-align: center;
    }

    .department-box {
      width: 100%;
      height: 200px;
      background-color: #f0f0f0;
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .box-in-department {
      width: 200px;
      height: 100px;
      background-color: #e9e9e9;
      border-radius: 5px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    .testimonials .testimonials-carousel,
    .testimonials .testimonials-slider {
      overflow: hidden;
    }

    .testimonials .testimonial-item {
      box-sizing: content-box;
      min-height: 100px;
      margin-bottom: 0;
      text-align: center;
    }

    .testimonials .testimonial-item .testimonial-img {
      width: 90px;
      border-radius: 50%;
      margin: -40px 0 0 40px;
      position: relative;
      z-index: 2;
      border: 6px solid #fff;
    }

    .testimonials .testimonial-item h3 {
      font-size: 18px;
      font-weight: bold;
      color: #111;
    }

    .testimonials .testimonial-item h4 {
      font-size: 14px;
      color: #999;
    }

    .testimonials .testimonial-item .quote-icon-left,
    .testimonials .testimonial-item .quote-icon-right {
      color: #b2e4e6;
      font-size: 26px;
    }

    .testimonials .testimonial-item .quote-icon-left {
      display: inline-block;
      left: -5px;
      position: relative;
    }

    .testimonials .testimonial-item .quote-icon-right {
      display: inline-block;
      right: -5px;
      position: relative;
      top: 10px;
    }

    .testimonials .testimonial-item p {
      font-style: italic;
      margin: 0 15px 0 15px;
      padding: 20px 20px 60px 20px;
      background: #f0fafa;
      position: relative;
      border-radius: 6px;
      position: relative;
      z-index: 1;
    }

    .testimonials .swiper-pagination {
      margin-top: 0;
      position: relative;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: #fff;
      opacity: 1;
      border: 1px solid #3fbbc0;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet-active {
      background-color: #3fbbc0;
    }

    .carousel-inner {
      display: flex;
      flex-wrap: nowrap;
    }

    .carousel-item {
      width: 300px;
      text-align: center;
    }

    .department-box {
      width: 100%;
      height: 200px;
      background-color: #f0f0f0;
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .box-in-department {
      width: 200px;
      height: 100px;
      background-color: #e9e9e9;
      border-radius: 5px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    /*--------------------------------------------------------------
# Why Us Section
--------------------------------------------------------------*/
    .why-us {
      --background-color: color-mix(in srgb, var(--default-color), transparent 94%);
    }

    .why-us .why-box {
      color: var(--contrast-color);
      background: var(--accent-color);

    }

    .why-us .why-box h3 {
      color: var(--contrast-color);
      font-family: var(--default-font);
      font-weight: 700;
      font-size: 34px;
    }

    .why-us .why-box p {
      margin-bottom: 30px;
    }

    .why-us .why-box .more-btn {
      display: inline-block;
      background: color-mix(in srgb, var(--contrast-color), transparent 85%);
      /* padding: 8px 40px 10px 40px; */
      color: var(--contrast-color);
      transition: all ease-in-out 0.4s;
      border-radius: 50px;
    }

    .why-us .why-box .more-btn i {
      font-size: 14px;
    }

    .why-us .why-box .more-btn:hover {
      color: var(--accent-color);
      background: var(--contrast-color);
    }

    .why-us .icon-box {
      background-color: var(--contrast-color);
      text-align: center;
      /* padding: 40px 30px; */
      width: 100%;
      height: 100%;
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    }

    .why-us .icon-box i {
      color: var(--accent-color);
      font-size: 32px;
      margin-bottom: 30px;
      background: color-mix(in srgb, var(--accent-color), transparent 95%);
      border-radius: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 72px;
      height: 72px;
      transition: 0.3s;
    }

    .why-us .icon-box h4 {
      font-size: 20px;
      font-weight: 500;
      margin: 0 0 30px 0;
      font-family: var(--default-font);
    }

    .why-us .icon-box p {
      font-size: 15px;
      color: color-mix(in srgb, var(--default-color), transparent 30%);
    }

    .why-us .icon-box:hover i {
      color: var(--contrast-color);
      background: var(--accent-color);
    }


    /*--------------------------------------------------------------
# Featured Services Section
--------------------------------------------------------------*/
    .featured-services .service-item {
      /* box-shadow: 0px 0 25px 0 color-mix(in srgb, var(--default-color), transparent 90%); */
      padding: 50px 30px;
      transition: all 0.3s ease-in-out;
      height: 100%;
      position: relative;
      z-index: 1;
    }

    .featured-services .service-item:before {
      content: "";
      position: absolute;
      background: var(--accent-color);
      inset: 100% 0 0 0;
      transition: all 0.3s;
      z-index: -1;
    }

    .featured-services .service-item .icon {
      margin-bottom: 10px;
    }

    .featured-services .service-item .icon i {
      color: var(--accent-color);
      font-size: 36px;
      transition: ease-in-out 0.3s;
    }

    .featured-services .service-item h4 {
      font-weight: 700;
      margin-bottom: 15px;
      font-size: 20px;
    }

    .featured-services .service-item h4 a {
      color: var(--heading-color);
      transition: ease-in-out 0.3s;
    }

    .featured-services .service-item p {
      line-height: 24px;
      font-size: 14px;
      margin-bottom: 0;
      transition: ease-in-out 0.3s;
    }

    .featured-services .service-item:hover h4 a,
    .featured-services .service-item:hover .icon i,
    .featured-services .service-item:hover p {
      color: white;
    }

    .featured-services .service-item:hover:before {
      background: #3fbbc0;
      inset: 0;
      border-radius: 0px;
    }
  </style>
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
            <h1 class="display-5 fw-bolder text-white mb-lg-2">DEPARTMENT & SERVICES</h1>
            <!-- <p class="lead text-white-50 mb-0 mb-lg-3">QUICK CONTACT</p> -->
          </div>
        </div>
      </div>
    </div> <!-- End of Page Title -->
    <!-- Main content of Department & Services -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Services</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="services_details.php">Heart Station</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
              excepturi sint
              occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-eye"></i></div>
            <h4 class="title"><a href="services_details.php">Eye Center</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo
              consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-lungs"></i></div>
            <h4 class="title"><a href="services_details.php">Hemodialysis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
              dolore eu
              fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fa-solid fa-flask"></i></div>
            <h4 class="title"><a href="services_details.php">Laboratory</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
              officia deserunt
              mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fa-solid fa-prescription"></i></div>
            <h4 class="title"><a href="services_details.php">Pharmacy</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
              blanditiis praesentium
              voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fa-solid fa-x-ray"></i></div>
            <h4 class="title"><a href="services_details.php">Radiology</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
              tempore, cum
              soluta nobis est eligendi</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fa-solid fa-lungs-virus"></i></div>
            <h4 class="title"><a href="services_details.php">Pulmonary</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
              officia deserunt
              mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fa-solid fa-truck-medical"></i></div>
            <h4 class="title"><a href="services_details.php">Emergency</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
              blanditiis praesentium
              voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fa-solid fa-ear-listen"></i></div>
            <h4 class="title"><a href="services_details.php">Hearing</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
              tempore, cum
              soluta nobis est eligendi</p>
          </div>
        </div>


      </div>
    </section><!-- End Services Section -->

    <!-- Department -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="section-title">
          <h2>The Departments</h2>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-activity icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-calendar4-week icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-broadcast icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-activity icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-calendar4-week icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-broadcast icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-activity icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-calendar4-week icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-broadcast icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-calendar4-week icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-broadcast icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <!-- <div class="icon"><i class="bi bi-broadcast icon"></i></div> -->
              <h4><a href="department_details.php" class="stretched-link">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>
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

  <script> //For the dropdown
    // JavaScript code to toggle the active class on click
    document.addEventListener('DOMContentLoaded', function () {
      const faqItems = document.querySelectorAll('.faq-item');

      faqItems.forEach(item => {
        const header = item.querySelector('h3');
        header.addEventListener('click', () => {
          // Toggle the active class on the clicked faq-item
          item.classList.toggle('faq-active');
        });
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

  <!-- reload and back to the top -->
  <script>
    window.onload = function () {
      window.scrollTo(0, 0);
    }
  </script>
</body>

</html>