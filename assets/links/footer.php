<?php
include ("config/db_con.php"); // Connection to database

$medical = mysqli_query($conn, "SELECT * FROM copyright WHERE Active = 1");
$row = mysqli_fetch_assoc($medical)
  ?>
<!-- Footer -->
<footer id="footer">
  <div class="footer-top">
    <div class="container" style="font-family: poppins;">
      <div class="row">
        <div class="col-lg-2 col-md-6">
          <div class="footer-info">
            <!-- First column content  -->
            <a href="index.php" class="logo me-auto"><img src="assets/img/logos/logo-l.png" alt="Small Logo"
                class="img-fluid small-logo"></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 footer-links"> <!-- USEFUL LINKS -->
          <h4>Useful Links</h4>
          <ul>
            <!-- Second column content -->
            <li><a href="index.php">Home</a></li>
            <li><a href="about_us.php">About us</a></li>
            <li><a href="news_and_events.php">News & Events</a></li>
            <li><a href="doctors.php">Doctors</a></li>
            <li><a href="departmet_and_services.php">Department & Services</a></li>
            <li><a href="careers.php">Careers</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 footer-links"> <!-- OUR SERVICES -->
          <h4>Service Offerings</h4>
          <ul>
            <!-- Third column content  -->
            <li><a href="pricelist.php">Price List</a></li>
            <li><i class="bx bx-chevron-right"></i><a href="pricelist.php #room_rates">Room Rates</a></li>
            <li><i class="bx bx-chevron-right"></i><a href="http://localhost/acebaypointeFinal/pricelist.php">Philhealth
                Case Rate Packages<span class="align-text-bottom"></span></a></li>
            <li><i class="bx bx-chevron-right"></i><a href="pricelist.php/#departmental_item">Department Item</a></li>
            <li><a href="packages_for_you.php">Packages For You</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 footer-links"> <!-- OTHER LINKS -->
          <h4>Other Links</h4>
          <ul>
            <!-- Fourth column content  -->
            <li><a href="admission_guide.php">Admission Guide</a></li>
            <li><a href="investment.php">Investments</a></li>
            <!-- <li><a href="job_announcement.php">Job Announcements</a></li> -->
            <li><a href="equipment_acquisition.php">Equipment Acquisition</a></li>
            <li><a href="hmos.php">Accredited HMOS</a></li>
          </ul>
        </div>
        <?php
        include ("config/db_con.php"); // Connection to database
        
        $medical = mysqli_query($conn, "SELECT * FROM Contact_Information WHERE Active = 1");
        $row = mysqli_fetch_assoc($medical)
          ?>
        <div class="col-lg-4 radiantthemes-contact-box rt412613828 element-one" style="font-family: poppins;">

          <h3 style="font-size: 18px;color: #000000;line-height: 24px;text-align: left"
            class="vc_custom_heading font-weight-bold vc_custom_1546582444223">Quick Contact</h3>
          <ul>
            <li class="address no-bullet"><i class="fa fa-map-marker"></i><strong>Address</strong>
              <?php echo '<a style="color: black;" href="https://www.google.com/maps/place/Allied+Care+Experts+(ACE)+Medical+Center+-+Baypointe/@14.8237799,120.2718323,19z/data=!4m14!1m7!3m6!1s0x3396713dc6158cd5:0xce084c90e0457df1!2sAllied+Care+Experts+(ACE)+Medical+Center+-+Baypointe!8m2!3d14.8238888!4d120.2721641!16s%2Fg%2F1w0h50z9!3m5!1s0x3396713dc6158cd5:0xce084c90e0457df1!8m2!3d14.8238888!4d120.2721641!16s%2Fg%2F1w0h50z9?authuser=2&entry=ttu">' . htmlspecialchars(trim($row['Address'])) . '</a><br>'; ?>
            </li>
            <li class="email"><i class="fa fa-envelope"></i><strong>Email</strong>
              <?php echo '<a style="color: black;" href="https://mail.google.com/mail/?view=cm&fs=1&to=baypointehospitalmedicalcenter@yahoo.com">' . htmlspecialchars(trim($row['Email'])) . '</a><br>'; ?>
            </li>
            <li class="phone"><i class="fa fa-phone"></i><strong>Phone</strong>
              <?php
              $tele_num = explode("\n", $row['Phone']);
              foreach ($tele_num as $phone) {
                echo '<a style="color: black;" href="tel:' . htmlspecialchars(trim($phone)) . '">' . htmlspecialchars(trim($phone)) . '</a><br>';
              }
              ?>
            </li>
            <li class="mobile"><i class="fa fa-mobile"></i><strong>Mobile</strong>
              <?php
              $mobile_num = explode("\n", $row['Mobile']);
              foreach ($mobile_num as $mobile) {
                echo '<a style="color: black;" href="tel:' . htmlspecialchars(trim($mobile)) . '">' . htmlspecialchars(trim($mobile)) . '</a><br>';
              }
              ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
      <div class="copyright"> &copy; Copyright <strong><span> &#169;</span> </strong>. All Rights Reserved</div>
      <div class="credits">Design and Developed by <a href="#">MIS Department</a>
      </div>
    </div>
    <div class="footer-info">
      <?php
      $sql = "SELECT Media_Name, Link FROM social_media";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo '<div class="social-links mt-3 d-flex align-items-center justify-content-center">';
        while ($row = $result->fetch_assoc()) {
          $media_name = $row["Media_Name"];
          $url = $row["Link"];
          $icon_class = "";

          switch ($media_name) {
            case "FB":
              $icon_class = "bx bxl-facebook";
              break;
            case "Email":
              $icon_class = "bx bx-envelope";
              break;
            case "Instagram":
              $icon_class = "bx bxl-instagram";
              break;
            // Add more cases as needed for other social media platforms
          }

          echo '<a href="' . $url . '" class="' . strtolower($media_name) . ' me-2"><i class="' . $icon_class . '"></i></a>';
        }
        echo '</div>';
      } else {
        echo "0 results";
      }
      ?>
    </div>
  </div>

  <footer id="footer" class="footer">


  </footer><!-- End Footer -->