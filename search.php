<?php
$servername = "localhost";
$username = "www-data";
$password = "";
$dbname = "olithompson";
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['query'])) {
    if (preg_match("/[A-Z  | a-z]+/", $_POST['query'])) {
        $name = $_POST['query'];
        $name = htmlspecialchars($name);
        trim($name);
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM search WHERE '$name'  IN (tag,tag1,tag2,tag3,tag4,tag5,tag6,tag7,tag8,tag9,tag10)";
        ;
        $result = $conn->query($sql);
        echo $name;
        if ($result->num_rows > 0) {
            // output data of each row
            echo "found";
            while($row = $result->fetch_assoc()) {
                echo $row["id"];
            }
        } else {
            echo "notfound";
        }

    }

} else {
    echo ("<p>Please enter a search query</p>");
}

$conn->close();

?>
