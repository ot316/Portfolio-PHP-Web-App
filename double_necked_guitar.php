<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Double Necked Guitar</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <h1 style="text-align: center; padding-top: 30px;">Double Necked Guitar</h1>
            <div class="tagcontainer">
                <h2>Product Design</h2>
                <h2>User Experience</h2>
                <h2>Electronics</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>For my A-level design and technology project I designed and built a double necked electric guitar completely from scratch. </li>
                <li>I combined traditional woodworking methods with CAD and CNC machinging.
                </li>
            </ul>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/double_necked_guitar/hero.png">
            <h3 style="padding-bottom: 20px; padding-top: 20px;">Finished Project</h3>
            <p>The guitar features neck-through construction, multiply binding, abalone fretboard inlays and headstock overlays and underlays. These are features only found on high-end guitars.</p>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/double_necked_guitar/Slideshow/10.png">
            <h3 style="padding-bottom: 50px;">Technical Plan</h3>

            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number-->
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/double_necked_guitar/Slideshow/1.png" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/double_necked_guitar/Slideshow/2.png" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/double_necked_guitar/Slideshow/3.png" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/double_necked_guitar/Slideshow/4.png" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/double_necked_guitar/Slideshow/5.png" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/double_necked_guitar/Slideshow/6.png" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/double_necked_guitar/Slideshow/7.png" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/double_necked_guitar/Slideshow/8.png" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/double_necked_guitar/Slideshow/9.png" style="width:100%">
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
                <span class="dot" onclick="currentSlide(9)"></span>
            </div>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="../javascript/slideshow.js"></script>
<script src="../javascript/navbar.js"></script>

</html>