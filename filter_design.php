<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Design</title>
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
                <?php include('project_partials/embla.php') ?>
                <?php include('project_partials/perfume_bracelet.php') ?>
                <?php include('project_partials/double_necked_guitar.php') ?>
            </div>
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/portfolio_webapp.php') ?>
                <?php include('project_partials/ball_launcher.php') ?>
                <?php include('project_partials/submarine_interior.php') ?>
            </div>
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/custom_computer.php') ?>
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