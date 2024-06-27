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

        .search-description {
            padding-left: 0;
            text-align: left;
            /* Align the text to the left */
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
                            <!-- <div class="search-bar">
                                <p class="search-description mt-2 mb-2">Find doctors quickly by selecting a department
                                    and
                                    entering the doctor's name:</p>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <select class="form-select" id="department" name="department" required>
                                                <option selected disabled value="">Choose Department...</option>
                                                <?php

                                                $query = "SELECT Department FROM doctors WHERE Active = 1";
                                                $result = mysqli_query($conn, $query);

                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo '<option value="' . $row['Department'] . '">' . $row['Department'] . '</option>';
                                                    }
                                                } else {
                                                    echo '<option value="">No active departments found</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="doctorName" name="doctorName"
                                                placeholder="Enter Doctor's Name" required>
                                        </div>
                                       
                                    </div>
                                </form>
                            </div> -->
                            <div class="search-bar">
                                <p class="search-description mt-2 mb-2">Find doctors quickly by selecting a department
                                    and entering the doctor's name:</p>
                                <form id="searchForm">
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <select class="form-select" id="department" name="department" required>
                                                <option selected disabled value="">Choose Department...</option>
                                                <?php

                                                $query = "SELECT DISTINCT Department FROM doctors WHERE Active = 1";
                                                $result = mysqli_query($conn, $query);

                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo '<option value="' . $row['Department'] . '">' . $row['Department'] . '</option>';
                                                    }
                                                } else {
                                                    echo '<option value="">No active departments found</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="doctorName" name="doctorName"
                                                placeholder="Enter Doctor's Name" required>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Container to display doctor's information -->
                            <!-- <div id="doctorInfo"></div> -->

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    // Event handler for department selection or doctor name input
                                    $('#department').on('change keyup', function () {
                                        var department = $('#department').val();


                                        // AJAX call to fetch doctor's information
                                        $.ajax({
                                            url: 'FetchData/fetch_doctors.php', // Update with your PHP script path
                                            type: 'POST',
                                            data: {
                                                department: department

                                            },
                                            success: function (response) {
                                                $('#doctorInfo').html(response);
                                            }
                                        });
                                    });
                                });
                            </script>

                            <script>
                                $(document).ready(function () {
                                    // Event handler for department selection or doctor name input
                                    $('#doctorName').on('change keyup', function () {

                                        var doctorName = $('#doctorName').val();

                                        // AJAX call to fetch doctor's information
                                        $.ajax({
                                            url: 'FetchData/fetch_doctorname.php', // Update with your PHP script path
                                            type: 'POST',
                                            data: {

                                                doctorName: doctorName
                                            },
                                            success: function (response) {
                                                $('#doctorInfo').html(response);
                                            }
                                        });
                                    });
                                });
                            </script>

                            <script>
                                $(document).ready(function () {
                                    // Function to fetch doctor's information based on department and/or doctor's name
                                    function fetchDoctorInfo() {
                                        var department = $('#department').val();
                                        var doctorName = $('#doctorName').val();

                                        // AJAX call to fetch doctor's information
                                        $.ajax({
                                            url: 'FetchData/fetch_DocdepName.php', // Update with your PHP script path
                                            type: 'POST',
                                            data: {
                                                department: department,
                                                doctorName: doctorName
                                            },
                                            success: function (response) {
                                                $('#doctorInfo').html(response);
                                            }
                                        });
                                    }

                                    // Event handler for department selection change
                                    $('#department').on('change', function () {
                                        fetchDoctorInfo();
                                    });

                                    // Event handler for doctor name input change
                                    $('#doctorName').on('keyup', function () {
                                        fetchDoctorInfo();
                                    });
                                });

                            </script>
                        </div>
                    </div>
                </div>

                <!-- Doctor section-->
                <div class="bg-light">
                    <div class="container px-5 my-5">
                        <div class="text-center"></div>
                        <div class="row gx-5 justify-content-center" id="doctorInfo">
                            <!-- Doctors -->
                            <?php
                            include ("config/db_con.php");

                            // Pagination logic
                            $items_per_page = 10; // Number of doctors per page
                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1; // Get current page number, default to 1
                            
                            // Calculate the starting point for the query
                            $start = ($current_page - 1) * $items_per_page;

                            $doctors_query = "SELECT d.*, ds.* FROM doctors_schedule ds INNER JOIN doctors d ON ds.DoctorID = d.DoctorID WHERE ds.Status = 'Active' AND d.Active = 1 LIMIT $start, $items_per_page";
                            $doctors_result = mysqli_query($conn, $doctors_query);

                            if (mysqli_num_rows($doctors_result) > 0) {
                                while ($row = mysqli_fetch_assoc($doctors_result)) {
                                    ?>
                                    <div class="col-lg-5 col-xl-4 mb-lg-5">
                                        <div class="card mb-5 mb-xl-0">
                                            <div class="card-body p-5 gray-shadow">
                                                <img src="assets/img/uploads/<?php echo $row['Image']?>"
                                                    alt=""  class="img-fluid mb-4">
                                                <div class="mb-3 text-center">
                                                    <h5>Dr. <?php echo htmlspecialchars(trim($row['Doctor_Name'])) ?></h5>
                                                    <div class="member-info text-center mb-2">
                                                        <span><?php echo htmlspecialchars(trim($row['Department'])) ?></span>
                                                    </div>
                                                </div>
                                                <div class="d-grid">
                                                    <a class="btn doctors-btn" data-bs-toggle="modal"
                                                        data-doctor-id="<?php echo $row['DoctorID'] ?>"
                                                        data-bs-target="#exampleModal">View Schedule</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                ?>
                                <div class="col-12 text-center">
                                    No Doctors Available
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                        <!-- Pagination -->
                        <div class="row justify-content-center justify-content-md-between mt-4">
                            <div class="col-12">
                                <hr class="my-4" color="">
                            </div>
                            <div class="col-12 col-md-auto d-flex justify-content-center justify-content-md-start">
                                <nav class="pagination" id="paginationNav">
                                    <?php
                                    // Previous page link
                                    if ($current_page > 1) {
                                        echo '<a href="?page=' . ($current_page - 1) . '">Previous</a>';
                                    }

                                    // Calculate total doctors count
                                    $total_doctors_query = "SELECT COUNT(*) as total FROM doctors_schedule WHERE Status = 'Active'";
                                    $total_doctors_result = mysqli_query($conn, $total_doctors_query);
                                    $total_doctors_row = mysqli_fetch_assoc($total_doctors_result);
                                    $total_doctors = $total_doctors_row['total'];

                                    // Calculate total pages
                                    $total_pages = ceil($total_doctors / $items_per_page);

                                    // Determine start and end of pagination links
                                    $start = max(1, $current_page - 2); // Start with at least the first page
                                    $end = min($start + 4, $total_pages); // Show up to 5 pages
                                    
                                    // Page numbers
                                    if ($start > 1) {
                                        echo '<a href="?page=1">1</a>'; // Always show first page link
                                        if ($start > 2) {
                                            echo '<span class="ellipsis">...</span>'; // Show ellipsis if more than one page away from the first page
                                        }
                                    }

                                    for ($i = $start; $i <= $end; $i++) {
                                        if ($i == $current_page) {
                                            echo '<span class="current">' . $i . '</span>';
                                        } else {
                                            echo '<a href="?page=' . $i . '">' . $i . '</a>';
                                        }
                                    }

                                    // Next page link
                                    if ($current_page < $total_pages) {
                                        echo '<a href="?page=' . ($current_page + 1) . '">Next</a>';
                                    }
                                    ?>
                                </nav>
                            </div>
                            <div class="page col-md-auto d-flex justify-content-center text-md-end mt-3 mt-md-0">
                                <span class="page-number">Page <?php echo $current_page; ?> of
                                    <?php echo $total_pages; ?></span>
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
                                <div class="modal-body" id="modal-body">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of the Modal -->
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.doctors-btn').click(function () {
                var doctorID = $(this).data('doctor-id');

                $.ajax({
                    url: 'DataGet/get_doctors.php',
                    method: 'POST',
                    data: { doctorID: doctorID },
                    success: function (response) {
                        $('#modal-body').html(response);
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

</body>

</html>