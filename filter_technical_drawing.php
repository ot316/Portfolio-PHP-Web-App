<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Technical Drawing</title>

</head>

<div class="background">
<?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <?php include('partials/filter.php') ?>
            <!-- Project Pictures -->
            <div class="bigpicwrapper" id="bigpicwrapper" style="padding-bottom: 200px;">
                <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/jumping_robot.php') ?>
                <?php include('project_partials/ball_launcher.php') ?>
                <?php include('project_partials/empty.php') ?>
                </div>
            </div>
        </div>
    </div>

    <?php include('partials/footer.php') ?>
    <script src="../javascript/pic_wrapper.js"></script>
    <script src="../javascript/navbar.js"></script>

</html>