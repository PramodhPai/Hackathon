<?php
include "classes/class.phpmailer.php"; // include the class name
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtpcorp.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "tmsmsvspb@gmail.com";
$mail->Password = "9042036852";
$mail->SetFrom("admin@studentportal.url.ph");
$mail->Subject = "Your Gmail SMTP Mail";
$mail->Body = "<b>Hi,Please add Items! Your stock is less than 50 right now...!.. <br/><br/>by DSS</b>";
$mail->AddAddress("anyaddrees@domain.com");
 if(!$mail->Send()){
	echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
	echo "Message has been sent";
}
?>