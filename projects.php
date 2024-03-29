﻿<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Projects</title>
    <link rel="stylesheet" href="./css/stylehomepage.css">
    <script src="javascript/jquery-3.4.1.min.js"></script>
</head>

<body class="background">
    <?php include('partials/loader.php') ?>
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <?php include('partials/filter.php') ?>
        <!-- Project Pictures -->
        <div class="bigpicwrapper" id="bigpicwrapper">
            <div class="picwrapper">
                <?php include('project_partials/smart_mirror.php') ?>
                <?php include('project_partials/baxter_robot.php') ?>
                <?php include('project_partials/medical_percussion.php') ?>
            </div>


            <div class="picwrapper">
                <?php include('project_partials/zero_gravity_garden.php') ?>
                <?php include('project_partials/illumuitar.php') ?>
                <?php include('project_partials/autonomous_drone.php') ?>
            </div>


            <div class="picwrapper">
                <?php include('project_partials/rollercoaster_optimisation.php') ?>
                <?php include('project_partials/ball_launcher.php') ?>
                <?php include('project_partials/matlab_robotic_arm.php') ?>
            </div>


            <div class="picwrapper">
                <?php include('project_partials/gizmo.php') ?>
                <?php include('project_partials/portfolio_webapp.php') ?>
                <?php include('project_partials/jumping_robot.php') ?>
            </div>


            <div class="picwrapper">
                <?php include('project_partials/ISS_tracker.php') ?>
                <?php include('project_partials/big_data.php') ?>
                <?php include('project_partials/embla.php') ?>
            </div>


            <div class="picwrapper">
                <?php include('project_partials/double_necked_guitar.php') ?>
                <?php include('project_partials/programmable_pet_feeder.php') ?>
                <?php include('project_partials/perfume_bracelet.php') ?>
                
            </div>


            <div class="picwrapper">
                <?php include('project_partials/game_of_life.php') ?>
                <?php include('project_partials/custom_computer.php') ?>
                <?php include('project_partials/gyrocopter_chassis.php') ?>
            </div>
            <br>
            <br>
            <br>
            <br>
            <h2>Smaller Projects</h2>
            <div class="picwrapper">
                <?php include('project_partials/custom_vpn.php') ?>
                <?php include('project_partials/diy_ambilight.php') ?>       
                <?php include('project_partials/diy_desklamp.php') ?>
            </div>
            <div class="picwrapper">
                <?php include('project_partials/landing_pad.php') ?>
                <?php include('project_partials/submarine_interior.php') ?>
                <?php include('project_partials/empty.php') ?>
            </div>

            <div class="picwrapper">
            </div>
        </div>
    </div>
    <?php include('partials/footer.php') ?>
</body>
<script src="../javascript/pic_wrapper.js"></script>
<script src="../javascript/navbar.js"></script>
<script src="../javascript/loader.js"></script>


</html>