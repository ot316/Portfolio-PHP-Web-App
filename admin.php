<?php require_once('protect_this.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Admin Page</title>
</head>

<?php

$servername = "localhost";
$username = "www-data";
$password = "";
$dbname = "olithompson";

class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current()
    {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
    }

    function beginChildren()
    {
        echo "<tr>";
    }

    function endChildren()
    {
        echo "</tr>" . "\n";
    }
}
?>

<body class="background">
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
        <?php
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT id, name, email, message FROM contact");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while ($v = $conn->$stmt->fetchAll()) {
                echo sprintf($v['id']);
                echo "<br>";
            }
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        ?>
        <br>
        <br>
        <br>
    </div>
    </div>
    <?php include('partials/footer.php') ?>
    <script src="javascript/navbar.js"></script>

</html>