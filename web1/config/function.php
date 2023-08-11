<?php

session_start();
function pre($item)
{
    echo "
    <pre>";
    print_r($item);
    echo "</pre>";
}

function base_url($arg = NULL)
{
    $base = 'http://localhost/Shubham/web1/';
    return empty($arg) ? $base : $base . $arg;
}

//Check if user login
function isUserLogin()
{
    if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
        return true;
    } else {
        return false;
    }
}
//Check if User login in login page
function checkUserLogin()
{
    if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
        return true;
    } else {
        header("Location:" . base_url('login'));
    }
}
//Check if user login while updating
function userUpdate()
{
    if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
        return true;
    } else {
        header("Location:" . base_url('login'));
    }
}

function imageSubmit($placeholder, $name, $value, $type)
{
    $ele = "
    <div class = \"form my-4\">
    <input type='$type' name='$name' placeholder='$placeholder' value='$value'
    class= \"form-control\">
    ";
    echo $ele;
}
