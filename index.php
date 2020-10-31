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
    <div class="wrapper">
        <p style="margin-bottom: 20px; font-size: 24px">Project Highlights</p>
        <p style="margin-top: 0px; padding-bottom: 5px;" class="mobilehidetext">I am a Design Engineer and Computer Scientist who is particularly interested in bringing value to users through digital and physical products. Below are some project highlights from my time in industry and at University.</p>
        <div class="big_featured_wrapper" id="bigpicwrapper">
            <?php include('featured_project_partials/voxel.php') ?>
            <?php include('featured_project_partials/magic_of_things.php') ?>
            <?php include('featured_project_partials/voxel.php') ?>
        </div>
    </div>
    <?php include('partials/footer.php') ?>
</body>
<script src="../javascript/pic_wrapper.js"></script>
<script src="../javascript/navbar.js"></script>
<script src="../javascript/loader.js"></script>


</html>