<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Art Renders </title>
    <link rel="stylesheet" href="./css/stylehomepage.css">
    <link rel="stylesheet" href="./css/rendersandart.css">
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Art -->
        <h2>Photoshop</h2>
        <p class="paragraph_heading"> My experimentation with photo-manipulation using photoshop.</p>
        <!-- Project Pictures -->
        <div class="bigpicwrapper" id="bigpicwrapper">
            <div class="picwrapper" id="picwrapper" style="padding-top: 5px;">
                <div class="piccontainer">
                    <img id="img6" class="third" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/digital_art/Cloud-City.png" alt="Project">
                </div>
                <div class="piccontainer" id="picwrapper">
                    <img id="img7" class="third" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/digital_art/Snail-City-desaturated.png" alt="Project">
                </div>
                <div class="piccontainer" id="picwrapper">
                    <img class="thirdplaceholder" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/placeholder.png" alt="Project">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="wrapper">
        <!-- Renders -->
        <h2>Renders</h2>
        <p class="paragraph_heading"> Renders using keyshot, some are part of projects and others are just for fun.</p>
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
    <br>
    <br>
    <div class="wrapper">
        <!-- PCBs -->
        <h2>PCBs</h2>
        <p class="paragraph_heading"> Various PCBs I have designed for different projects.</p>
        <!-- Project Pictures -->
        <div class="bigpicwrapper" id="bigpicwrapper">
            <div class="picwrapper" id="picwrapper" style="padding-top: 5px;">
                <div class="piccontainer">
                    <img id="img8" class="third" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/PCBs/Charger_PCB.png" alt="Project">
                </div>
                <div class="piccontainer" id="picwrapper">
                    <img id="img9" class="third" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/PCBs/guitar_pcb.png" alt="Project">
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
<script src="javascript/modal.js"></script>
<script src="javascript/navbar.js"></script>


</html>