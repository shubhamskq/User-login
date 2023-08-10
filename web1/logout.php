<?php include_once "include/header.php";
include_once "login.php";
if (isUserLogin()) {
    session_start();
    unset($_SESSION['phone']);
    session_destroy();
    header("Location:" . base_url());
}
