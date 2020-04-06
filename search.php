<?php
$servername = "localhost";
$username = "www-data";
$password = "";
$dbname = "olithompson";
?>

<?php
if (isset($_POST['query'])) {
    if (preg_match("/[A-Z  | a-z]+/", $_POST['query'])) {
        $name = $_POST['query'];
        $name = htmlspecialchars($name);
        trim($name);
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM search WHERE '$name' IN ('tag1','tag2','tag3','tag4','tag5','tag6','tag7','tag8','tag9', 'tag10')";
        $result = $conn->query($sql);
        echo($result);
    }
} else {
    echo ("<p>Please enter a search query</p>");
}
