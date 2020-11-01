<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Analytical Engineering</title>
    <link rel="stylesheet" href="./css/stylehomepage.css">
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <?php include('partials/filter.php') ?>

        <!-- Project Pictures -->
        <div class="bigpicwrapper" id="bigpicwrapper">
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/jumping_robot.php') ?>
                <?php include('project_partials/rollercoaster_optimisation.php') ?>
                <?php include('project_partials/gyrocopter_chassis.php') ?>
            </div>

            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/landing_pad.php') ?>
            </div>
        </div>
    </div>
</div>

<?php include('partials/footer.php') ?>
<script src="../javascript/pic_wrapper.js"></script>
<script src="../javascript/navbar.js"></script>

</html>