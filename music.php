<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Music</title>
    <link rel="stylesheet" href="./css/stylehomepage.css">

</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <br>
    <div class="wrapper">
        <!-- Heading -->
        <p> My electric guitar music, some are covers and some are originals.</p>
        <!-- Project Pictures -->
        <div class="bigpicwrapper" id="bigpicwrapper">
            <div class="picwrapper">
                <?php include('music_partials/breakingallillusions.php') ?><br><br><br>
                <?php include('music_partials/amsong.php') ?><br><br><br>
                <?php include('music_partials/mia.php') ?><br><br><br>
            </div>
            <br>
            <br>
            <br>
            <div class="picwrapper">
                <?php include('music_partials/shepherdoffire.php') ?><br><br><br>
                <?php include('music_partials/asiam.php') ?><br><br><br>
                <?php include('music_partials/crazytrain.php') ?><br><br><br>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
<?php include('partials/footer.php') ?>
<?php include('partials/modal.php') ?>
<script src="../javascript/modal.js"></script>
<script src="../javascript/navbar.js"></script>

</html>