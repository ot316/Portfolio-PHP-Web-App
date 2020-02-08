
<?php
require('vendor/autoload.php');

$name = preg_replace("/[^a-zA-Z0-9\s]/", "", $_POST["name"]);

$email = preg_replace("/[^a-zA-Z0-9@.\s]/", "", $_POST["email"]);

$message = preg_replace("/[^a-zA-Z0-9\s]/", "", $_POST["message"]);

$message = '<h2>Name:</h2><p>'.$name.'</p><h2>Email:</h2><p>'.$email.'</p><h2>Message:</h2><p>'.$message.'</p>';

$mail = new PHPMailer\PHPMailer\PHPMailer(true);
$mail->isSMTP();
//$mail->SMTPDebug = 1;
$mail->CharSet = 'UTF-8';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '587';
$mail->Username = "isstracker2019@gmail.com";
$mail->Password = $bucket = getenv('GMAIL_PASSWORD')?: die('No "GMAIL_PASSWORD" config var in found in env!');
$mail->SetFrom('isstracker2019@gmail.com');
$mail->addAddress('olithompson@rocketmail.com');
$mail->Subject = 'New Contact Form Submission';
$mail->Body = $message;
$mail->IsHTML(true);
$mail->send();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>About Me</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/aboutmepic.png" style=" float: left; padding-top: 20px; padding-right: 25px; padding-bottom: 15px; max-width: 18%;">
        <p style="display: block; padding-top: 20px;"> I'm Oli, a 4th year Design Engineering Masters Student at Imperial College London, continuing my studies with a postgraduate masters in computing science before moving into industry.
        </p>
        <p style="display: block"> I have a deep passion for learning about technology, robotics and engineering and am always working to broaden and deepen my knowledge through self-directed study and personal project work.
        </p>
        <p style="display: block; ">
            I enjoy carrying engineering projects through each level of development, from ideation and user experience design through mechanical and electronic challenges down to the software that make it work and a final prototype.
        </p>
 
        <p style="display: block; ">Please click<a href="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/Oli Thompson CV.pdf" target="_blank">
        <strong> here </strong></a> to download my CV.</p>
        <br>
        <br>
        <br>
        <br>
        <h3>Software Competencies</h3>
        <br>
        <img class="hero " src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/software.png ">
        <br>
        <br>
        <br>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="navbar.js"></script>

</html>

