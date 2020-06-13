<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Illumuitar</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <img class="title" style="width: 60%; background-color: white; padding: 10px; padding-top: 35px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Illumuitar/title.png" alt="Illumuitar">
            <div class="tagcontainer">
                <h2>Electronics</h2>
                <h2>PCB&nbsp;Design</h2>
                <h2>C++</h2>
                <h2>Signal&nbsp;Processing</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>My group of 3 built an Audio Spectrum visualiser and guitar tuner and displayed them through a custom LED matrix on the face of a guitar. </li>
                <li>I designed, assembled and programmed a custom PCB and used time and frequency domain signal processing.
                </li>
            </ul>
            <video class="herovideo" controls poster="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Illumuitar/me-tuning.png">
                <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Illumuitar/illumuitarhero.mp4" type="video/mp4">
                Please change browser to view video.
            </video>
            <br>
            <br>
            <h2>How it Works</h2>
            <p>The guitar has two main functions; The spectrum visualiser works by applying a Fast Hartley Transform algorithm to a microphone input and splitting the detected frequencies logarithmically into 8 bins. These are then scaled and displayed on
                the LED matrix through a look up table.
            </p>
            <PRE class="code">maparray[5] = map(fht_oct_out[5],35,120,0,15);
  for (int m=0; m &lt;=6; m++){ //iterate through frequency bins
    for(int j=(26-(4*m)); j >= (26-(4*(m+1))); j--){ //iterate across matrix
       for(int i=0; i &lt;= maparray[m]; i++){
        if ((lookuptable[i][j] != 0) && (i &lt; 16) && (j &gt;=0)) { //find corresponding value in looKup table
          strip.setPixelColor(lookuptable[i][j]-1, r,g,b); //set colour
        }
        for(byte k = 15; k &gt; maparray[m]; --k){ //turn all the other LEDs off
          if ((lookuptable[k][j] != 0) && (j &gt;=0)){
          strip.setPixelColor(lookuptable[k][j]-1, 0,0,0);</PRE>
            <p>The guitar tuner takes the analog output from the guitar's pickups and amplifies the signal to 5V. A DC offset of 2.5V is applied to keep the signal positive. This signal can then be read by the 10-bit ADC of the Atmega MCU and an autocorrelation
                method is used to detect precise frequencies and compare them to the known correct values.
            </p>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Illumuitar/Schematic_Audio-Schematic_Sheet-1_20190331160903.png" alt="Circuit Schematic">
            <h3 style="padding-bottom: 30px;">Circuit Schematic</h3>
            <br>
            <br>
            <div class="doublerow">
                <div class="inner">
                    <img class="halfimageleft" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Illumuitar/20190316_130751.jpg.png" alt="PCB Render">
                </div>
                <div class="inner">
                    <img class="halfimageright" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Illumuitar/pcbrender.png" alt="Office Image">
                </div>
            </div>
            <br>
            <br>
            <div>
                <h2>My&nbsp;Contribution</h2>
                <br>
                <ul class="bullets">
                    <li>I generated the circuit schematics</li>
                    <li>I designed and populated the custom PCB</li>
                    <li>I programmed the look-up table and the spectrum visualiser in C++</li>
                    <li>I was responsible for a large part of the mechanical design and manufacture</li>
                </ul>
                <br>
                <br>
                <h3>Report</h3>
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number-->
                    <div class="mySlides fade">
                        <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Illumuitar/OliThompsonAudioReport/OliThompsonAudioReport-1.png" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Illumuitar/OliThompsonAudioReport/OliThompsonAudioReport-2.png" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Illumuitar/OliThompsonAudioReport/OliThompsonAudioReport-3.png" style="width:100%">
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
                </div>
                <a href="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Illumuitar/OliThompsonAudioReport.pdf" target="_blank" download="Oli_Thompson_EMBLA_Report">
                    <h2 class="link">Click here to download full report</h2>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?> <script src="javascript/slideshow.js">
    </script>
    <script src="javascript/navbar.js"></script>

</html>