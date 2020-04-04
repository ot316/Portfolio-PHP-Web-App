<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Software</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <?php include('partials/filter.php') ?>
        <!-- Project Pictures -->
        <div class="bigpicwrapper" id="bigpicwrapper">
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/baxter_robot.php') ?>
                <?php include('project_partials/smart_mirror.php') ?>
                <?php include('project_partials/rollercoaster_optimisation.php') ?>
            </div>
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/matlab_robotic_arm.php') ?>
                <?php include('project_partials/autonomous_drone.php') ?>
                <?php include('project_partials/big_data.php') ?>
            </div>
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/ISS_tracker.php') ?>
                <?php include('project_partials/portfolio_webapp.php') ?>
                <?php include('project_partials/illumuitar.php') ?>
            </div>
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/linear_regression.php') ?>
                <?php include('project_partials/matlab_for_engineering.php') ?>
                <?php include('project_partials/zero_gravity_garden.php') ?>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('partials/footer.php') ?>
<script src="../javascript/pic_wrapper.js"></script>
<script src="../javascript/navbar.js"></script>

</html>