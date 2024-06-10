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