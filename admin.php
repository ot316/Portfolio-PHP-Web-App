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

?>

<div class="background">
    <?php include('partials/banner.php') ?>
    <br>
    <br>
    <br>
    <div class="wrapper">
        <div class="survey">
            <h4> Contact Responses</h4>
            <?php
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, name, email, message FROM contact";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<p style='margin:10px;'><b>ID: </b>" . $row["id"] . "<br> <b>Name: </b>" . $row["name"] . "<br> <b>Email: </b>" . $row["email"] . "<br> <b>Message: </b>" . $row["message"] . "</p><br>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
        <br>
        <br>
        <br>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="javascript/navbar.js"></script>

</html>