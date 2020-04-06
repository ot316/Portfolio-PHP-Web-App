<?php
    /* Your password */
    $password = getenv('LOGIN_PASSWORD') ?: die('"LOGIN_PASSWORD" config var in found in env!');

    if (empty($_COOKIE['password']) || $_COOKIE['password'] !== $password) {
        header('Location: login.php');
        exit;
    }
?>