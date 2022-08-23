<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Instantiation and passing [ICODE]true[/ICODE] enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'mail.passer-a-linux.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'contact@passer-a-linux.com'; // SMTP username
    $mail->Password = '9Hio7J)Gz_=b'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
    $mail->Port = 465; // TCP port to connect to

    //Recipients
    $mail->setFrom('contact@passer-a-linux.com', 'Patrice');
    $mail->addAddress('contact@passer-a-linux.com', 'formulaire de contact');
    $mail->addReplyTo($_POST['email'], $_POST['prenom'] . " " . $_POST['nom']);

    // Content

    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


/*
$smtpLogs = [];
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'logHandler';

// Your send goes here
$mail->Send();

// After the send
print_r($mail->ErrorInfo);
printLogs($smtpLogs);

function logHandler($log, $level)
{
    global $smtpLogs;

    $smtpLogs[] = trim($log);
}

function printLogs(array $logs)
{
    echo implode("\n", $logs) . "\n";
}
*/
