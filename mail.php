<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/phpmailer/src/Exception.php';
require 'assets/phpmailer/src/PHPMailer.php';
require 'assets/phpmailer/src/SMTP.php';
if (isset($_POST["send"])) {

  $mail = new PHPMailer(true);

    $mail->isSMTP();                           
    $mail->Host       = 'smtp.gmail.com';      
    $mail->SMTPAuth   = true;             
    $mail->Username   = 'sobangees@gmail.com';   
    $mail->Password   = 'tdiocieswdhanlde';     
    $mail->SMTPSecure = 'ssl';           
    $mail->Port       = 465;                                    

    // recipients
    $mail->setFrom( $_POST["email"], $_POST["name"]);
    $mail->addAddress('sobangees@gmail.com');     
    $mail->addReplyTo($_POST["email"], $_POST["name"]); 

    // content
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];

    // message
    $messageBody = $_POST["message"] . "<br><br>Contact Number: " . $_POST["phone"];    
    $mail->Body = $messageBody;
    $mail->send();

    echo
    " 
    <script> 
     alert('Thank you! Our team will reply to you as soon as possible. :]');
     document.location.href = 'contact.php';
    </script>
    ";
}
?>