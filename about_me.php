<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>About Me</title>
</head>

<div class="background">
    <!-- Banner, Navigation bar and Sidenav Bar -->
<div class="banner">
    <div class="banner-content">
        <img class="logo" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/Website Icon.png" alt="Logo">
        <h1>Oli&nbsp;Thompson</h1>
        <div class="socialmediacontainer">
            <a href="http://www.linkedin.com/in/oli-thompson" target="_blank">
                <img class="socialmedialogo" alt="Linkedin" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Linkedin.svg"></a>
            <a href="https://github.com/ot316" target="_blank">
                <img class="socialmedialogo" alt="Github" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Github.svg"></a>
            <a href="https://www.instagram.com/olithompson_designengineer/" target="_blank">
                <img class="socialmedialogo" alt="Instagram" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Instagram.png"></a>
        </div>
    </div>
</div>
<img class="logomobile" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/Website Icon.png" alt="Logo">
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">
        <p class="sidenavtext">Projects</p>
    </a>
    <a href="about_me.php">
        <p class="sidenavtext">About&nbsp;Me</p>
    </a>
    <a href="render_gallery.php">
        <p class="sidenavtext">Render&nbsp;Gallery</p>
    </a>
    <a href="digital_art.php">
        <p class="sidenavtext">Digital&nbsp;Art</p>
    </a>
    <div class="socialmediacontainermobile">
        <a href="https://www.instagram.com/olithompson_designengineer/" target="_blank">
            <img class="socialmedialogomobile" alt="Instagram" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Instagram.png"></a>
        <a href="https://github.com/ot316" target="_blank">
            <img class="socialmedialogomobile" alt="Github" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Github.svg"></a>
        <a href="http://www.linkedin.com/in/oli-thompson" target="_blank">
            <img class="socialmedialogomobile" alt="Linkedin" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Linkedin.svg"></a>
    </div>
</div>
<span class="sidenavbutton" onclick="openNav()">&#9776;</span>
<div class="navbarwrapper">
    <div class="navbar">
        <ul>
            <li><a href="index.php">Projects</a></li>
            <li><a class="active" href="about_me.php">About Me</a></li>
            <li><a href="render_gallery.php"> Render Gallery</a></li>
            <li><a href="digital_art.php">Digital Art</a></li>
        </ul>
    </div>
</div>
<br>
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
                <br><br>
        <h3>Contact Form </h3>
        <br>
        <div style="border-style: solid; margin: auto; padding: 20px; max-width: 60%";>
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