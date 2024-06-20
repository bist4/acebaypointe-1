<style>
        /* Modal styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; /* 5% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

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
        <!-- Email link -->
        <li class="email"><i class="fa fa-envelope"></i><strong>Email</strong><br>
            <?php
            $email = htmlspecialchars(trim($row['Email']));
            ?>
            <!-- Link to open modal -->
            <a style="color: black; cursor: pointer;" onclick="openModal('<?php echo $email; ?>')"><?php echo $email; ?></a>
        </li>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <p>Choose Email Service:</p>
                <p>
                    <a href="https://mail.yahoo.com/d/compose/baypointehospitalmedicalcenter@yahoo.com" onclick="composeYahoo('<?php echo $email; ?>')">Yahoo Mail</a><br>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=baypointehospitalmedicalcenter@yahoo.com" onclick="composeGmail('<?php echo $email; ?>')">Gmail</a>
                </p>
            </div>
        </div>
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

<script>
    // Function to open the modal
    function openModal(email) {
        document.getElementById('myModal').style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    // Function to compose email in Yahoo Mail
    function composeYahoo(email) {
        window.location.href = 'https://mail.yahoo.com/d/compose/?to=' + encodeURIComponent(email);
        closeModal(); // Close modal after selection
    }

    // Function to compose email in Gmail
    function composeGmail(email) {
        window.location.href = 'https://mail.google.com/mail/?view=cm&fs=1&to=' + encodeURIComponent(email);
        closeModal(); // Close modal after selection
    }
</script>