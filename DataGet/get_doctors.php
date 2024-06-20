<?php
session_start();
require ('../config/db_con.php');

$doctorID = $_POST['doctorID'];

$table = mysqli_query($conn, "SELECT ds.*, d.* FROM doctors_schedule ds INNER JOIN doctors d ON ds.DoctorID=d.DoctorID WHERE ds.DoctorID=$doctorID");

if ($row = mysqli_fetch_assoc($table)) {
    ?>
    <div class="row gx-5 justify-content-center align-items-center">
        <div class="col-md-6 zoom-in">
            <img src="https://img.freepik.com/premium-vector/smiling-male-doctor-with-stethoscope-vector-illustration-cartoon-style_374761-3140.jpg"
                class="img-fluid rounded" alt="Doctor Image">
        </div> <!-- End of the image -->
        <div class="col-md-6">
            <div class="appointment-item-two-right">
                <h2 class="doctor-name display-6 text-center text-md-start">Dr. <?php echo $row['Doctor_Name'] ?></h2>


                <div class="appointment-item-content">
                    <p class="fs-6"><strong>Department:</strong> <span class="department"><?php echo $row['Department'] ?></span></p>
                    <p class="fs-6"><strong>Status:</strong> <span class="status"><?php echo $row['Status'] ?></span></p>
                    <h6 class="fs-6"><strong>Clinic hours</strong></h6>
                    <div class="doctor-details-work">
                        <ul class="list-unstyled" style="padding-left: 0;">
                            <li>Monday
                                <span><?php echo !empty($row['Monday']) ? htmlspecialchars($row['Monday']) : '<span class="d-flex justify-content-center">--</span>'; ?></span>
                            </li>
                            <li>Tuesday
                                <span><?php echo !empty($row['Tuesday']) ? htmlspecialchars($row['Tuesday']) : '<span class="d-flex justify-content-center">--</span>'; ?></span>
                            </li>
                            <li>Wednesday
                                <span><?php echo !empty($row['Wednesday']) ? htmlspecialchars($row['Wednesday']) : '<span class="d-flex justify-content-center">--</span>'; ?></span>
                            </li>
                            <li>Thursday
                                <span><?php echo !empty($row['Thursday']) ? htmlspecialchars($row['Thursday']) : '<span class="d-flex justify-content-center">--</span>'; ?></span>
                            </li>
                            <li>Friday
                                <span><?php echo !empty($row['Friday']) ? htmlspecialchars($row['Friday']) : '<span class="d-flex justify-content-center">--</span>'; ?></span>
                            </li>
                            <li>Saturday
                                <span><?php echo !empty($row['Saturday']) ? htmlspecialchars($row['Saturday']) : '<span class="d-flex justify-content-center">--</span>'; ?></span>
                            </li>
                            <li>Sunday
                                <span><?php echo !empty($row['Sunday']) ? htmlspecialchars($row['Sunday']) : '<span class="d-flex justify-content-center">--</span>'; ?></span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p><strong>Note: </strong>For <strong>On Call</strong> and
                            <strong>By
                                Appointment</strong> Status, <br>
                            <strong>0939-915-7633 </strong>Local
                            200 for Smart <br> <strong>0917-545-1566</strong> Local 200
                            for
                            Globe
                        </p>
                    </div>
                </div> <!-- End of Appointment item content -->
            </div> <!-- End of appointment item two right -->
        </div> <!-- End of the right column -->
    </div>
    <?php
}
?>