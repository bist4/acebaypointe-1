<?php
// Include your database connection or any necessary files
// Example assuming you have a $conn variable for database connection
include ("../config/db_con.php");
// Check if department and doctorName parameters are set
if (isset($_POST['department']) && isset($_POST['doctorName'])) {
    $department = $_POST['department'];
    $doctorName = $_POST['doctorName'];

    // You may want to perform some validation or sanitization here

    // Construct your SQL query based on the received parameters
    // Example query to fetch doctors based on department and/or doctor name
    $query = "SELECT d.*, ds.* FROM doctors_schedule ds INNER JOIN doctors d ON ds.DoctorID = d.DoctorID WHERE ds.Status = 'Active'";

    if (!empty($department)) {
        $query .= " AND Department = '" . mysqli_real_escape_string($conn, $department) . "'";
    }

    if (!empty($doctorName)) {
        $query .= " AND Doctor_Name LIKE '%" . mysqli_real_escape_string($conn, $doctorName) . "%'";
    }

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through results to generate HTML output
        while ($row = mysqli_fetch_assoc($result)) {
          
 
           echo                         '<div class="col-lg-5 col-xl-4 mb-lg-5">';
           echo                           '<div class="card mb-5 mb-xl-0">';
           echo                                '<div class="card-body p-5 gray-shadow">';
           echo                                    '<img src="assets/img/uploads/'.$row['Image'].'"
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
        echo '<p class="text-center">No doctors found matching the criteria.</p>';
    }

    // Free result set
    mysqli_free_result($result);
} else {
    // Handle case where parameters are not set properly
    echo '<p>Invalid request parameters.</p>';
}

// Close database connection if necessary
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