﻿<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>About Me</title>
</head>

<?php
require('vendor/autoload.php');

// define variables and set to empty values
$nameErr = $emailErr  = "";
$name = $email = $message  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }

    $servername = "localhost";
    $username = "www-data";
    $password = "";
    $dbname = "olithompson";
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<body class="background">

    <!-- Banner, Navigation bar and Sidenav Bar -->
    <div class="banner">
        <div class="banner-content">
            <?php include('partials/logo.php') ?>
            <a href="/">
                <h1>Oli&nbsp;Thompson</h1>
            </a>
            <div class="socialmediacontainer">
                <a href="http://www.linkedin.com/in/oli-thompson" target="_blank">
                    <img class="socialmedialogo" alt="Linkedin" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Linkedin.svg"></a>
                <a href="https://github.com/ot316" target="_blank">
                    <img class="socialmedialogo" alt="Github" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/github.png"></a>
                <a href="https://www.instagram.com/olithompson_designengineer/" target="_blank">
                    <img class="socialmedialogo" alt="Instagram" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Instagram.png"></a>
            </div>
        </div>
    </div>
    <div id="mySidenav" class="sidenav">
        <a onclick="closeNav()">
            <p style="font-size: 36px;" class="sidenavtext">&times;</p>
        </a> <a href="/">
            <p class="sidenavtext">Projects</p>
        </a>
        <a href="about_me">
            <p class="sidenavtext">About&nbsp;Me</p>
        </a>
        <a href="renders_and_art">
            <p class="sidenavtext">Renders&nbsp;and&nbsp;Art</p>
        </a>
        <a href="music">
            <p class="sidenavtext">Music</p>
        </a>
        <div class="socialmediacontainermobile">
            <a href="https://www.instagram.com/olithompson_designengineer/" target="_blank">
                <img class="socialmedialogomobile" alt="Instagram" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Instagram.png"></a>
            <a href="https://github.com/ot316" target="_blank">
                <img class="socialmedialogomobile" alt="Github" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/github.png"></a>
            <a href="http://www.linkedin.com/in/oli-thompson" target="_blank">
                <img class="socialmedialogomobile" alt="Linkedin" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Linkedin.svg"></a>
        </div>
    </div>
    <span class="sidenavbutton" onclick="openNav()">&#9776;</span>
    <div class="navbarwrapper">
        <div class="navbar">
            <ul>
                <li><a href="/">Projects</a></li>
                <li><a class="active" href="about_me">About Me</a></li>
                <li><a href="renders_and_art"> Renders and Art</a></li>
                <li><a href="music">Music</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="wrapper">
        <!-- Heading -->

        <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/aboutmepic.png" style=" float: left; padding-right: 25px; padding-bottom: 15px; width: 22%; max-width: 200px;">
        <h2 style="padding: 0px; text-align:left;">About Me</h2>
        <br>
        <p style="display: block; margin-top: 0px;"> I'm a 4th year Design Engineering Masters Student at Imperial College London, continuing my studies with a postgraduate masters in computing science before moving into industry.
        </p>
        <p style="display: block"> I have a deep passion for learning about technology, robotics and engineering and am always working to broaden and deepen my knowledge through self-directed study and personal projects.
        </p>
        <p style="display: block; ">
            I enjoy carrying engineering projects through each level of development, from ideation and user experience design through mechanical and electronic challenges down to the software and a final prototype.
        </p>

        <p style="display: block; ">Please click<a href="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/Oli Thompson CV.pdf" target="_blank">
                <strong> here </strong></a> to download my CV.</p>
        <br><br><br>
        <h3>Contact Form </h3>
        <br>
        <div class="survey">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <?php
                if ($name <> "" && $email <> "" && $emailErr == "" && $nameErr == "") {
                    $emailmessage = '<h2>Name:</h2><p>' . $name . '</p><h2>Email:</h2><p>' . $email . '</p><h2>Message:</h2><p>' . $message . '</p>';

                    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
                    $mail->isSMTP();
                    //$mail->SMTPDebug = 3;
                    $mail->CharSet = 'UTF-8';
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = 'tls';
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = '587';
                    $mail->Username = "isstracker2019@gmail.com";
                    $mail->Password = $bucket = getenv('GMAIL_PASSWORD') ?: die('No "GMAIL_PASSWORD" config var in found in env!');
                    $mail->SetFrom('isstracker2019@gmail.com');
                    $mail->addAddress('olithompson@rocketmail.com');
                    $mail->Subject = 'New Contact Form Submission';
                    $mail->Body = $emailmessage;
                    $mail->IsHTML(true);
                    $mail->send();
                    echo ('<br><h3 style ="font-size: 20px;"> Thanks for your message </h3><br>');

                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO contact (name, email, message)
                        VALUES ('$name', '$email', '$message')";
                        $conn->exec($sql);
                    } catch (PDOException $e) {
                        echo $sql . "<br>" . $e->getMessage();
                    }
                }
                ?>
                <p style="margin: 7px;">Name</p> <input type="text" name="name">
                <span class="error">* <?php echo $nameErr; ?></span>
                <p style="margin: 7px;">Email</p> <input type="text" name="email">
                <span class="error">* <?php echo $emailErr; ?></span>
                <p style="margin: 7px;">Message</p><textarea name="message" rows="6" cols="35"></textarea><br />
                <br>
                <input class="btn" type="submit" value="Send"><input class="btn" type="reset" value="Clear">
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <h3>Software Competencies</h3>
        <br>
        <img class="hero" style="max-width: 800px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/software.png ">
        <br>
        <br>
        <br>
    </div>
    </div>
    <?php include('partials/footer.php') ?>
    <script src="javascript/navbar.js"></script>

</html>