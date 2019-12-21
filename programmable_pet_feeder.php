<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Programmable Pet Feeder</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <h1 style="text-align: center; padding-top: 30px;">Programmable Pet Feeder</h1>
            <div class="tagcontainer">
                <h2>Electronics</h2>
                <h2>PCB Design</h2>
                <h2>Product Design</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>For my GCSE electronics project I built a user programmable pet feeder that dispensed food from a tank at set intervals. </li>
                <li>I designed and manufactured custom PCBs with a UV mask and acid etch tank.</li>
            </ul>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/programmable_pet_feeder/hero.png">
            <p>The project was built around a PIC microcontroller and uses a seven segment display driven by a 7447 BCD Chip. A stepper motor rotates the food bowl under the resevoir in order to refill it.</p>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/programmable_pet_feeder/dual.png">
            <h3 style="padding-top: 20px;">Custom PCBs and Underside View</h3>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="javascript/navbar.js"></script>

</html>