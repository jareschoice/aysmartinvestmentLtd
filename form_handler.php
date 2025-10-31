<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'mail.getquickserves.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@getquickserves.com';
        $mail->Password = 'A8x$Pq91zTf!';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('admin@getquickserves.com', 'AYSMART Investments');
        $mail->addAddress('info@aysmartinvestments.com');

        $mail->isHTML(true);
        $mail->Subject = "New Message from " . $_POST['name'];
        $mail->Body = "
            <h3>Contact Form Submission</h3>
            <p><b>Name:</b> {$_POST['name']}</p>
            <p><b>Email:</b> {$_POST['email']}</p>
            <p><b>Subject:</b> {$_POST['subject']}</p>
            <p><b>Message:</b><br>{$_POST['message']}</p>
        ";

        $mail->send();
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Failed to send message. Please try again later.'); window.location.href='contact.html';</script>";
    }
}
?>