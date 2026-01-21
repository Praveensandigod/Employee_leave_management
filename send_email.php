<?php
// Autoload Composer packages
require 'vendor/autoload.php';

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Function to send email
function sendLeaveApprovalEmail($toEmail, $toName, $leaveID, $startDate, $endDate, $reason) {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ikumbar59@gmail.com';
        $mail->Password   = 'jquozsdsebqnguou';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('ikumbar59@gmail.com', 'HR Department');
        $mail->addAddress($toEmail, $toName);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Leave Request Approved';
        $mail->Body    = "Dear $toName,<br>Your leave request (Leave ID: $leaveID) has been approved.<br><br>Details:<br>Start Date: $startDate<br>End Date: $endDate<br>Reason: $reason<br><br>Best regards,<br>HR Department";

        // Send the email
        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Mailer Error: {$mail->ErrorInfo}");
        return false;
    }
}
?>