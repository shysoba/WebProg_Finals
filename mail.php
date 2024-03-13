<?php
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if (empty($_POST['token'])) {
    echo '<span class="notice">Error!</span>';
    exit;
}

$expectedToken = 'FsWga4&@f6aw';

if ($_POST['token'] !== $expectedToken) {
    echo '<span class="notice">Error!</span>';
    exit;
}

$name = htmlspecialchars($_POST['name']);
$from = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$subject = htmlspecialchars(stripslashes(nl2br($_POST['subject'])));
$message = htmlspecialchars(stripslashes(nl2br($_POST['message'])));

$mail = new PHPMailer\PHPMailer\PHPMailer();

// Set up SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'sobangee5sos@gmail.com'; 
$mail->Password = 'hehe';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set up the email content
$mail->setFrom($from, 'Form Contact');
$mail->addAddress('sobangee5sos@gmail.com');
$mail->isHTML(true);

$mail->Subject = 'Contact Form Submission';
$mail->Body = "
Daloy!<br /><br />
" . ucfirst($name) . " has sent you a message via the contact form on your website!
<br /><br />

Name: " . ucfirst($name) . "<br />
Email: $from<br />
Phone: $phone<br />
Subject: $subject<br />
Message: <br /><br />
$message
<br />
<br />
============================================================
";

// Try to send the email
if ($mail->send()) {
    echo '<div class="success"><i class="fas fa-check-circle"></i><h3>Thank You!</h3>Your message has been sent successfully.</div>';
} else {
    echo '<div>Your message sending has failed! Error: ' . $mail->ErrorInfo . '</div>';
}
?>
