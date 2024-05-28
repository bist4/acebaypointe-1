<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Doctors | ACEMC - Baypointe</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logos/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="assets/fonts/fonts.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <style>
        .search-bar {
            margin-top: 50px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-bar .form-select,
        .search-bar .form-control {
            height: 45px;
            border-radius: 5px;
        }

        .search-bar .btn-search {
            height: 45px;
            border-radius: 5px;
            --bs-btn-color: #3fbbc0;
            --bs-btn-border-color: #3fbbc0;
            --bs-btn-hover-color: #ffffff;
            --bs-btn-hover-bg: #3fbbc0;
            --bs-btn-hover-border-color: #D1EFF4;
            --bs-btn-focus-shadow-rgb: 13, 110, 253;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #D9D9D9;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-bg: transparent;
            background-color: var(--bs-btn-color);
            border-color: var(--bs-btn-border-color);
        }

        .search-bar .btn-search:hover {
            background-color: var(--bs-btn-hover-bg);
            color: var(--bs-btn-hover-color);
            border-color: var(--bs-btn-hover-border-color);
        }
    </style>

    </style>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

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
    <main>
        <!-- Title -->
        <div class="bg-dark py-5 my-5">
            <div class="py-5">
            </div>
            <div class="container">
                <div class="col-lg-6">
                    <div class=" display-5 fw-bolder text-center text-xl-start my-5">
                        <h1 class="display-5 fw-bolder text-white mb-lg-2">DOCTORS</h1>
                        <p class="lead text-white-50 mb-0 mb-lg-3">MEET OUR DOCTORS</p>
                    </div>
                </div>
            </div>
        </div> <!-- End of Page Title -->

        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title aos-init aos-animate mt-0" data-aos="fade-up">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="search-bar">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <select class="form-select" id="department" required>
                                                <option selected disabled value="">Choose Department...</option>
                                                <option value="cardiology">Cardiology</option>
                                                <option value="neurology">Neurology</option>
                                                <option value="orthopedics">Orthopedics</option>
                                                <option value="pediatrics">Pediatrics</option>
                                                <option value="general">General Medicine</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="doctorName"
                                                placeholder="Enter Doctor's Name" required>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="doctor-btn btn-search w-100">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Doctor section-->
                <div class="bg-light">
                    <div class="container px-5 my-5">
                        <div class="text-center "></div>
                        <div class="row gx-5 justify-content-center">
                            <!-- Doctor-->
                            <div class="col-lg-5 col-xl-4 mb-lg-5">
                                <div class="card mb-5 mb-xl-0">
                                    <div class="card-body p-5 gray-shadow">
                                        <img src="https://img.freepik.com/premium-vector/smiling-male-doctor-with-stethoscope-vector-illustration-cartoon-style_374761-3140.jpg"
                                            alt="" class="img-fluid mb-4">
                                        <div class="mb-3 text-center">
                                            <h5>Dr. FIRSTNAME LASTNAME</h5>
                                            <div class="member-info text-center mb-2">
                                                <span>Specialization</span>
                                            </div>
                                        </div>
                                        <div class="d-grid"><a class="btn doctors-btn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">View Schedule</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 mb-lg-5">
                                <div class="card mb-5 mb-xl-0">
                                    <div class="card-body p-5 gray-shadow">
                                        <img src="https://img.freepik.com/premium-vector/smiling-male-doctor-with-stethoscope-vector-illustration-cartoon-style_374761-3140.jpg"
                                            alt="" class="img-fluid mb-4">
                                        <div class="mb-3 text-center">
                                            <h5>Dr. FIRSTNAME LASTNAME</h5>
                                            <div class="member-info text-center mb-2">
                                                <span>Specialization</span>
                                            </div>
                                        </div>
                                        <div class="d-grid"><a class="btn doctors-btn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">View Schedule</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 mb-lg-5">
                                <div class="card mb-5 mb-xl-0">
                                    <div class="card-body p-5 gray-shadow">
                                        <img src="https://img.freepik.com/premium-vector/smiling-male-doctor-with-stethoscope-vector-illustration-cartoon-style_374761-3140.jpg"
                                            alt="" class="img-fluid mb-4">
                                        <div class="mb-3 text-center">
                                            <h5>Dr. FIRSTNAME LASTNAME</h5>
                                            <div class="member-info text-center mb-2">
                                                <span>Specialization</span>
                                            </div>
                                        </div>
                                        <div class="d-grid"><a class="btn doctors-btn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">View Schedule</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 mb-lg-5">
                                <div class="card mb-5 mb-xl-0">
                                    <div class="card-body p-5 gray-shadow">
                                        <img src="https://img.freepik.com/premium-vector/smiling-male-doctor-with-stethoscope-vector-illustration-cartoon-style_374761-3140.jpg"
                                            alt="" class="img-fluid mb-4">
                                        <div class="mb-3 text-center">
                                            <h5>Dr. FIRSTNAME LASTNAME</h5>
                                            <div class="member-info text-center mb-2">
                                                <span>Specialization</span>
                                            </div>
                                        </div>
                                        <div class="d-grid"><a class="btn doctors-btn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">View Schedule</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 mb-lg-5">
                                <div class="card mb-5 mb-xl-0">
                                    <div class="card-body p-5 gray-shadow">
                                        <img src="https://img.freepik.com/premium-vector/smiling-male-doctor-with-stethoscope-vector-illustration-cartoon-style_374761-3140.jpg"
                                            alt="" class="img-fluid mb-4">
                                        <div class="mb-3 text-center">
                                            <h5>Dr. FIRSTNAME LASTNAME</h5>
                                            <div class="member-info text-center mb-2">
                                                <span>Specialization</span>
                                            </div>
                                        </div>
                                        <div class="d-grid"><a class="btn doctors-btn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">View Schedule</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 mb-lg-5">
                                <div class="card mb-5 mb-xl-0">
                                    <div class="card-body p-5 gray-shadow">
                                        <img src="https://img.freepik.com/premium-vector/smiling-male-doctor-with-stethoscope-vector-illustration-cartoon-style_374761-3140.jpg"
                                            alt="" class="img-fluid mb-4">
                                        <div class="mb-3 text-center">
                                            <h5>Dr. FIRSTNAME LASTNAME</h5>
                                            <div class="member-info text-center mb-2">
                                                <span>Specialization</span>
                                            </div>
                                        </div>
                                        <div class="d-grid"><a class="btn doctors-btn" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">View Schedule</a></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Pagination -->
                        <div class="row justify-content-center justify-content-md-between mt-4">
                            <div class="col-12">
                                <hr class="my-4" color="">
                            </div>
                            <div class="col-12 col-md-auto d-flex justify-content-center justify-content-md-start">
                                <!-- Added ID to the pagination nav -->
                                <nav class="pagination" id="paginationNav">
                                    <span href="inactive" class="current">1</span>
                                    <a href="#" class="inactive">2</a>
                                    <a href="#" class="inactive">3</a> <!-- page where it was chosen -->
                                    <a href="#">4</a>
                                    <a href="#" class="inactive">5</a>
                                </nav>
                            </div>
                            <div class="page col-md-auto d-flex justify-content-center text-md-end mt-3 mt-md-0">
                                <span class="page-number">Page 1 of 5</span>
                            </div>
                        </div>
                        <!-- End pagination -->
                    </div>


                    <!-- MODAL OF THE VIEW SCHEDULE -->
                    <div class="modal fade gray-shadow" data-bs-backdrop="static" data-bs-keyboard="false"
                        id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content px-4 mx-4 my-5">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row gx-5 justify-content-center align-items-center">
                                        <div class="col-md-6 zoom-in">
                                            <img src="https://img.freepik.com/premium-vector/smiling-male-doctor-with-stethoscope-vector-illustration-cartoon-style_374761-3140.jpg"
                                                class="img-fluid rounded" alt="Doctor Image">
                                        </div> <!-- End of the image -->
                                        <div class="col-md-6">
                                            <div class="appointment-item-two-right">
                                                <h2 class="doctor-name display-6 text-center text-md-start">Dr. Juan
                                                    Dela
                                                    Cruz</h2>
                                                <div class="appointment-item-content">
                                                    <p class="fs-6"><strong>Department:</strong> <span
                                                            class="department">Cardiology</span></p>
                                                    <p class="fs-6"><strong>Status:</strong> <span
                                                            class="status">Active</span></p>
                                                    <h6 class="fs-6"><strong>Clinic hours</strong></h6>
                                                    <div class="doctor-details-work">
                                                        <ul class="list-unstyled" style="padding-left: 0;">
                                                            <li>Monday <span>10:00AM - 01:00PM</span></li>
                                                            <li>Tuesday <span>10:00AM - 01:00PM</span></li>
                                                            <li>Wednesday <span>10:00AM - 01:00PM</span></li>
                                                            <li>Thursday <span>10:00AM - 01:00PM</span></li>
                                                            <li>Friday <span>10:00AM - 01:00PM</span></li>
                                                            <li>Saturday <span>10:00AM - 01:00PM</span></li>
                                                            <li>Sunday<span>10:00AM - 01:00PM</span></li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <p><strong>Note: </strong>For <strong>On Call</strong> and
                                                            <strong>By
                                                                Appointment</strong> Status, <br>
                                                            <strong>0939-915-7633 </strong>Local
                                                            200 for Smart <br> <strong>0917-545-1566</strong> Local 200
                                                            for
                                                            Globe
                                                        </p>
                                                    </div>
                                                </div> <!-- End of Appointment item content -->
                                            </div> <!-- End of appointment item two right -->
                                        </div> <!-- End of the right column -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End of the Modal -->
    </main>

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