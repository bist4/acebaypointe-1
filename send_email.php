<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

// Create a response array
$response = array();

function sendEmail(){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'saasisubicinc@gmail.com';
    $mail->Password = 'fxytjsahrwtyhdhb';

    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('saasisubicinc@gmail.com');

    try {
        $mail->addAddress("angelmaecarpeso@gmail.com");
        $mail->isHTML(true);
        $mail->Subject = "Application Form";

        if ($mail->send()) {
            $response['success'] = "Email sent successfully";
        } else {
            $response['error'] = "Email sending failed: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        $response['error'] = "Error sending email: " . $e->getMessage();
    }

    // Return the response as JSON
    echo json_encode($response);
}

// Call the function to send email
sendEmail();
?>
