<?php

function sendEmail($toEmail, $fromEmail, $sujetEmail, $messageEmail): void
{
    $to      = $toEmail;
    $subject = $sujetEmail;
    $message = $messageEmail;
    $headers = 'From: ' . $fromEmail .'' . "\r\n" .
    'Reply-To: ' . $fromEmail .'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message , $headers);
}