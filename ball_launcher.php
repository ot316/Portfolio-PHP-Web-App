<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Ball Launcher</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <img class="title" style="width: 40%; background-color: white; padding: 10px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/Logo.png" alt="Dog & Ball">
            <div class="tagcontainer">
                <h2>Product&nbsp;Design</h2>
                <h2>Technical&nbsp;Drawing</h2>
                <h2>Electronics</h2>
                <h2>Prototyping</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>My team of 4 designed the first portable electric ball launcher for dogs. This inclusive design project aimed to make owning a dog more accessable for the elderly. </li>
                <li>We designed a fully functional prototype, conducted mass market research, user testing and designed parts for injection moulding with technical drawings.
                </li>
            </ul>
            <br>
            <video class="herovideo" loop controls poster="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/poster.png">
                <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/herovid.mp4" type="video/mp4">
                Please change browser to view video.
            </video>
            <h3 style="padding-top: 15px;">Full project Video</h3>
            <h2 style="padding-top: 35px;">How it Works</h2>
            <p style="margin-top: 10px;"> A servo inside the launcher retracts and allows the ball to fall into the path of a spinning drum. Reloading the ball is achieved by spinning the motor at a slower speed in reverse. The unusual shape of the launcher allows the user to pick
                the ball up without having to bend down (essential for our target user group), and the 3 launch speeds make it suitable for different sizes of dog. The lithium ion battery can be removed for charging and is sealed with an O-ring for safe
                outdoor use.
            </p>
            <video class="herovideo" loop muted autoplay>
                <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/EDPAnimation.55_6.mp4" type="video/mp4">
                Please change browser to view video.
            </video>
            <h3 style="padding-top: 15px;">Product Render Animation</h3>
            <p>Getting the launcher to fire the ball reliably, quietly and efficiently was a huge challenge. I made 3 static testing rigs to fine tune various parameters of the mechanism: the distance between the drum and the ball, the diameter and mass
                of the drum, the feed angle and the motor speed. I also tested various trigger and reload mechanisms.
            </p>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/Test-Rigs.png" alt="Test Rigs">
            <h3 style="padding-top: 15px;">Iterative Test Rigs</h3>
            <br>
            <br>
            <h2>My&nbsp;Contribution</h2>
            <br>
            <ul class="bullets" >
                <li>Design and manufacture of the working Prototype</li>
                <li>All CAD work, product renders and animations</li>
                <li>Design and manufacture of 3 ball launching test rigs</li>
                <li>Designing the housing for injection moulding</li>
                <li>All technical drawings</li>
                <li>Research and design of the safety label</li>
            </ul>
            <br>
            <br>
        </div>
        <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/Packaging.png" alt="Packaging">
        <h3 style="padding-top: 15px;">Packaging</h3>
        <br>
        <br>
        <br>
        <h2>Design for Manufacture</h2>
        <p>The next stage of product development would be sending off technical drawings to be mass produced. As the prototype was entirely 3D printed in 6 large sections, major design changes were required to prepare the product for production. I designed
            an injection moulded clamshell housing along with a suite of technical drawings.</p>
        <img class="hero" style="padding-top: 30px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/Injection,ould.png" alt="Injection Moulded Part">
        <h3 style="padding-top: 15px; padding-bottom: 15px;">Design for Injection Moulding</h3>
        <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/Ball-Thrower-Assembly.png" alt="Technical Drawing">
        <h3 style="padding-top: 15px;">Full Technical Drawing Suite Available <a href="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/technical_drawings/technical_drawings.pdf" target="_blank">Here.</a></h3>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number-->
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/Slideshow/3.png" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/Slideshow/1.png" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/Slideshow/6.png" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/Slideshow/2.png" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/Slideshow/7.png" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ball_launcher/Slideshow/8.png" style="width:100%">
            </div>


            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
        </div>
    </div>
</div>

<?php include('partials/footer.php') ?>
<script src="../javascript/slideshow.js"></script>
<script src="../javascript/navbar.js"></script>


</html>