<?php
// Establish database connection (assuming $conn is already defined)
include ("../config/db_con.php");
 
// $department = $_POST['department'];
$doctorName = $_POST['doctorName'];

// Query to fetch doctor's information
$query = "SELECT d.*, ds.* FROM doctors_schedule ds INNER JOIN doctors d ON ds.DoctorID = d.DoctorID WHERE ds.Status = 'Active' AND d.Doctor_Name = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's',  $doctorName);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Display doctor's information
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      
        echo                         '<div class="col-lg-5 col-xl-4 mb-lg-5">';
        echo                           '<div class="card mb-5 mb-xl-0">';
        echo                                '<div class="card-body p-5 gray-shadow">';
        echo                                    '<img src="https://img.freepik.com/premium-vector/smiling-male-doctor-with-stethoscope-vector-illustration-cartoon-style_374761-3140.jpg"
                                                 alt="" class="img-fluid mb-4">
                                             <div class="mb-3 text-center">';
        echo                                        '<h5>Dr.'. htmlspecialchars(trim($row['Doctor_Name'])).'</h5>';
        echo                                        '<div class="member-info text-center mb-2">';
        echo                                             '<span>'.htmlspecialchars(trim($row['Department'])).'</span>';
        echo                                         ' </div>';
        echo                                    ' </div>';
        echo                                    '<div class="d-grid">';
        echo '<a class="btn doctors-btn" data-bs-toggle="modal" 
        data-doctor-id="' . htmlspecialchars($row['DoctorID']) . '" 
        data-bs-target="#exampleModal">View Schedule</a>';

        echo                                   ' </div>';
        echo                                ' </div>';
        echo                          ' </div>';
        echo                        ' </div>';
  
    }
} else {
    echo '<p class="text-center">No doctors found for the selected department and name.</p>';
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
<!-- MODAL OF THE VIEW SCHEDULE -->
<div class="modal fade gray-shadow" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content px-4 mx-4 my-5">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-body">

            </div>
        </div>
    </div>
</div>

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