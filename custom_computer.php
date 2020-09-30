<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Custom Computer</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <h1 style="text-align: center; padding-top: 30px;">Custom Computer</h1>
            <div class="tagcontainer">
                <h2>Product Design</h2>
                <h2>CAD</h2>
                <h2>Linux</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>I designed and built my own wall mounted computer with custom CNC machined parts. The computer is setup to run linux and windows from separate harddrives.</li>
            </ul>
            <br>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/custom_computer/Computer.png" alt="hero image">
            <br>
            <br>
            <p>I started by creating a CAD model of the back plate for laser cutting. I used carbon fibre automotive vinyl as a surface finish.</p>
            <div class="doublerow">
                <div class="inner">
                    <img class="halfimageleft" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/custom_computer/Cad.jpg" style="max-height: 370px">
                </div>
                <div class="inner">
                    <img class="halfimageright" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/custom_computer/wip.png" style="max-height: 370px">
                </div>
            </div>
            <h3 style="padding-top: 20px;">Laser Cut Back Plate</h3>
            <br>
            <br>
            <p>To mount the power supply I designed a sheet metal component and manufactured it with a plasma cutter and shear press brake.</p>
            <div class="doublerow">
                <div class="inner">
                    <img class="halfimageleft" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/custom_computer/plasma.png" style="max-height: 370px">
                </div>
                <div class="inner">
                    <img class="halfimageright" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/custom_computer/brake.png" style="max-height: 370px">
                </div>
            </div>
            <h3 style="padding-top: 20px;">Plasma Cut PSU Mount</h3>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="../javascript/navbar.js"></script>

</html>