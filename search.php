<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Search</title>
</head>

<?php

$servername = "localhost";
$username = "www-data";
$password = "";
$dbname = "olithompson";

?>

<div class="background">
    <!-- Banner, Navigation bar and Sidenav Bar -->
    <div class="banner">
        <div class="banner-content">
            <img class="logo" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/Website Icon.png" alt="Logo">
            <h1>Oli&nbsp;Thompson</h1>
            <div class="socialmediacontainer">
                <a href="http://www.linkedin.com/in/oli-thompson" target="_blank">
                    <img class="socialmedialogo" alt="Linkedin" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Linkedin.svg"></a>
                <a href="https://github.com/ot316" target="_blank">
                    <img class="socialmedialogo" alt="Github" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Github.svg"></a>
                <a href="https://www.instagram.com/olithompson_designengineer/" target="_blank">
                    <img class="socialmedialogo" alt="Instagram" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Instagram.png"></a>
            </div>
        </div>
    </div>
    <img class="logomobile" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/Website Icon.png" alt="Logo">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/" style="margin-top: 75px;">
            <p class="sidenavtext">Projects</p>
        </a>
        <a href="about_me">
            <p class="sidenavtext">About&nbsp;Me</p>
        </a>
        <a href="renders_and_art">
            <p class="sidenavtext">Renders&nbsp;and&nbsp;Art</p>
        </a>
        <a href="music">
            <p class="sidenavtext">Music</p>
        </a>
        <div class="socialmediacontainermobile">
            <a href="https://www.instagram.com/olithompson_designengineer/" target="_blank">
                <img class="socialmedialogomobile" alt="Instagram" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Instagram.png"></a>
            <a href="https://github.com/ot316" target="_blank">
                <img class="socialmedialogomobile" alt="Github" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Github.svg"></a>
            <a href="http://www.linkedin.com/in/oli-thompson" target="_blank">
                <img class="socialmedialogomobile" alt="Linkedin" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Linkedin.svg"></a>
        </div>
    </div>
    <span class="sidenavbutton" onclick="openNav()">&#9776;</span>
    <div class="navbarwrapper">
        <div class="navbar">
            <ul>
                <li><a href="/">Projects</a></li>
                <li><a href="about_me">About Me</a></li>
                <li><a href="renders_and_art"> Renders and Art</a></li>
                <li><a href="music">Music</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="wrapper">
        <div class="searchresults">
            <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            if (isset($_POST['query'])) {
                if (preg_match("/[A-Z  | a-z]+/", $_POST['query'])) {
                    $name = $_POST['query'];
                    $name = htmlspecialchars($name);
                    trim($name);
                    echo ("<h4 style='font-size: 24px;' >Search Results for '" . $name . "'</h4><br><hr><br>");
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM search WHERE '$name'  IN (name,link,tag,tag1,tag2,tag3,tag4,tag5,tag6,tag7,tag8,tag9,tag10,tag11,tag12,tag13,tag14,tag15,tag16,tag17,tag18,tag19,tag20,tag21,tag22,tag23,tag24,tag25,tag26,tag27,tag28,tag29,tag30,tag31,tag32,tag33,tag34,tag35,tag36,tag37,tag38,tag39,tag40,tag41,tag42,tag43,tag44,tag45,tag46,tag47,tag48,tag49,tag50)";;
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        echo ("<ul>");
                        while ($row = $result->fetch_assoc()) {
                            echo "<a href=" . $row["link"] . "><li style='font-size: 18px;'><u>" . $row["name"] . "</u></li></a><br>";
                        }
                        echo ("</ul>");
                    } else {
                        echo "<p>No Results Found</p>";
                    }
                }
            }
            ?>
        </div>
    </div>
    <br>
    <br>
    <br>
</div>
</div>
<?php include('partials/footer.php') ?>
<script src="javascript/navbar.js"></script>

</html>