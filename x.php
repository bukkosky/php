<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';



    $mail = new PHPMailer(true);


    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.mailgun.org';
    $mail->Port = 587;
    $mail->SMTPAuth = 'true';
    $mail->Username = 'bai@simple-systems.pl';
    $mail->Password = 'bai123';
    $mail->SMTPSecure = 'tls';

    $mail->setFrom('bai@simple-systems.pl', 'marcin');
    $mail->addAddress('bukkosky@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'test';
    $mail->Body = 'wiadomość testowa';


    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }