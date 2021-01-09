<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>About Me</title>
    <link rel="stylesheet" href="./css/stylehomepage.css">
    <link rel="stylesheet" href="./css/aboutme.css">
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
    <?php include('partials/banner.php') ?>
    <br>
    <br>
    <div class="wrapper" style="max-width: 50vw">
        <!-- Heading -->

        <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/aboutmepic.png" style=" float: left; padding-right: 25px; padding-bottom: 15px; width: 22%; max-width: 200px;">
        <h2 style="padding: 0px; text-align:left;">About Me</h2>
        <br>
        <p style="display: block; margin-top: 0px;"> I am currently studying for an MSc in Computing Science at Imperial College London, having recently graduated with an MEng in Design Engineering (also at Imperial). Design Engineering is a course that combines traditional engineering skills with innovation and entrepreneurship. </p>
        
        <p style="display: block">I am looking to pursue a career in product management, software engineering or related roles.</p>
        
        <p style="display: block">In my spare time I have always looked to broaden and deepen my knowledge through self-directed study and personal project work. During my internship at the Magic of Things ltd I was responsible for designing interactive products from initial concept and research through A/B testing, validation and roll-out. For me there is nothing more satisfying than taking a project through ideation, user experience and software to a final product and beyond. Design engineering taught me that everything begins and ends with the user.</p>

        <p style="display: block">I was first introduced to software through several robotics projects where it became apparent that the production lifecycle of software was quicker than hardware. Working on a small agile software development team at Bladebug ltd felt fast paced and tangible, this led me down the path of studying Computer Science.</p>

        <p style="display: block">Working with startups and studying a number of business modules has sparked an interest in the business world and the tech industry, and has taught me how open source technologies and the licensing of software drive business models and competition.</p>

        <p style="display: block">Outside of work, I play electric guitar and enjoy film and travel.</p>
     
        <p style="display: block; ">You can download my CV <a href="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/Oli Thompson CV.pdf" target="_blank">
                <strong> here</strong></a>.</p>
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
                <p style="margin: 7px;">Name</p> <input style="margin-left: 7px; margin-bottom: 7px;" type="text" name="name">
                <span class="error"> * <?php echo $nameErr; ?></span>
                <p style="margin: 7px;">Email</p> <input style="margin-left: 7px; margin-bottom: 7px;" type="text" name="email">
                <span class="error"> * <?php echo $emailErr; ?></span>
                <p style="margin: 7px;">Message</p><textarea style="margin-left: 7px; margin-bottom: 7px;" name="message" rows="6" cols="35"></textarea><br />
                <br>
                <input class="dropbtn" style="margin-left: 7px; margin-right: 10px" type="submit" value="Send"><input class="dropbtn" type="reset" value="Clear">
            </form>
        </div>
        <h3 style="padding-top: 90px;">Software Competencies</h3>
        <img class="hero" style="padding-bottom: 0px; padding-top: 10px; max-width: 800px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/software.png ">
    </div>
</body>
<?php include('partials/footer.php') ?>
<script src="javascript/navbar.js"></script>

</html>