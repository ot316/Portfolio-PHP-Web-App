<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Render Gallery</title>
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
    <a href="/" style="margin-top: 75px;">
        <p class="sidenavtext">Projects</p>
    </a>
    <a href="about_me">
        <p class="sidenavtext">About&nbsp;Me</p>
    </a>
    <a href="render_gallery">
        <p class="sidenavtext">Render&nbsp;Gallery</p>
    </a>
    <a href="digital_art">
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
            <li><a href="/">Projects</a></li>
            <li><a href="about_me">About Me</a></li>
            <li><a class="active" href="render_gallery"> Render Gallery</a></li>
            <li><a href="digital_art">Digital Art</a></li>
        </ul>
    </div>
</div>
<br>
    <div class="wrapper">
        <!-- Heading -->
        <p> All original renders, some are part of projects and others are independent.</p>
        <!-- Project Pictures -->
        <div class="bigpicwrapper" id="bigpicwrapper">
            <div class="picwrapper" id="picwrapper" style="padding-top: 5px;">
                <div class="piccontainer">
                    <img id="img1" class="third" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/renders/bottle.png" alt="Project">
                </div>
                <div class="piccontainer" id="picwrapper">
                    <img id="img2" class="third" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/renders/pedal.png" alt="Project">
                </div>
                <div class="piccontainer" id="picwrapper">
                    <img id="img3" class="third" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/renders/turntable.png" alt="Project">
                </div>
            </div>
            <div style="padding-top: 25px;" class="picwrapper" id="picwrapper">
                <div class="piccontainer">
                    <img id="img4" class="third" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/renders/bracelet.png" alt="Project">
                </div>
                <div class="piccontainer" id="picwrapper">
                    <img id="img5" class="third" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/renders/balllauncher.png" alt="Project">
                </div>
                <div class="piccontainer" id="picwrapper">
                    <img style="max-width: 260px;" class="thirdplaceholder" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/placeholder.png" alt="Project">
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<?php include('partials/modal.php') ?>
<script src="../javascript/modal.js"></script>
<script src="../javascript/navbar.js"></script>

</html>