<?php
function find_file()
{
    $url = $_SERVER['REQUEST_URI'];
    $url = str_replace('.php', '', $url);
    return $url;
}
?>

<!-- Banner, Navigation bar and Sidenav Bar -->
<div class="banner">
    <div class="banner-content">
        <?php include('logo.php') ?>
        <a href="/">
            <h1>Oli&nbsp;Thompson</h1>
        </a>
        <div class="socialmediacontainer">
            <a href="https://github.com/ot316" target="_blank">
                <img class="socialmedialogo" alt="Github" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/github.png"></a>
            <a href="http://www.linkedin.com/in/oli-thompson" target="_blank">
                <img class="socialmedialogo" alt="Linkedin" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Linkedin.svg"></a>
            <a href="https://www.instagram.com/olithompson_designengineer/" target="_blank">
                <img class="socialmedialogo" alt="Instagram" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Instagram.png"></a>
        </div>
    </div>
</div>
<!-- Mobile Navigation -->
<div id="mySidenav" class="sidenav">
    <a onclick="closeNav()">
        <p style="font-size: 36px;" class="sidenavtext">&times;</p>
    </a>
    <a href="/">
        <p class="sidenavtext">Home</p>
    </a>
    <a href="projects">
        <p class="sidenavtext">Projects</p>
    </a>
    <a href="about_me">
        <p class="sidenavtext">About&nbsp;Me</p>
    </a>
    <a href="art_renders_&_PCBs">
        <p class="sidenavtext">Renders&nbsp;Art&nbsp;&&nbsp;PCBs</p>
    </a>
    <div class="socialmediacontainermobile">
        <a href="https://github.com/ot316" target="_blank">
            <img class="socialmedialogomobile" alt="Github" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/github.png"></a>
        <a href="http://www.linkedin.com/in/oli-thompson" target="_blank">
            <img class="socialmedialogomobile" alt="Linkedin" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Linkedin.svg"></a>
        <a href="https://www.instagram.com/olithompson_designengineer/" target="_blank">
            <img class="socialmedialogomobile" alt="Instagram" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/social_media_logos/Instagram.png"></a>
    </div>
</div>
<span class="sidenavbutton" onclick="openNav()">&#9776;</span>
<div class="navbarwrapper">
    <div class="navbar">
        <ul>
            <li><a <?php if (find_file() == "/") echo 'class="active"'; ?> href="/">Home</a></li>
            <li><a <?php if (find_file() != "/" && find_file() != "/about_me" && find_file() != "/art_renders_&_PCBs") echo 'class="active"'; ?> href="projects">Projects</a></li>
            <li><a <?php if (find_file() == "/about_me") echo 'class="active"'; ?> href="about_me">About Me</a></li>
            <li><a <?php if (find_file() == "/art_renders_&_PCBs") echo 'class="active"'; ?> href="art_renders_&_PCBs"> Art, Renders & PCBs</a></li>
        </ul>
    </div>
</div>
<br>