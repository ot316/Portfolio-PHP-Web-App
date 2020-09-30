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
    <?php include('partials/banner.php') ?>
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
</div>
<br>
<br>
<br>
<?php include('partials/footer.php') ?>
<script src="javascript/navbar.js"></script>

</html>