<?php
include('statis.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $user && md5($password) == $pass) {
    $_SESSION['login'] = TRUE;
    if (isset($_POST['remember'])) {
        $time = time();
        setcookie('login', $user, $time + 3600);
    }
    header('Location: ./home.php');
    exit;
} else {
    header('Location: ./index.php');
    exit;
}
