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
                <h2>Web&nbsp;Dev</h2>
                <h2>Linux</h2>
                <h2>PHP</h2>
                <h2>JS</h2>
                <h2>MySQL</h2>
                <h2>HTML</h2>
                <h2>CSS</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>I coded my own responsive portfolio webapp from scratch using self-taught PHP, HTML, CSS and Javascript. </li>
                <li>I self hosted it on a Linux, apache, MySQL and PHP server and setup more advanced features such as a login system and a search functionality</li>
            </ul>
            <img class="hero" style="padding-top: 20px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/portfolio_website/Portfolio.png">
            <h3 style="padding-top: 20px;">Designed to work across multiple devices and browsers</h3>
            <br>
            <br>
            <br>
            <h2>Features</h2>
            <p>The <a href='admin' style="color: blue;">Admin page </a> allows me to view the responses to the contact form, these are stored in a MySQL database. The <a href='deploy' style="color: blue;">Github deployment page </a>triggers a series of git commands to update the web app. I setup a github web hook to visit this page on every push. I have also setup google analytics to visualise web traffic and to show me which projects users visit.</p><br><br>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?> <script src="javascript/navbar.js">
</script>

</html>