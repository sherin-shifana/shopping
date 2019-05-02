<?php

require_once "/home/debian/vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "sherinpv777@gmail.com";
$mail->FromName = "Full Name";

//To address and name
$mail->addAddress("sherinshifana1997.com", "Recepient Name");
$mail->addAddress("mails2abhinand@gmail.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("sherinpv777@gmail.com", "Reply");

//CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message has been sent successfully";
}
