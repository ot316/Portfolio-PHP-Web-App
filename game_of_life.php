<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <link rel="stylesheet" href="./stylesgameoflife.css">
    <title>Game of Life</title>
    <script src="javascript/p5/p5.min.js"></script>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div id="width" class="wrapper">
        <div>
            <!-- Heading -->
            <h1 style="text-align: center; padding-top: 30px;">Game of life</h1>
            <div class="tagcontainer">
                <h2>Front End Web Development</h2>
                <h2>Javascript</h2>
                <h2>HTML</h2>
                <h2>CSS</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>I built a Javascript implementation of Conway's game of life. </li>
                <li>Click the canvas to restart. </li>
            </ul>
            <div>
                <canvas onclick="setup()" id="Canvas" style="margin-top: 40px; margin-bottom: 40px; border:3px solid grey;" class="Canvas"></canvas>
            </div>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="javascript/game_of_life.js"></script>
<script src="javascript/navbar.js"></script>

</html>