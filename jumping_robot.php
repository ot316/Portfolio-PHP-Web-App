<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Jumping Robot</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <h3 class="wordtitle" style="padding-top: 30px; color: #004b8f;">Jumping Robot</h3>
            <!-- First Bullet Points -->
            <div class="tagcontainer">
                <h2>Analytical&nbsp;Engineering</h2>
                <h2>Technical&nbsp;Drawing</h2>
                <h2>CAD</h2>
                <h2>CFD</h2>
                <h2>FEA</h2>
            </div>
            <ul class="headingbullets">
                <li>I engineered a jumping robot using mathematical and computational engineering analysis to meet strict criteria.
                </li>
                <li>A second year individual project awarded the highest mark in the year.</li>
            </ul>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/JumpingRobot.png" alt="hero image">
            <p style="margin-top: 10px;"> This project involved designing a theoretical jumping robot to meet the following criteria: a jump height and distance of 300mm, a cost below £100, a mass below 200g, and an ip54 rating. The design rationale behind the robot was to be fully
                justified, starting with morphological design, a full mathematical analysis, considerations of manufacture and cost, biomimicry, computer simulations of a fully developed CAD model, and concluding with a suite of technical drawings and
                general assembly drawings.</p>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Self-Righting-propeller-view.png" alt="hero image">
            <img class="hero" style="padding-bottom: 30px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Landing-Scenario-2.png" alt="hero image">
            <h3 style="padding-bottom: 30px;">Self-Righting Geometry</h3>
            <h2 style="padding-top: 25px;">Propulsion</h2>
            <p>The robot uses a variable pitch propeller mechanism that allows it to control the forwards thrust. The propeller is driven by the unraveling winch as the robot launches. A servo connected to a small cam controls the pitch angle.</p>
            <img class="hero" style="padding-bottom: 15px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Annotated-Exploded-Propeller-View.png" alt="Exploded View of Propeller">
            <video class="herovideo" style="padding-bottom: 15px;" loop muted autoplay>
                <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/propanimation.mp4" type="video/mp4">
                Please change browser to view video.
            </video>
            <h3 style="padding-bottom: 20px;">Variable Pitch Propeller Mechanism</h3>
            <h2 style="padding-top: 25px;">Transmission</h2>
            <p>The winding mechanism is driven by a small DC motor that uses a harmonic drive as transmission. This gives advantages such as high gear reductions in minimal space, no backlash, reversibility and minimal components. the output of the transmission
                winds up a sprung leg, that stores the potential energy the robot needs to launch. By reversing the motor the helical gears change the direction of their axial thrust and the trigger mechanism disengages, allowing the robot to spring upwards.</p>
            <img class="hero" style="padding-bottom: 15px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Detailed-CAD-Model.png" alt="Gearbox and Transmission">
            <video class="herovideo" style="padding-bottom: 15px;" loop muted autoplay>
                <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/transmission.mp4" type="video/mp4">
                Please change browser to view video.
            </video>
            <h3 style="padding-bottom: 20px;">Gearbox and Transmission Mechanism</h3>
            <h2 style="padding-top: 25px;">CFD</h2>
            <p>I conducted an iterative flow simulation on the propeller and rudder assembly in order to verify the manual calculations. The thrust force on the propeller blades was the goal of the study and the angle of the blades was automatically changed
                each time the study was run. This allowed me to predict which angles produced the largest thrust. </p>
            <video class="herovideo" style="padding-bottom: 15px;" loop muted autoplay>
                <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/flowsim.mp4" type="video/mp4">
                Please change browser to view video.
            </video>
            <h3 style="padding-bottom: 20px;">Flow Simulation Animation</h3>
            <h2 style="padding-top: 25px;">FEA</h2>
            <p>FEA was conducted on areas of potential failure. The results informed iterative design changes.</p>
            <img class="hero" style="padding-bottom: 15px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Housing-FEA.png" alt="FEA">
            <h3>FEA Process</h3>
            <p>A full mathematical analysis was conducted on the design, starting with an iterative Matlab code to find the launch velocity required to achieve the desired jump distance. The geometry of the gears and shafts were calculated to withstand the
                predicted torques and mitigate any key failure modes. Aerodynamic calculations were also carried out in order to find the force required on each propeller blade to achieve the horizontal distance. Full calculations and technical drawings
                along with much more are detailed in the report below.</p>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Gizmo-Assembly---Oli-Thompson.png" alt="Technical Drawing">
            <h3 style="padding-top: 15px;">Full Technical Drawing Suite Available <a href="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Technical Drawings/Freewheel Mechanism and Winch 2.6-merged.pdf" target="_blank">Here.</a></h3>
            <h3>Report</h3>
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number-->
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Report/Gizmo Report2.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Report/Gizmo Report3.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Report/Gizmo Report4.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Report/Gizmo Report5.png" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Report/Gizmo Report6.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Report/Gizmo Report7.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Report/Gizmo Report8.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Report/Gizmo Report9.png" style="width:100%">
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
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>

            </div>
            <a href="https://olithompson.s3.eu-west-2.amazonaws.com/Media/jumping_robot/Report/Gizmo Report - Oli Thompson.pdf" target="_blank">
                <h2 class="link">Click here to download full report</h2>
            </a>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="javascript/slideshow.js"></script>
<script src="javascript/navbar.js"></script>

</html>