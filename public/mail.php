<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                    // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                             // Enable SMTP authentication
$mail->Username = 'support@trackmyfeelings.com';        // SMTP username
$mail->Password = 'RnDmIZdp@$$worD';                      // SMTP password
$mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                  // TCP port to connect to

$mail->setFrom('support@trackmyfeelings.com');
$mail->addAddress('support@trackmyfeelings.com.com');       // Add a recipient (it's OK to use your email for the test)

$mail->isHTML(true);                                // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.'."\n";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent'."\n";
}
?>