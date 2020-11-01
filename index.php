<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Oli Thompson</title>
    <link rel="stylesheet" href="./css/stylehomepage.css">
    <script src="javascript/jquery-3.4.1.min.js"></script>
</head>

<body class="background">
    <?php include('partials/loader.php') ?>
    <?php include('partials/banner.php') ?>
    <div class="wrapper" style="max-width: 900px;">
        <h2 class="highlights">Highlights</h2>
        <div style="overflow:auto; clear:both;">
            <button onclick="window.location.href='/projects';" class="see_more_btn">See more projects ></button>
            <p style="margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;" class="mobilehidetext">I am a Design Engineer and Computer Scientist and I love bringing value to users through digital and physical products. Below are some project highlights from my time in industry and at University.</p>
        </div>
        <div class="big_featured_wrapper" id="bigpicwrapper" style="padding-top: 10px;">
            <hr class="home_rule">
            <?php include('featured_project_partials/voxel.php') ?>
            <hr class="home_rule">
            <?php include('featured_project_partials/magic_of_things.php') ?>
            <hr class="home_rule">
            <?php include('featured_project_partials/medical_percussion.php') ?>
            <hr class="home_rule">
            <button onclick="window.location.href='/projects';" class="see_more_btn" style="transform: none;">See more projects ></button>
        </div>
    </div>
    <?php include('partials/footer.php') ?>
</body>
<script src="../javascript/pic_wrapper.js"></script>
<script src="../javascript/navbar.js"></script>
<script src="../javascript/loader.js"></script>

</html>