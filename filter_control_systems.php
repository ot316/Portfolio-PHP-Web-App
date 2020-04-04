<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Control Systems</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <?php include('partials/filter.php') ?>
        <!-- Project Pictures -->
        <div class="bigpicwrapper" id="bigpicwrapper">
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/zero_gravity_garden.php') ?>
                <?php include('project_partials/baxter_robot.php') ?>
                <?php include('project_partials/gizmo.php') ?>
            </div>
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/autonomous_drone.php') ?>
                <?php include('project_partials/empty.php') ?>
                <?php include('project_partials/empty.php') ?>

            </div>
        </div>
    </div>
</div>

<?php include('partials/footer.php') ?>
<script src="../javascript/pic_wrapper.js"></script>
<script src="../javascript/navbar.js"></script>


</html>