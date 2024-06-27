<?php
require('../config/db_con.php');
session_start();

// Validate and sanitize input data
$name = htmlspecialchars(trim($_POST['name']));
$number = htmlspecialchars(trim($_POST['number']));
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$subject = htmlspecialchars(trim($_POST['subject']));
$category = htmlspecialchars(trim($_POST['Category']));
$message = htmlspecialchars(trim($_POST['message']));
$date = date('Y-m-d H:i:s');  // Current date and time
$status = 'PENDING';
$active = 1;

// Determine the department based on the category
$department = '';  // Adjust logic to determine department from the category

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO inbox (Name, Email, Subject, Department, Message, Date, Status, Active) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("sssssssi", $name, $email, $subject, $department, $message, $date, $status, $active);

// Execute statement
if ($stmt->execute()) {
    echo 'OK';
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
