<?php
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "olithompsonwebsite@gmail.com";
$mail->Password = "$6Y7cehUKsjU*";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("Your from email", "from name");
$mail->AddReplyTo("from email", "PHPPot");
$mail->AddAddress("olithompson@rocketmail.com");
$mail->Subject = "Test email using PHP mailer";
$mail->WordWrap   = 80;
$content = "<b>This is a test email using PHP mailer class.</b>"; $mail->MsgHTML($content);
$mail->IsHTML(true);
if(!$mail->Send()) 
echo "Problem sending email.";
else 
echo "email sent.";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "olithompson@rocketmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>