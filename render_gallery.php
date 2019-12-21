<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head_homepage.php') ?>
    <title>Render Gallery</title>
</head>

<div class="background">
<?php include('partials/banner.php') ?>
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