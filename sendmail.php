<?php 
require 'phpmailer/PHPMailerAutoload.php';
$mail= new PHPMailer;
$mail->Host='smtp.gmail.com'; // SMTP HOST
$mail->Port=465;
$mail->CharSet = 'UTF-8';
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Username='__SMTP_USERNAME_OR_YOUR_EMAIL_ADDRESS__';
$mail->Password='__SMTP_PASSWORD_OR_YOUR_PASSWORD__';
$mail->setFrom('__SMTP_USERNAME_OR_YOUR_EMAIL_ADDRESS__','NAME');
$mail->addAddress('bdmehadih@gmail.com'); // Where you want to send the mail.
$mail->addReplyTo('bdmehadih@gmail.com'); // Where you want to get the reply.
$mail->isHTML(true);
$mail->Subject='Email subject';
$mail->Body='Email body.';
if(!$mail->send())
{
echo "Something went wrong";
echo $mail->ErrorInfo;
}
else
{
	echo "Email sent successfully";
}
?>
