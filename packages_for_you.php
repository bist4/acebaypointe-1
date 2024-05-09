<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ace Medical Center Baypointe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logos/logo.png" rel="icon">
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

  <style>
    /* Default styles for the boxes */
    .box {
      background-color: #e0e0e0;
      margin: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: all 0.3s ease-in-out;
      align-items: center;
      justify-content: center;
      /* Center horizontally */
      padding: 20px;
      /* Adjust padding to fit content */
      width: calc(100% / 6 - 20px);
      /* Calculate width for 6 boxes per row with margin */
      box-sizing: border-box;
      /* Include padding and border in box's total width */

    }

    .box p {
      margin: 0;
      /* Reset default margin for paragraphs */
      font-size: 16px;
      /* Default font size */
    }

    .box:hover {
      background-color: #3fbbc0;
      transform: scale(1.02);
      color: #e0e0e0;
    }


    /* Responsive adjustments */
    @media (max-width: 991.98px) {
      .box {
        width: calc(100% / 3 - 20px);
        /* Calculate width for 3 boxes per row with margin */
      }

      /* Ensure the last row has three columns */
      .row.row-cols-1:last-child .box,
      .row.row-cols-2:last-child .box:nth-child(-n + 3) {
        width: calc(100% / 3 - 20px);
      }

      /* Decrease font size for smaller screens */
      .box p {
        font-size: 14px;
      }
    }

    @media (max-width: 767.98px) {
      .box {
        width: calc(100% / 2 - 20px);
        /* Calculate width for 2 boxes per row with margin */
      }

      /* Decrease font size for smaller screens */
      .box p {
        font-size: 12px;
      }
    }

    @media (max-width: 575.98px) {
      .box {
        width: calc(100% - 20px);
        /* Full width for 1 box per row with margin */
      }

      /* Decrease font size for smaller screens */
      .box p {
        font-size: 10px;
      }
    }

    /* Adjust carousel control buttons position */
    .carousel-control-prev,
    .carousel-control-next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      z-index: 1000;
      background-color: black;
      border: none;
      color: white;
      border-radius: 50%;
      width: 30px;
      /* Adjust the width */
      height: 30px;
      /* Adjust the height */
      font-size: 14px;
      /* Adjust the font size */
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
      background-color: pink;
      color: black;
    }
  </style>
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
            <h1 class="display-5 fw-bolder text-white mb-lg-2">PACKAGES FOR YOU</h1>
            <!-- <p class="lead text-white-50 mb-0 mb-lg-3">QUICK CONTACT</p> -->
          </div>
        </div>
      </div>
    </div> <!-- End of Page Title -->

    <!-- Main content of Packages For You -->
    <div class="container">
      <!-- Carousel controls -->
      <div class="carousel-inner">
        <!-- First slide -->
        <div class="md:max-w-lg mx-auto mb-20">
          <p class="font-heading font-semibold text-gray-900 text-4xl mt-5">At Allied Care Experts (ACE) Medical Center
            - Baypointe, we offer a wide range of Medical Package and programs addressing the various needs of our
            patients to help them achieve a healthier life. ACEBHMC provides a Pre-Employment Check-Up for those
            Companies who hires employee either on a permanent or
            contractual basis.
          </p>
          <p>
            Annual Physical Examination is also available for those companies who provide regular health maintenance
            benefit to their regular employees.
          </p>
          <p>
            For Inquiries on our packages and programs, please visit our <strong>Marketing Department at the ground
              floor of the
              hospital building</strong> or call us at <strong>(047) 250-6070 local 107</strong>.
          </p>
          </p>
        </div>
        <!-- The Rows -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-6 mb-5">
          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packagesbasic">
            <a>
              <p>BASIC EXECUTIVE PACKAGE </p> <!-- title -->
              <p style="font-size:10px">(FOR MALE OR FEMALE)</p> <!-- brucket -->
            </a>
          </div>

          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packages_family">
            <a>
              <p>FAMILY* HEALTH SCREENING</p> <!-- title -->
              <p><strong>PACKAGE 1</strong></p> <!-- package -->
            </a>
          </div>

          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packages_family">
            <a>
              <p>FAMILY* HEALTH SCREENING</p> <!-- title -->
              <p><strong>PACKAGE 2</strong></p> <!-- package -->
            </a>
          </div>

          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packages_screening">
            <a>
              <p>EXECUTIVE SCREENING</p> <!-- title -->
              <p><strong>PACKAGE 1</strong></p> <!-- package -->
              <p style="font-size:10px">(FOR MALE OR FEMALE)</p> <!-- brucket -->
            </a>
          </div>

          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packages_screening">
            <a>
              <p>EXECUTIVE SCREENING</p> <!-- title -->
              <p><strong>PACKAGE 2</strong></p> <!-- package -->
              <p style="font-size:10px">(FOR MALE OR FEMALE)</p> <!-- brucket -->
            </a>
          </div>

          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packages_screening">
            <a>
              <p>EXECUTIVE SCREENING</p> <!-- title -->
              <p><strong>PACKAGE 3</strong></p> <!-- package -->
              <p style="font-size:10px">(FOR MALE OR FEMALE)</p> <!-- brucket -->
            </a>
          </div>

          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packages_preventives">
            <a>
              <p>BELOW 40 PREVENTIVES</p> <!-- title -->
              <p style="font-size:10px">(FOR MALE OR FEMALE)</p> <!-- brucket -->
            </a>
          </div>

          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packages_male_sur">
            <a>
              <p>MALE SURVEILLANCE</p> <!-- title -->
              <p><strong>PACKAGE 1</strong></p> <!-- packages -->
              <p style="font-size:10px">(ABOVE 40)</p> <!-- brucket -->
            </a>
          </div>

          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packages_male_sur">
            <a>
              <p>MALE SURVEILLANCE</p> <!-- title -->
              <p><strong>PACKAGE 2</strong></p> <!-- packages -->
              <p style="font-size:10px">(ABOVE 40)</p> <!-- brucket -->
            </a>
          </div>

          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packages_female_sur">
            <a>
              <p>FEMALE SURVEILLANCE</p> <!-- title -->
              <p><strong>PACKAGE 1</strong></p> <!-- packages -->
              <p style="font-size:10px">(ABOVE 40)</p> <!-- brucket -->
            </a>
          </div>

          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packages_female_sur">
            <a>
              <p>FEMALE SURVEILLANCE</p> <!-- title -->
              <p><strong>PACKAGE 2</strong></p> <!-- packages -->
              <p style="font-size:10px">(ABOVE 40)</p> <!-- brucket -->
            </a>
          </div>

          <div class="col d-flex justify-content-center align-items-center box" data-bs-toggle="modal"
            data-bs-target="#modal_packages_female_sur">
            <a>
              <p>FEMALE SURVEILLANCE</p> <!-- title -->
              <p><strong>PACKAGE 3</strong></p> <!-- packages -->
              <p style="font-size:10px">(ABOVE 40)</p> <!-- brucket -->
            </a>
          </div>

        </div> <!-- End of the Row -->
      </div>
    </div>

    <!-- MODAL OF THE VIEW SCHEDULE -->
    <div class="modal fade gray-shadow" data-bs-backdrop="static" data-bs-keyboard="false" id="modal_packagesbasic"
      tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-l modal-dialog-centered">
        <div class="modal-content px-4 mx-4 my-5">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <h5>BASIC EXECUTIVE PACKAGE</h5>
              <h6>(PRE-EMPLOYMENT, SURVEILLANCE, EXIT)</h6>
            </div>
            <ul>
              <li>Complete History and Physical</li>
              <li>Examination with Visual Acuity Screening</li>
              
              <li>Complete Blood Count</li>
              <li>Urinalysis (Routine)</li>
              <li>Fecalysis (Routine Stool Exam)</li>
              <li>Chest X-ray</li>
              <li>Option of either ECG or Blood Typing</li>
              <li>Interpretation of Results</li>
            </ul>
            <ul>
              <li>Recommended for dependents, siblings, other immediate family members</li>
            </ul>
          </div>
        </div>
      </div>
    </div> <!-- End of the Modal -->

    <div class="modal fade gray-shadow" data-bs-backdrop="static" data-bs-keyboard="false" id="modal_packages_family"
      tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-l modal-dialog-centered">
        <div class="modal-content px-4 mx-4 my-5">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <h5>FAMILY* HEALTH SCREENING PACKAGE </h5>
              <h6>(PRE-EMPLOYMENT, SURVEILLANCE, EXIT)</h6>
            </div>
            <p>Complete History and Physical</p>
            <p>Examination with Visual Acuity Screening</p>
            <p>Complete Blood Count</p>
            <p>Urinalysis (Routine)</p>
            <p>Fecalysis (Routine Stool Exam)</p>
            <p>Chest X-ray</p>
            <p>Option of either ECG or Blood Typing</p>
            <p>Interpretation of Results</p>
            <ul>
              <li>Recommended for dependents, siblings, other immediate family members</li>
            </ul>
          </div>
        </div>
      </div>
    </div> <!-- End of the Modal -->

    <div class="modal fade gray-shadow" data-bs-backdrop="static" data-bs-keyboard="false" id="modal_packages_screening"
      tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-l modal-dialog-centered">
        <div class="modal-content px-4 mx-4 my-5">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <h5>EXECUTIVE SCREENING PACKAGE</h5>
              <h6>(FOR MALE OR FEMALE)</h6>
            </div>
            <p><strong>Doctor's Consultation:</strong></p>
            <ul>
              <li>Complete History and Physical</li>
              <li>Examination with Visual Acuity Screening</li>
              <li>Interpretation of Results</li>
            </ul>
            <p><strong>Laboratory Tests:</strong></p>
            <ul>
              <li>Complete History and Physical</li>
              <li>Urinalysis (Routine)</li>
              <li>Fecalysis (Routine Stool Exam)</li>
              <li>Total Cholesterol</li>
              <li>Fasting Blood Sugar (FBS)</li>
              <li>BUN</li>
              <li>Creatinine</li>
              <li>Uric Acid</li>
            </ul>

            <p><strong>Diagnostic Procedures:</strong></p>
            <ul>
              <li>Chest X-ray</li>
              <li>ECG</li>
            </ul>

          </div>
        </div>
      </div>
    </div> <!-- End of the Modal -->

    <div class="modal fade gray-shadow" data-bs-backdrop="static" data-bs-keyboard="false"
      id="modal_packages_preventives" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-l modal-dialog-centered">
        <div class="modal-content px-4 mx-4 my-5">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <h5>BELOW 40 PREVENTIVES</h5>
              <h6>(FOR MALE OR FEMALE)</h6>
            </div>
            <p><strong>Doctor's Consultation:</strong></p>
            <ul>
              <li>Complete History and Physical</li>
              <li>Interpretation of Results</li>
              <li>Initial Management</li>
            </ul>
            <p><strong>Laboratory Tests:</strong></p>
            <ul>
              <li>Complete Blood Count</li>
              <li>Urinalysis (Routine)</li>
              <li>Fecalysis (Routine Stool Exam)</li>
              <li>Complete Lipid Profile</li>
              <li>Liver Enzyme (ALT)</li>
              <li>BUN</li>
              <li>Creatinine</li>
              <li>Uric Acid</li>
              <li>HBsAg</li>
              <li>TSH</li>
            </ul>

            <p><strong>Diagnostic Procedures:</strong></p>
            <ul>
              <li>Chest X-ray</li>
              <li>Whole Abdominal Ultrasound</li>
              <li>ECG</li>
              <li>2D Echo with Doppler</li>
              <li>Treadmill Stress Test</li>
            </ul>

          </div>
        </div>
      </div>
    </div> <!-- End of the Modal -->


    <div class="modal fade gray-shadow" data-bs-backdrop="static" data-bs-keyboard="false" id="modal_packages_male_sur"
      tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-l modal-dialog-centered">
        <div class="modal-content px-4 mx-4 my-5">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <h5>MALE SURVEILLANCE PACKAGE</h5>
              <h6>(ABOVE 40)</h6>
            </div>
            <p><strong>Doctor's Consultation:</strong></p>
            <ul>
              <li>Complete History and Physical</li>
              <li>Examination</li>
              <li>Interpretation of Results</li>
              <li>Initial Management</li>
            </ul>
            <p><strong>Laboratory Tests:</strong></p>
            <ul>
              <li>Complete Blood Count</li>
              <li>Urinalysis (Routine)</li>
              <li>Fecalysis (Routine Stool Exam)</li>
              <li>Fasting Blood Sugar (FBS)</li>
              <li>Complete Lipid Profile</li>
              <li>Liver Enzyme (ALT)</li>
              <li>BUN</li>
              <li>Creatinine</li>
              <li>Uric Acid</li>
              <li>HBsAg</li>
              <li>TSH</li>
              <li>Prostate Specific Antigen (PSA)</li>
            </ul>

            <p><strong>Diagnostic Procedures:</strong></p>
            <ul>
              <li>Chest X-ray</li>
              <li>Whole Abdominal Ultrasound</li>
              <li>ECG</li>
              <li>2D Echo with Doppler</li>
              <li>Treadmill Stress Test</li>
            </ul>

          </div>
        </div>
      </div>
    </div> <!-- End of the Modal -->

    <div class="modal fade gray-shadow" data-bs-backdrop="static" data-bs-keyboard="false"
      id="modal_packages_female_sur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-l modal-dialog-centered">
        <div class="modal-content px-4 mx-4 my-5">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <h5>FEMALE SURVEILLANCE PACKAGE</h5>
              <h6>(ABOVE 40)</h6>
            </div>
            <p><strong>Doctor's Consultation:</strong></p>
            <ul>
              <li>Complete History and Physical</li>
              <li>Examination</li>
              <li>Interpretation of Results</li>
              <li>Initial Management</li>
            </ul>
            <p><strong>Laboratory Tests:</strong></p>
            <ul>
              <li>Complete Blood Count</li>
              <li>Urinalysis (Routine)</li>
              <li>Fecalysis (Routine Stool Exam)</li>
              <li>Fasting Blood Sugar (FBS)</li>
              <li>Complete Lipid Profile</li>
              <li>Liver Enzyme (ALT)</li>
              <li>BUN</li>
              <li>Creatinine</li>
              <li>Uric Acid</li>
              <li>HBsAg</li>
              <li>TSH</li>
              <li>Prostate Specific Antigen (PSA)</li>
            </ul>

            <p><strong>Diagnostic Procedures:</strong></p>
            <ul>
              <li>Chest X-ray</li>
              <li>Whole Abdominal Ultrasound</li>
              <li>ECG</li>
              <li>2D Echo with Doppler</li>
              <li>Treadmill Stress Test</li>
            </ul>

          </div>
        </div>
      </div>
    </div> <!-- End of the Modal -->

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


</body>

</html>