<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Promo & Packages| ACEMC - Baypointe</title>
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
                        <h1 class="display-5 fw-bolder text-white mb-lg-2">PROMO & PACKAGES</h1>
                        <!-- <p class="lead text-white-50 mb-0 mb-lg-3">QUICK CONTACT</p> -->
                    </div>
                </div>
            </div>
        </div> <!-- End of Page Title -->

        <!-- Main content of Contact Us -->
        <main id="main" class="main">
            <section class="py-5">
                <div class="container px-5">
                    <div class="md:max-w-lg mx-auto text-center mb-20">
                        <h2 class="mb-4 font-heading font-semibold text-gray-900 text-4xl mb-5">Hospital Promos</h2>
                        <p class="text-lg text-gray-500"></p>
                    </div>
                    <div class="row gx-5">
                        <?php
                        // Database connection
                        include 'config/db_con.php';

                        // Fetch approved and active promos that are not expired
                        $promoQuery = "SELECT * FROM promo_and_packages WHERE Status = 'APPROVED' AND Active = 1 AND Date >= CURDATE() ORDER BY Promo_and_PackagesID";
                        $result = $conn->query($promoQuery);
                        ?>

                        <div class="row">
                            <?php
                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <div class="col-lg-4 mb-5">
                                        <div class="card h-100 shadow border-0">
                                            <img class="card-img-top"
                                                src="assets/img/uploads/<?php echo $row['Image_Promo']; ?>"
                                                alt="<?php echo $row['Title_Promo']; ?>">
                                            <div class="card-body p-4">
                                                <a class="text-decoration-none link-dark stretched-link"
                                                    href="promo_and_packages_details.php?id=<?php echo $row['Promo_and_PackagesID']; ?>">
                                                    <div class="h5 card-title mb-3"><?php echo $row['Title_Promo']; ?></div>
                                                    <div class="small">
                                                        <div class="text-muted">Valid until:
                                                            <strong><?php echo date("F j, Y", strtotime($row['Date'])); ?></strong>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo "<p class='text-center'>No current promos found.</p>";
                            }

                            $conn->close();
                            ?>
                        </div>

                    </div>



                </div>
                </div>
            </section>

            <!-- FINISHED PROMO -->
            <section class="py-5">
                <div class="container px-5">
                    <div class="md:max-w-lg mx-auto mb-20">
                        <h2 class="mb-4 font-heading font-semibold text-gray-900 text-4xl mb-5">Finished Promo</h2>
                        <p class="text-lg text-gray-500"></p>
                    </div>
                    <div class="row gx-5" id="cardContainer">
                        <?php

                        include 'config/db_con.php';
                        // Fetch expired promos
                        $expiredPromoQuery = "SELECT * FROM promo_and_packages WHERE Date < CURDATE() AND Status = 'APPROVED' AND Active = 1";
                        $expiredResult = $conn->query($expiredPromoQuery);
                        ?>

                        <div class="row">
                            <?php
                            if ($expiredResult->num_rows > 0) {
                                // Output data of each row
                                while ($row = $expiredResult->fetch_assoc()) {
                                    ?>
                                    <div class="col-lg-4 mb-5">
                                        <div class="card h-100 shadow border-0">
                                            <img class="card-img-top"
                                                src="assets/img/uploads/<?php echo $row['Image_Promo']; ?>"
                                                alt="<?php echo $row['Title_Promo']; ?>">
                                            <div class="card-body p-4">
                                                <div class="h5 card-title mb-3"><?php echo $row['Title_Promo']; ?></div>
                                                <div class="small">
                                                    <div class="text-muted">Expired on
                                                        <strong><?php echo date("F j, Y", strtotime($row['Date'])); ?></strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo "<p class='text-center'>No expired promos found.</p>";
                            }

                            $conn->close();
                            ?>
                        </div>



                    </div>
                    <div class="text-center mt-4">
                        <a id="seeMoreBtn" class="btn">See More</a>
                    </div>
                </div>
            </section>
        </main> <!-- End of the main content -->
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var cardContainer = document.getElementById("cardContainer");
            var cards = cardContainer.querySelectorAll(".col-lg-4");
            var seeMoreBtn = document.getElementById("seeMoreBtn");
            var hidden = true;

            // Initially hide extra cards
            for (var i = 3; i < cards.length; i++) {
                cards[i].classList.add("d-none");
            }

            // Toggle visibility of extra cards
            seeMoreBtn.addEventListener("click", function () {
                hidden = !hidden;
                for (var i = 3; i < cards.length; i++) {
                    cards[i].classList.toggle("d-none");
                }
                seeMoreBtn.textContent = hidden ? "See More" : "See Less";
            });
        });

    </script>

    <!-- reload and back to the top -->
    <script>
        window.onload = function () {
            window.scrollTo(0, 0);
        }
    </script>
</body>

</html>