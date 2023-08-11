<?php
include_once "include/header.php";
checkUserLogin();

if (isset($_POST['blogsubmit'])) {
    $image = $_FILES['file'];
    print_r($image);
} else {
    header("Location:" . base_url('login.php'));
}
