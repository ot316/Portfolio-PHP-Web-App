<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Gyrocopter Chassis</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/gyrocopter_chassis/logo.svg" alt="PAL V Logo" style="max-width: 50%; display: block; margin: auto; padding-top: 15px;">
            <div class="tagcontainer">
                <h2>FEA</h2>
                <h2>Mechanical&nbsp;Design</h2>
                <h2>Analytical&nbsp;Engineering</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>I designed a model of a PAL-V gyropcopter chassis using FEA, including analysis of frequency, fatigue and static loads in order to meet specific criteria. </li>
                <li>I gained a strong understanding of the finite element analysis process.
                </li>
            </ul>
            <img style="background-color: white; padding-bottom: 20px;" class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/gyrocopter_chassis/FEA1.png" alt="Stress distribution">
            <img class="hero" style="background-color: white" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/gyrocopter_chassis/FEA2.png" alt="Topological analysis">
        </div>
        <br>
        <br>
        <h3>Report</h3>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number-->
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/gyrocopter_chassis/Report/REPORT2.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/gyrocopter_chassis/Report/REPORT3.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/gyrocopter_chassis/Report/REPORT4.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/gyrocopter_chassis/Report/REPORT5.png" style="width:100%">
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


        </div>
        <a href="https://olithompson.s3.eu-west-2.amazonaws.com/Media/gyrocopter_chassis/Report/CAE End of Term Report - Oli Thompson.pdf" target="_blank" download="Oli_Thompson_Gyrocopter_Chassis_Report">
            <h2 class="link">Click here to download full report</h2>
        </a>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="javascript/slideshow.js"></script>
<script src="javascript/navbar.js"></script>

</div>

</html>