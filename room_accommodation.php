<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Room Accommodation | ACEMC - Baypointe</title>
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
            background-color: #d3d3d3;
            transform: scale(1.02);
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
            /* position: absolute; */
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
        }

        #myCarousel {
            background-color: blue;
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
                        <h1 class="display-5 fw-bolder text-white mb-lg-2">ROOM ACCOMMODATION</h1>
                        <!-- <p class="lead text-white-50 mb-0 mb-lg-3">QUICK CONTACT</p> -->
                    </div>
                </div>
            </div>
        </div> <!-- End of Page Title -->

        <!-- Main content of Packages For You -->

        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <!-- First Carousel -->
                    <div id="myCarousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- First slide -->
                            <div class="carousel-item active">
                                <img src="https://dummyimage.com/300x200/343a40/6c757d" alt="">
                            </div>
                            <!-- Second slide -->
                            <div class="carousel-item">
                                <img src="https://dummyimage.com/300x200/343a40/6c757d" alt="">
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- First Paragraph -->
                    <div class="md:max-w-lg mb-0">
                        <h2 class="font-heading font-semibold text-gray-900 text-2xl" style="background-color: #3fbbc0; color:white; padding: 10px;">Ward</h2>
                        <h5 >Rate: ₱1,300 - ₱1,950</h5>
                        <img src="https://bingtravelms.azureedge.net/latest/ab03dc0d5f2c8103a2989b891b81b8e2.svg"
                            alt=""><span><strong> 19 sq. m</strong></span>
                        <p class="mt-2 mb-0"><strong>Admission Kit Inclusions: </strong>1pc. Admission bag with logo, 1pc. Calibrated cup 210ml, 1pc.
                            Medicine cup 50ml, 1 set of dental kit (toothpaste and toothbrush), 1pc.Face towel, 1 bottle
                            of 60ml isopropyl alcohol 70%, 1 tissue roll, 1pc.Soap, 1 small tube body lotion, 1 small
                            tube bath gel, 1 small tube shampoo & conditioner.</p>
                        <i><strong>Note: </strong>Any additional bath towels, pillows, blankets, toiletries etc. will have additional charge.</i>
                    </div>
                    <div class="d-grid mt-3"><a data-bs-toggle="modal" data-bs-target="#modal">View Schedule</a></div>
                </div>
            </div>

            <!-- Second Carousel -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div id="myCarousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://dummyimage.com/300x200/343a40/6c757d" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="https://dummyimage.com/300x200/343a40/6c757d" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- First Paragraph -->
                    <div class="md:max-w-lg mb-0">
                        <h2 class="font-heading font-semibold text-gray-900 text-2xl">Ward</h2>
                        <h5 style="background-color: #3fbbc0; color:white; padding: 10px;">Rate: ₱1,300 - ₱1,950</h5>
                        <img src="https://bingtravelms.azureedge.net/latest/ab03dc0d5f2c8103a2989b891b81b8e2.svg"
                            alt=""><span><strong> 19 sq. m</strong></span>
                        <p class="mt-2 mb-0">Admission Kit Inclusions: 1pc. Admission bag with logo, 1pc. Calibrated cup 210ml, 1pc.
                            Medicine cup 50ml, 1 set of dental kit (toothpaste and toothbrush), 1pc.Face towel, 1 bottle
                            of 60ml isopropyl alcohol 70%, 1 tissue roll, 1pc.Soap, 1 small tube body lotion, 1 small
                            tube bath gel, 1 small tube shampoo & conditioner.</p>
                        <i><strong>Note: </strong>Any additional bath towels, pillows, blankets, toiletries etc. will have additional charge.</i>
                    </div>
                    <div class="d-grid mt-3"><a data-bs-toggle="modal" data-bs-target="#modal">View Schedule</a></div>
                </div>
            </div>
          
            <!-- Second Carousel -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div id="myCarousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://dummyimage.com/300x200/343a40/6c757d" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="https://dummyimage.com/300x200/343a40/6c757d" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- First Paragraph -->
                    <div class="md:max-w-lg mb-0">
                        <h2 class="font-heading font-semibold text-gray-900 text-2xl">Ward</h2>
                        <h5 style="background-color: #3fbbc0; color:white; padding: 10px;">Rate: ₱1,300 - ₱1,950</h5>
                        <img src="https://bingtravelms.azureedge.net/latest/ab03dc0d5f2c8103a2989b891b81b8e2.svg"
                            alt=""><span><strong> 19 sq. m</strong></span>
                        <p class="mt-2 mb-0">Admission Kit Inclusions: 1pc. Admission bag with logo, 1pc. Calibrated cup 210ml, 1pc.
                            Medicine cup 50ml, 1 set of dental kit (toothpaste and toothbrush), 1pc.Face towel, 1 bottle
                            of 60ml isopropyl alcohol 70%, 1 tissue roll, 1pc.Soap, 1 small tube body lotion, 1 small
                            tube bath gel, 1 small tube shampoo & conditioner.</p>
                        <i><strong>Note: </strong>Any additional bath towels, pillows, blankets, toiletries etc. will have additional charge.</i>
                    </div>
                    <div class="d-grid mt-3"><a data-bs-toggle="modal" data-bs-target="#modal">View Schedule</a></div>
                </div>
            </div>

            <!-- Second Carousel -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div id="myCarousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://dummyimage.com/300x200/343a40/6c757d" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="https://dummyimage.com/300x200/343a40/6c757d" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- First Paragraph -->
                    <div class="md:max-w-lg mb-0">
                        <h2 class="font-heading font-semibold text-gray-900 text-2xl">Ward</h2>
                        <h5 style="background-color: #3fbbc0; color:white; padding: 10px;">Rate: ₱1,300 - ₱1,950</h5>
                        <img src="https://bingtravelms.azureedge.net/latest/ab03dc0d5f2c8103a2989b891b81b8e2.svg"
                            alt=""><span><strong> 19 sq. m</strong></span>
                        <p class="mt-2 mb-0">Admission Kit Inclusions: 1pc. Admission bag with logo, 1pc. Calibrated cup 210ml, 1pc.
                            Medicine cup 50ml, 1 set of dental kit (toothpaste and toothbrush), 1pc.Face towel, 1 bottle
                            of 60ml isopropyl alcohol 70%, 1 tissue roll, 1pc.Soap, 1 small tube body lotion, 1 small
                            tube bath gel, 1 small tube shampoo & conditioner.</p>
                        <i><strong>Note: </strong>Any additional bath towels, pillows, blankets, toiletries etc. will have additional charge.</i>
                    </div>
                    <div class="d-grid mt-3"><a data-bs-toggle="modal" data-bs-target="#modal">View Schedule</a></div>
                </div>
            </div>

        </div>


        <!-- MODAL -->
        <div class="modal fade gray-shadow" data-bs-backdrop="static" data-bs-keyboard="false" id="modal" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content px-4 mx-4 my-5">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div id="myCarousel2.1" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <!-- First slide -->
                                        <div class="carousel-item active">
                                            <img src="https://dummyimage.com/300x200/343a40/6c757d" alt="">
                                        </div>
                                        <!-- Second slide -->
                                        <div class="carousel-item">
                                            <img src="https://dummyimage.com/300x200/343a40/6c757d" alt="">
                                        </div>
                                    </div>
                                    <!-- Carousel controls -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2.1"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2.1"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <p class="mb-0"><strong>Amenities:</strong></p>
                                </div>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Sed do eiusmod tempor</li>
                                    <li>Incididunt ut labore et dolore magna aliqua</li>
                                    <li>Ut enim ad minim veniam</li>
                                    <li>Duis aute irure dolor in reprehenderit in voluptate velit</li>
                                    <li>Option of either ECG or Blood Typing</li>
                                    <li>sunt in culpa qui officia deserunt mollit anim id est laborum
                                        <ul>
                                            <li>Recommended for dependents, siblings, other immediate family members
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
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