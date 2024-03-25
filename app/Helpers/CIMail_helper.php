<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * OJO esto es importante
 * Enviar email con PHPMailer GitHub
 * Esto es una Funcion
 * Intalar Libreria
 */

if (!function_exists('sendEmail')) {
    function sendEmail($mailconfig)
    {
        
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);
        $mail-> SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = env('EMAIL_HOST');
        $mail->SMTPAuth = true;
        $mail->Username = env('EMAIL_USERNAME');
        $mail->Password = env('EMAIL_PASSWORD');
        $mail->SMTPSecure = env('EMAIL_ENCRYPTATION');
        $mail->Port = env('EMAIL_PORT');
        $mail->setFrom($mailconfig['mail_from_email'], $mailconfig['mail_from_name']);
        $mail->addAddress($mailconfig['mail_recipient_email'], $mailconfig['mail_recipient_name']);
        $mail->isHTML(true);
        $mail->Subject = $mailconfig['mail_subject'];
        $mail->Body = $mailconfig['mail_body'];
        if ( $mail->send()) {
            return true;
        } else {
            return false;
        }
        
    }
}