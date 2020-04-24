<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Landing Pad</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <h1 style="text-align: center; padding-top: 30px;">Mars Landing Pad</h1>
            <div class="tagcontainer">
                <h2>FEA</h2>
                <h2>CAD</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>I designed several martian landing pads using FEA to ensure it met strict load specifications.</li>
                <li>The final design was constructed at 1/10th scale and tested (on Earth) to validate my predictions.</li>
            </ul>
            <br>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/landing_pad/hero.png">

            <div class="doublerow" style="padding-top: 40px">
                <div class="inner">
                    <img class="halfimageleft" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/landing_pad/Picture1.jpg">
                </div>
                <div class="inner">
                    <img class="halfimageright" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/landing_pad/Picture2.jpg">
                </div>
            </div>
            <h3 style="padding-top: 20px; padding-bottom: 40px;">Stress Analysis and Buckling Mode</h3>
            <p>The FEA correctly predicted the buckling mode as shown in the video below. </p>
            <video class="herovideo" muted autoplay>
                <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/landing_pad/vi.mp4" type="video/mp4">
                Please change browser to view video.
            </video>
            <h3 style="padding-top: 20px;">Testing the Scale Model</h3>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="javascript/navbar.js"></script>

</html>