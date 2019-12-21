<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Custom VPN</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <h1 style="text-align: center; padding-top: 30px;">Custom VPN</h1>
            <div class="tagcontainer">
                <h2>Network</h2>
                <h2>Linux</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>I rented a virtual machine in the cloud and used Open VPN to configure my own VPN server.</li>
                <li>I installed the PiHole software onto the server to implement DNS level, network-wide advert and malware blocking.</li>
            </ul>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/custom_vpn/custom_vpn.png" alt="hero image">
            <h3 style="padding-top: 20px;">PiHole GUI</h3>
            <p>The VPN runs on a ScaleWay linux machine and is cheaper and arguably more secure than the market equivalent. Connection speed is increased as around 15% of DNS queries are blocked and I can add my own DNS blacklists from any connected device. </p>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="../javascript/navbar.js"></script>

</html>