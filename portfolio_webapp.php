<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Portfolio Website</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <h1 style="text-align: center; padding-top: 30px;">Portfolio Webapp</h1>
            <div class="tagcontainer">
                <h2>Web Dev</h2>
                <h2>Linux</h2>
                <h2>PHP</h2>
                <h2>JS</h2>
                <h2>HTML</h2>
                <h2>CSS</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>I coded my own responsive, dynamic portfolio webapp from scratch using self-taught PHP, HTML, CSS and Javascript. </li>
                <li>I configured and hosted the webapp using heroku and Amazon web storage facilities, allowing me to implement changes easily. </li>
            </ul>
            <img class="hero" style="padding-top: 20px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/portfolio_website/Portfolio.png">
            <h3 style="padding-bottom: 50px; padding-top: 20px;">Designed to work across multiple devices and browsers</h3>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?> <script src="javascript/navbar.js">
    </script>

</html>