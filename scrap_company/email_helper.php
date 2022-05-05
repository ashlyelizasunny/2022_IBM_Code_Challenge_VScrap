
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';




function send_mail($subject,$body,$to_address){


  $mail = new PHPMailer(true);


try{

  $mail->SMTPDebug = 0;
  $mail->isSMTP();
  $mail->Host	 = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'carecycle2021scrappolicy@gmail.com';
  $mail->Password = 'Scrap@123';
  $mail->SMTPSecure = 'tls';
  $mail->Port	 = 587;
  $mail->IsHTML(true);
  $mail->From = 'carecycle2021scrappolicy@gmail.com';
  $mail->FromName = 'CARE CYCLE - Scrappers';

  $mail->AddAddress($to_address);
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $body;
  $mail->AltBody = $body;
  $mail->send();
  return true;
} catch (Exception $e) {
  return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



}




?>
