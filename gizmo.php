<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Gizmo</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <img class="title" style="width: 40%;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/Title.png" alt="Gizmo">
            <div class="tagcontainer">
                <h2>Electronics</h2>
                <h2>Raspberry Pi</h2>
                <h2>Python</h2>
                <h2>Computer Vision</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>We built an interactive robotic pet for different users to interact with and keep alive. My contribution included the aesthetic, mechanical and electronic design of the robot and its enclosure.
                </li>
            </ul>
            <video class="herovideo" controls poster="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/Gi1.png">
                <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/gizmohero.mp4" type="video/mp4">
                Please change browser to view video.
            </video>
            <h2>How it Works</h2>
            <p>Gizmo uses a webcam to track his own location and orientation and the presence of various interactive objects inside his enclosure. Once an object is moved into view by a user Gizmo will either feed, dance, kick the ping pong ball or go to
                sleep. His wellbeing is tracked by incrementing different variables; if he goes too long without food or sleep gizmo will die. Fortunately he can be resurrected.
            </p>
            <img class="hero" style="background-color: white;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/foodsleep.png" alt="gizmo">
            <img class="hero" style="background-color: white;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/playdie.png" alt="gizmo">
            <h3>User Interactions</h3>
            <p>Gizmo formed one 30cm x 30cm "pixel" in a wall of interactive exhibits at the end of year showcase. Users successfully collaborated to keep him alive
            </p>
            <img class="hero" style="padding-bottom: 15px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/gizmo7.jpg" alt="gizmo">
            <h3>Gizmo in Situe</h3>
            <p>Gizmo is built around a raspberry pi with an HDMI screen. His facial animations were designed in Adobe character animator and played as MP4 files. There are 2 motors to allow him to move and steer, a servo to look up and down, an amplifier
                and speaker to play sound files, addressable LEDs and electroluminescent wire; all packed into a form factor less than 10cm<sup>3</sup>.
            </p>
            <img class="hero" style="padding-bottom: 15px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/exploded-view.png">

            <h3 style="padding-bottom: 15px;">Exploded View</h3>
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number-->
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/Slideshow/gizmo-simplecv.png" style="width: 100%;">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/Slideshow/gizmoservolinkage.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/Slideshow/Gizmo screen.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/Slideshow/Gizmo-lights-and-leds.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/Slideshow/GIzmo motor pulley.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/Slideshow/1.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/Slideshow/gizmo coding photo.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Gizmo/Slideshow/gizmo-gearbox.png" style="width:100%">

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
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
            </div>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="javascript/slideshow.js"></script>
<script src="javascript/navbar.js"></script>

</div>

</html>