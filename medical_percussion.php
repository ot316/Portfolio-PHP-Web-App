<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Medical Percussion</title>
</head>

<div class="bachground" ;>
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <h1 style="text-align: center; padding-top: 30px;">Medical Percussion Research</h1>
            <div class="tagcontainer">
                <h2>Research</h2>
                <h2>Machine Learning</h2>
                <h2>Robotics</h2>
                <h2>Python</h2>
                <h2>Matlab</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>I co-authored a research project where we quantified medical percussion for the first time! We designed a percussion robotic device and collected data from silicon samples. We used wavelet transform and neural networks to analyse the data and build a predictive model. </li>
            </ul>
            <video class="herovideo" controls>
                <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/medical_percussion/presentations.mp4" type="video/mp4">
                Please change browser to view video.
            </video>
            <h3 style="padding-top: 10px">Both presentation videos back to back.</h3>
            <p>
                A mathematical model was developed in MATLAB and was used to inform the design of a 3D printed percussion device, that could be programmed to percuss a silicon phantom.
            </p>
            <img class="hero" style="padding-top: 0px; padding-bottom: 10px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/medical_percussion/robot_device.png">
            <h3>MATLAB model and robotic device CAD</h3>
            <p>
                The force was measured using a load cell and compared to the force profile of a manual medical percussion.
            </p>
            <img class="hero" style="padding-top: 0px; padding-bottom: 10px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/medical_percussion/force.png">
            <h3>Comparison of force profiles</h3>
            <p>
                A contact microphone was used to collect the acoustic response from several hundred percussion events. The audio samples were trimmed and de-noised with Matlab and Python scripts. 
            </p>
            <img class="hero" style="padding-top: 0px; padding-bottom: 10px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/medical_percussion/setup.png">
            <h3>Experimental Setup</h3>
            <p>
                I assigned reference frames to each link of the robots arm using the Denavit-Hartenberg convention.
            </p>
            <img class="hero" style="padding-top: 0px; padding-bottom: 10px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/medical_percussion/acoustic_analysis.png">
            <h3>Scalograms and saliency maps</h3>
            <p>
                Scalograms were generated for each percussion event and these were used to train and validate a convolutional neural network. The CNN was able to classify the presence of a nodule accurately, and saliency maps were used to check which time-variant frequencies informed the neural networks classification.
            </p>
            <img class="hero" style="padding-top: 0px; padding-bottom: 10px; width: 300px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/medical_percussion/neural_network_architecture.png">
            <h3>Neural network architecture</h3>
        </div>
    </div>
</div>

<?php include('partials/footer.php') ?>
<script src="javascript/navbar.js"></script>

</html>