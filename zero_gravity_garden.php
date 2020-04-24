<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Zero Gravity Garden</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <img class="title" style="width: 30%; filter: invert(100); " src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Logo.png" alt="Zero Gravity Garden">
        <div class="tagcontainer">
            <h2>Electronics</h2>
            <h2>Mechatronics</h2>
            <h2>CAD</h2>
            <h2>CFD</h2>
            <h2>Control</h2>
            <h2>C++</h2>
        </div>
        <!-- First Bullet Points -->
        <ul class="headingbullets">
            <li>I independently designed and built a rotating, user programmable hydroponic garden for use in non-arable climates</li>
            <li>I used various sensors to monitor temperature, PH and humidity including a hall effect sensor for closed loop positional feedback.</li>
        </ul>
        <video class="herovideo" controls autoplay>
            <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/herovid.mp4" type="video/mp4">
            Please change browser to view video.
        </video>
        <br>
        <br>
        <br>
        <h2>How it Works</h2>
        <p>The hydroponic system works by rotating the plants on the inside of a large drum around a central light source, sequentially dipping each growing tray in the large trough of nutrient solution in the base. The porous rockwool medium in which the
            plants are grown soaks up this nutrient solution to feed them.
        </p>
        <p>
            An array of sensors relay data to the microcontroller; the PH of the nutrient solution, water level, the ambient temperature and humidity, and the positional data of the rotating drum. Various parameters can be tuned using the rotary encoders such as
            brightness, the circadian duty cycle and the frequency at which the plants are watered. A heating element and a PID control loop keep temperature constant.
        </p>

        <p>
            I conducted a thermal flow simulation to model the heat dissapation from the 4 50W LEDs and their constant current power supply aswell as the airflow from the fans.
        </p>

        <video class="herovideo" loop muted autoplay>
            <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/thermal.mp4" type="video/mp4">
            Please change browser to view video.
        </video>
        <br>
        <br>
        <br>
        <h2>Why Zero Gravity?</h2>
        <p>The hydroponic system rotates the plants constantly through their lifetime, resulting in a net force of 0N. This stops the plants geotropism from working (the biological mechanism by which plants always grow towards the strongest light source)
            and causes them to grow equally in all directions, increasing the volume to yield ratio.
        </p>
        <video class="herovideo" style="padding-bottom: 10px;" muted autoplay>
            <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/garden cad.mp4" type="video/mp4">
            Please change browser to view video.
        </video>
        <br>
        <br>
        <br>
        <h3 style="padding-bottom: 30px;">CAD Process</h3>
        <br>
        <br>
        <br>
        <div class="doublerow">
            <div class="inner">
                <img class="halfimageleft" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/Wiring-Diagram.png">
            </div>
            <div class="inner">
                <img class="halfimageright" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/8.png">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>

        <!-- Slideshow container -->
        <div class="slideshow-container">
            <!-- Full-width images with number-->
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/Untitled-1.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/Powersupply.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/20180811_214312.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/20180811_213656.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/MSGR_PHOTO_FOR_UPLOAD_1533907834512.jpg_1533907837118 1.jpeg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/20180829_151948.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/20180829_151716.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/20180812_110945.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/20180829_153758.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/20180829_151808.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/20180829_151716.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/20180829_151931.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/20180829_151418.jpg" style="width:100%; max-height: 70vh;">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/zero_gravity_garden/Slideshow/MSGR_PHOTO_FOR_UPLOAD_1534086347412.jpg_1534086350762.jpeg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <!-- The dots/circles on the slideshow -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
            <span class="dot" onclick="currentSlide(11)"></span>
            <span class="dot" onclick="currentSlide(12)"></span>
            <span class="dot" onclick="currentSlide(13)"></span>
            <span class="dot" onclick="currentSlide(14)"></span>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="../javascript/slideshow.js"></script>
<script src="../javascript/navbar.js"></script>

</html>