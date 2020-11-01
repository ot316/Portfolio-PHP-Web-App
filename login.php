<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/stylehomepage.css">
    <link rel="stylesheet" href="./css/aboutme.css">
</head>

<?php
/* Your password */
$username = 'admin';
$password = getenv('LOGIN_PASSWORD') ?: die('"LOGIN_PASSWORD" config var in found in env!');
$loginerror = "";

/* Redirects here after login */
$redirect_after_login = 'admin';

if (isset($_POST['password']) && isset($_POST['username'])) {
    if ($_POST['password'] == $password && $_POST['username'] == $username) {
        setcookie("password", $password);
        header('Location: ' . $redirect_after_login);
        exit;
    } else {
        $loginerror = "<h4 class='error'>" . 'Invalid Login Credentials' . "</h4><br>";
    }
}
?>

<div class="background">
    <?php include('partials/banner.php') ?>
    <br>
    <br>
    <br>
    <div class="wrapper">
        <form method="POST" class="survey">
            <div>
                <h4>Login</h4>
                <br>
                <br>
            </div>
            <div>
                <input type="username" id="username" name="username" placeholder="UserName">
                <label style="margin: 7px;" for="username">Username</label>
            </div>
            <br>
            <div>
                <input type="password" id="password" name="password" placeholder="Password">
                <label style="margin: 7px;" for="password">Password</label>
            </div>
            <br>
            <br>
            <?php echo ($loginerror) ?>
            <button class="dropdownbtn" type="submit">Sign in</button>
        </form>
        <br>
        <br>
        <br>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="javascript/navbar.js"></script>

</html>