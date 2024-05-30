<?php
include ("config/db_con.php"); // Connection to database

$medical = mysqli_query($conn, "SELECT * FROM Contact_Information WHERE Active = 1");
$row = mysqli_fetch_assoc($medical)
    ?>
<div class="col-lg-4 radiantthemes-contact-box rt412613828 element-one" style="font-family: poppins;">
    <figure class="mb-4"><img class="img-fluid rounded" src="assets/img/slide/slide-3.png" alt="..." /></figure>
    <h3 style="font-size: 18px;color: #000000;line-height: 24px;text-align: left"
        class="vc_custom_heading font-weight-bold vc_custom_1546582444223">Quick Contact</h3>
    <ul>
        <li class="address no-bullet"><i class="fa fa-map-marker"></i><strong>Address</strong>
            <?php echo $row['Address']; ?></li>
        <li class="email"><i class="fa fa-envelope"></i><strong>Email</strong> <?php echo $row['Email']; ?>
        </li>
        <li class="phone"><i class="fa fa-phone"></i><strong>Phone</strong> <?php echo $row['Phone']; ?></li>
        <li class="mobile" style="list-style-type: none; margin:0;"><i class="fa fa-mobile"></i><strong>Mobile</strong>
            <?php
            $patientItems = explode("\n", $row['Mobile']);
            foreach ($patientItems as $item) {
                echo htmlspecialchars(trim($item)) . "<br>";
            }
            ?>
        </li>
    </ul>
</div>