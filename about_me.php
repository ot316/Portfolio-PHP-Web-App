﻿<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>About Me</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/aboutmepic.png" style=" float: left; padding-top: 20px; padding-right: 25px; padding-bottom: 15px; max-width: 20%;">
        <p style="display: block; padding-top: 20px;"> I'm Oli, a 4th year Design Engineering Masters Student at Imperial College London, continuing my studies with a postgraduate masters in computing science before moving into industry.
        </p>
        <p style="display: block"> I have a deep passion for learning about robotics, technology and engineering and am always working to broaden and deepen my knowledge through self-directed study and personal project work.
        </p>
        <p style="display: block; ">
            I enjoy carrying engineering projects through each level of development, from ideation and user experience design through mechanical and electronic challenges down to the software that make it work and a final prototype.
        </p>

        <br>
        <br>
        <h3 style="padding-top: 0px; padding-bottom: 40px; display: block; font-size: 14px; ">Click <a href="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/Oli Thompson CV.pdf" target="_blank">
                here</a> to download my CV</h3>
                <br>
        <br>
        <div style="border-style: solid; margin: auto; padding: 20px; max-width: 60%";>
        <h3>Contact Form </h3>
            <form action="mail.php" method="POST">
                <p style="margin: 7px;">Name</p> <input type="text" name="name">
                <p style="margin: 7px;">Email</p> <input type="text" name="email">
                <p style="margin: 7px;">Message</p><textarea name="message" rows="6" cols="35"></textarea><br />
                <input style="margin: 7px;" type="submit" value="Send"><input type="reset" value="Clear">
            </form>
        </div>
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