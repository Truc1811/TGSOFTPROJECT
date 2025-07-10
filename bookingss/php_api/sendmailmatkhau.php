<?php
session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
// $maxacnhan=rand(100000,999999);
// $_SESSION['maxacnhan']=$maxacnhan;
$noidungmail=$_SESSION['noidungmail'];
$mailnhan=$_POST['email'];
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->IsSMTP();// gửi mail SMTP
    $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;    // enable SMTP authentication
    $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    // $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->CharSet   = "utf-8";
    $mail->Username = 'tgsoft1105@gmail.com';// SMTP username
    $mail->Password = 'djdnfkcjnmobluhe'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'JOBOPEN');
    // $mail->addAddress('tranthevan1105@gmail.com', 'Joe User'); // Add a recipient
    $mail->addAddress($mailnhan); // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $mail->Subject = 'Thông tin đăng nhập mới';
    $mail->Body = $noidungmail;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>