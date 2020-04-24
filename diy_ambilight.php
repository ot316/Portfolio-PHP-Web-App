<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Diy Ambilight</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <h1 style="text-align: center; padding-top: 30px;">Diy Ambilight</h1>
        <div class="tagcontainer">
            <h2>Electronics</h2>
            <h2>Raspberry&nbsp;Pi</h2>
            <h2>Linux</h2>
        </div>
        <!-- First Bullet Points -->
        <ul class="headingbullets">
            <li>I used the hyperion framework to implement my own Raspberry Pi based ambilight system compatible with any HDMI input. </li>
        </ul>
        <video class="herovideo" loop muted autoplay>
            <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ambilight/20181024_1311052.mp4" type="video/mp4">
            Please change browser to view video.
        </video>
        <br>
        <br>
        <h2>How It Works</h2>
        <p>The HDMI signal is converted to an analogue PAL video format, where a usb frame grabber passes it to the Raspberry Pi. The hyperion service calculates the matching colours and lights up the addressable LEDs over an SPI bus.
        </p>
        <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ambilight/Final annotated back of tv.png" alt="hero image">
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="../javascript/navbar.js"></script>

</html>