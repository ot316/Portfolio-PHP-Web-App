<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head_homepage.php') ?>
    <title>Web and Network</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <?php include('partials/filter.php') ?>
        <!-- Project Pictures -->
        <div class="bigpicwrapper" id="bigpicwrapper">
            <div class="picwrapper" id="picwrapper">
            <?php include('project_partials/smart_mirror.php') ?>
            <?php include('project_partials/portfolio_webapp.php') ?>
            <?php include('project_partials/ISS_tracker.php') ?>
            </div>
            <div class="picwrapper" id="picwrapper">
            <?php include('project_partials/game_of_life.php') ?>
            <?php include('project_partials/custom_vpn.php') ?>
            <?php include('project_partials/empty.php') ?>
            </div>
        </div>
    </div>
</div>

<?php include('partials/footer.php') ?>
<script src="../javascript/pic_wrapper.js"></script>
<script src="../javascript/navbar.js"></script>


</html>