<?php
include ("config/db_con.php"); // Connection to database

$contact = mysqli_query($conn, "SELECT * FROM contact_information WHERE Active = 1");
$row = mysqli_fetch_assoc($contact)
    ?>
<div class="col-lg-4 radiantthemes-contact-box rt412613828 element-one" style="font-family: poppins;">
    <figure class="mb-4"><img class="img-fluid rounded" src="assets/img/slide/<?php echo $row['Image_Contact']; ?>"
            alt="..." /></figure>
    <h3 style="font-size: 18px;color: #000000;line-height: 24px;text-align: left"
        class="vc_custom_heading font-weight-bold vc_custom_1546582444223">Quick Contact</h3>
    <ul>
        <li class="address no-bullet"><i class="fa fa-map-marker"></i><strong>Address</strong>
            <?php echo $row['Address']; ?></li>
        <li class="email"><i class="fa fa-envelope"></i><strong>Email</strong> <?php echo $row['Email']; ?>
        </li>
        <li class="phone"><i class="fa fa-phone"></i><strong>Phone</strong>
            <?php
            $tele_num = explode("\n", $row['Phone']);
            foreach ($tele_num as $phone) {
                echo htmlspecialchars(trim($phone)) . "<br>";
            }
            ?>
        </li>
        <li class="mobile"><i class="fa fa-mobile"></i><strong>Mobile</strong>
            <?php
            $mobile_num = explode("\n", $row['Mobile']);
            foreach ($mobile_num as $mobile) {
                echo htmlspecialchars(trim($mobile)) . "<br>";
            }
            ?>
        </li>
    </ul>
</div>