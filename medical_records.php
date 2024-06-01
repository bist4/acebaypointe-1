<?php
include ("config/db_con.php"); //Connection to database
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Medical Records | ACEMC - Baypointe</title>
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
                        <h1 class="display-5 fw-bolder text-white mb-lg-2">MEDICAL RECORDS</h1>
                        <!-- <p class="lead text-white-50 mb-0 mb-lg-3">QUICK CONTACT</p> -->
                    </div>
                </div>
            </div>
        </div> <!-- End of Page Title -->

        <!-- Main content of Medical Records -->
        <main id="main" class="main container">
            <main class="flex-shrink-0">
                <!-- Page Content-->
                <section class="py-5 mb-0">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-xl-8">
                                <h2 class="fw-bolder mb-3">BAYPOINTE IS NOW AN ACE MEDICAL CENTER</h2>
                                <p>When requesting for medical records, kindly see list below of requirements for
                                    claiming documents:</p>
                                <h4 class="fw-bolder mb-3">MEDICAL DOCUMENTS</h4>
                                <div class="accordion mb-5 mb-xl-0" id="accordionExample2">
                                    <?php
                                    $medical = mysqli_query($conn, "SELECT * FROM Medical_records WHERE Active = 1");

                                    if (mysqli_num_rows($medical) > 0) {
                                        $counter = 1;
                                        while ($row = mysqli_fetch_assoc($medical)) {
                                            $uniqueId = "collapseMedical" . $counter;
                                            ?>
                                            <div class="accordion-item">
                                                <h3 class="accordion-header" id="heading<?php echo $counter; ?>">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#<?php echo $uniqueId; ?>"
                                                        aria-expanded="false" aria-controls="<?php echo $uniqueId; ?>">
                                                        <?php echo strtoupper($row['Medical_Name']); ?>
                                                    </button>
                                                </h3>
                                                <div class="accordion-collapse collapse" id="<?php echo $uniqueId; ?>"
                                                    aria-labelledby="heading<?php echo $counter; ?>"
                                                    data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <p class="mb-0"><strong>IF CLAIMED BY THE PATIENT</strong></p>
                                                                <ul>
                                                                    <?php
                                                                    $patientItems = explode("\n", $row['Medical_Patient']);
                                                                    foreach ($patientItems as $item) {
                                                                        echo '<li>' . htmlspecialchars(trim($item)) . '</li>';
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="mb-0"><strong>IF CLAIMED BY THE
                                                                        REPRESENTATIVE</strong></p>
                                                                <ul>
                                                                    <?php
                                                                    $representativeItems = explode("\n", $row['Medical_Representative']);
                                                                    foreach ($representativeItems as $item) {
                                                                        echo '<li>' . htmlspecialchars(trim($item)) . '</li>';
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $counter++;
                                        }
                                    } else {
                                        ?>
                                        <div class="text-center">
                                            No medical records
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- Side widgets-->
                            <?php require ('assets/links/sidebar_contact.php') ?>
                        </div>
                    </div>
                </section>
            </main>


        </main> <!-- End of the main content of Medical Records -->
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