<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Electronics</title>

</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <?php include('partials/filter.php') ?>

        <!-- Project Pictures -->
        <div class="bigpicwrapper" id="bigpicwrapper">
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/illumuitar.php') ?>
                <?php include('project_partials/zero_gravity_garden.php') ?>
                <?php include('project_partials/ball_launcher.php') ?>
            </div>
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/gizmo.php') ?>
                <?php include('project_partials/programmable_pet_feeder.php') ?>
                <?php include('project_partials/smart_mirror.php') ?>


            </div>
            <div class="picwrapper" id="picwrapper">
                <?php include('project_partials/diy_ambilight.php') ?>
                <?php include('project_partials/double_necked_guitar.php') ?>
                <?php include('project_partials/diy_desklamp.php') ?>
            </div>
        </div>
    </div>
</div>

<?php include('partials/footer.php') ?>
<script src="../javascript/pic_wrapper.js"></script>
<script src="../javascript/navbar.js"></script>

</html>