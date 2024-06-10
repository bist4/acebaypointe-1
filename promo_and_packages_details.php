<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Promo & Packages Details | ACEMC - Baypointe</title>
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
                        <p class="lead text-white-50 mb-0 mb-lg-3">Details</p>
                    </div>
                </div>
            </div>
        </div> <!-- End of Page Title -->

        <!-- Main content of Contact Us -->
        <main id="main" class="main">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">Fermentum et sollicitudin ac orci</h1>
                            </header>
                            <!-- Preview image figure-->
                            <figure class="mb-4"><img class="img-fluid rounded"
                                    src="assets/img/announcement/packages.png" alt="..." /></figure>
                            <!-- Post content-->
                            <div class="mb-5">
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ultricies lacus sed turpis
                                    tincidunt id. Eget nullam non nisi est sit amet facilisis. Dui nunc mattis enim ut.
                                    Lectus proin nibh nisl condimentum. Vestibulum lectus mauris ultrices eros in.
                                    Semper quis lectus nulla at volutpat diam.</p>
                                <p class="mb-4">The universe is large and old, and the ingredients for life as we
                                    know it are everywhere, so there's no reason to think that Earth would be unique in
                                    that regard. Whether of not the life became intelligent is a different question, and
                                    we'll see if we find that.</p>
                                <p class="mb-4">Tristique et egestas quis ipsum suspendisse ultrices gravida dictum
                                    fusce. Vestibulum mattis ullamcorper velit sed ullamcorper. Mi proin sed libero
                                    enim. In iaculis nunc sed augue lacus viverra vitae. Eget est lorem ipsum dolor.
                                    Nibh tellus molestie nunc non blandit massa. Euismod nisi porta lorem mollis aliquam
                                    ut. Aliquet nibh praesent tristique magna sit amet purus gravida. Urna nec tincidunt
                                    praesent semper feugiat nibh sed. Sed enim ut sem viverra aliquet eget sit.
                                    Malesuada pellentesque elit eget gravida. Viverra nibh cras pulvinar mattis nunc
                                    sed. Ultricies integer quis auctor elit sed.</p>
                                <h2 class="fw-bolder mb-4 mt-5">I have odd cosmic thoughts every day</h2>
                                <p class="mb-4">Sit amet dictum sit amet justo donec enim. Proin libero nunc consequat
                                    interdum varius. Fermentum dui faucibus in ornare quam viverra orci sagittis. Eget
                                    est lorem ipsum dolor sit amet consectetur. Tellus in metus vulputate eu scelerisque
                                    felis imperdiet.</p>
                                <a href="contact_us.php" class="appointments-btn"
                                    style="display: block; text-align: center; background-color: #3fbbc0; padding: 10px; color: white; width: fit-content; margin: 0 auto;">Have
                                    a question? Contact Us</a>

                            </div>
                        </article>

                    </div>
                    <!-- Side widgets-->
                    <?php
                    include ("config/db_con.php"); // Connection to database
                    
                    $contact = mysqli_query($conn, "SELECT * FROM contact_information WHERE Active = 1");
                    $row = mysqli_fetch_assoc($contact)
                        ?>
                    <div class="col-lg-4 radiantthemes-contact-box rt412613828 element-one"
                        style="font-family: poppins;">
                        <figure class="mb-4"><img class="img-fluid rounded" src="assets/img/slide/slide-3.png"
                                alt="..." /></figure>
                        <h3 style="font-size: 18px;color: #000000;line-height: 24px; text-align: left"
                            class="vc_custom_heading font-weight-bold vc_custom_1546582444223">Quick Contact</h3>
                        <ul>
                            <li class="address no-bullet"><i class="fa fa-map-marker"></i><strong>Address</strong>
                                <?php echo '<a style="color: black;" href="https://www.google.com/maps/place/Allied+Care+Experts+(ACE)+Medical+Center+-+Baypointe/@14.8237799,120.2718323,19z/data=!4m14!1m7!3m6!1s0x3396713dc6158cd5:0xce084c90e0457df1!2sAllied+Care+Experts+(ACE)+Medical+Center+-+Baypointe!8m2!3d14.8238888!4d120.2721641!16s%2Fg%2F1w0h50z9!3m5!1s0x3396713dc6158cd5:0xce084c90e0457df1!8m2!3d14.8238888!4d120.2721641!16s%2Fg%2F1w0h50z9?authuser=2&entry=ttu">' . htmlspecialchars(trim($row['Address'])) . '</a><br>'; ?>
                            </li>
                            <li class="email"><i class="fa fa-envelope"></i><strong>Email</strong>
                                <?php echo '<a style="color: black;" href="https://mail.google.com/mail/?view=cm&fs=1&to=baypointehospitalmedicalcenter@yahoo.com">' . htmlspecialchars(trim($row['Email'])) . '</a><br>'; ?>
                            </li>
                            <li class="phone"><i class="fa fa-phone"></i><strong>Phone</strong>
                                <?php echo '<a style="color: black;" href="tel:' . htmlspecialchars(trim($phone)) . '">' . htmlspecialchars(trim($phone)) . '</a><br>'; ?>
                            </li>
                            <li class="mobile" style="list-style-type: none; margin:0;"><i class="fa fa-mobile"></i><strong>Mobile</strong>
                                <?php echo '<a style="color: black;" href="tel:' . htmlspecialchars(trim($mobile)) . '">' . htmlspecialchars(trim($mobile)) . '</a><br>'; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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

    <!-- reload and back to the top -->
    <script>
        window.onload = function () {
            window.scrollTo(0, 0);
        }
    </script>
</body>

</html>