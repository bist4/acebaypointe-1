<?php
include ("config/db_con.php"); // Connection to the database

?>

<!-- Top Navigation Bar -->
<div id="topbar" class="header d-flex align-items-center fixed-top">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-md-auto mb-2 mb-md-0 text-md-start text-center"></div>
      <div class="col-md-auto text-md-end">
        <div class="row justify-content-center justify-content-md-end">
          <?php
          $contact_info = mysqli_query($conn, "SELECT * FROM contact_information WHERE Active = 1");

          if (mysqli_num_rows($contact_info) > 0) {

            while ($row = mysqli_fetch_assoc($contact_info)) {
              ?>

              <?php
              $tele_num = explode("\n", $row['Phone']);
              foreach ($tele_num as $phone) {
                echo ' <div class="col-auto mb-2 mb-md-0"> <i class="bi bi-telephone"> </i> ' . htmlspecialchars(trim($phone)) . ' </div>';
              }
              ?>

            <?php }
          }
          ?>
          <?php
          $contact_info = mysqli_query($conn, "SELECT * FROM contact_information WHERE Active = 1");

          if (mysqli_num_rows($contact_info) > 0) {
            while ($row = mysqli_fetch_assoc($contact_info)) {
              ?>
                <?php
                  $mobile_num = explode("\n", $row['Mobile']);
                  foreach ($mobile_num as $mobile) {
                    echo ' <div class="col-auto mb-2 mb-md-0"> <i class="bi bi-phone"> </i> ' . htmlspecialchars(trim($mobile)) . ' </div>';
                  }
                ?>
            <?php }
          }
          ?>
          <div class="col-auto pfy">
            <a href="#" target="_blank" class="messenger">
              <i class="bi bi-messenger"></i><span>Say hi to ACEMCB on Messenger</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Main Header -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <a href="index.php" class="logo me-auto"><img src="assets/img/logos/logo-l.png" alt=""></a>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <h1 class="logo me-auto"><a href="index.php">Medicio</a></h1> -->
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto" href="index.php">HOME</a></li>
        <li class="dropdown"><a href="about_us.php"><span>ABOUT US</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a class="nav-link scrollto" href="about_us.php#who_we_are">WHO WE ARE</a></li>
            <li><a class="nav-link scrollto" href="about_us.php#mission_vision">MISSION & VISION</a></li>
            <li><a class="nav-link scrollto" href="about_us.php#core_values">CORE VALUES</a></li>
            <li><a class="nav-link scrollto" href="privacy_policy.php">DATA PRIVACY POLICY</a></li>
            <li><a class="nav-link scrollto" href="privacy_policy.php#quality_policy">QUALITY POLICY</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>WHAT'S NEW</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="news_and_events.php">NEWS & EVENTS</a></li>
            <li><a href="promo_and_packages.php">PROMOS & PACKAGES</a></li>
          </ul>
        </li>
        <li><a href="doctors.php">DOCTORS</a></li>
        <li><a href="department_and_services.php">DEPARTMENT & SERVICES</a></li>
        <li><a href="careers.php">CAREERS</a></li>
        <li class="dropdown"><a href="#"><span>PATIENT GUIDE & FEATURES</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">VIRTUAL TOUR</a></li>
            <li><a href="admission_procedure.php">ADMISSION PROCEDURE</a></li>
            <li><a href="room_accommodation.php">ROOM ACCOMMODATIONS</a></li>
            <li><a href="patient_partnership.php">PATIENT PARTNERSHIP</a></li>
            <li><a href="patient_safety_and_quality_care.php">PATIENT SAFETY & QUALITY CARE</a></li>
            <li><a href="medical_records.php">MEDICAL RECORDS</a></li>
            <li><a href="hmos.php">HMO PARTNERS</a></li>
            <li><a href="philhealth_requirements.php">PHILHEALTH REQUIREMENTS</a></li>
            <li><a href="billing_and_payment.php">BILLING & PAYMENT</a></li>
            <li><a href="getting_to_acemcbaypointe.php">GETTING TO ACEMCBAYPOINTE</a></li>
            <li><a href="emergency_and_services.php">EMERGENCY & SERVICES</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="contact_us.php">CONTACT US</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->
  </div>
</header>