<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head_homepage.php') ?>
    <title>Digital Art</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <p> My experimentation with photo-manipulation using photoshop.</p>
        <!-- Project Pictures -->
        <div class="bigpicwrapper" id="bigpicwrapper">
            <div class="picwrapper" id="picwrapper" style="padding-top: 5px;">
                <div class="piccontainer">
                    <img id="img1" class="third" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/digital_art/Cloud-City.png" alt="Project">
                </div>
                <div class="piccontainer" id="picwrapper">
                    <img id="img2" class="third" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/digital_art/Snail-City-desaturated.png" alt="Project">
                </div>
                <div class="piccontainer" id="picwrapper">
                    <img class="thirdplaceholder" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/placeholder.png" alt="Project">
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