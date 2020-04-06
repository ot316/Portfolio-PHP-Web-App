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
                <h2>Software</h2>
                <h2>Web Dev</h2>
                <h2>JS</h2>
                <h2>HTML</h2>
                <h2>CSS</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>I built an Interactive Javascript implementation of Conway's game of life. </li>
                <li>Click the canvas to restart. </li>
            </ul>
            <div>
                <canvas onclick="setup()" id="Canvas" style="margin-top: 40px; margin-bottom: 40px; border:3px solid grey;" class="Canvas"></canvas>
            </div>
            <br>
            <div class="colourpickercontainer">
                <br>
                <h5 style="font-size:24px;"> Colour Picker</h5>
                <br>
                <input class="hueslider" id="hueslider" type="range" min="0" max="255" value="241" step="1" onchange="setHueValue()" />
                <br>
                <input class="satslider" id="satslider" type="range" min="0" max="100" value="95" step="1" onchange="setHueValue()" />
                <br>
                <input class="lumslider" id="lumslider" type="range" min="0" max="100" value="56" step="1" onchange="setHueValue()" />
                <br>
                <br>
                <h3>HSV Colour: <label id="huelabel" for="hueslider"></label> <label id="satlabel" for="satslider"></label> <label id="lumlabel" for="lumslider"></label></h3>
                <br>
            </div>
            <br>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="javascript/game_of_life.js"></script>
<script src="javascript/navbar.js"></script>

</html>