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

// if user login check 
function isUserLogin()
{
    if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
        return true;
    } else {
        return false;
    }
}

function checkUserLogin()
{
    if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
        return true;
    } else {
        header("Location:" . base_url('login'));
    }
}
function userUpdate()
{
    if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
        return true;
    } else {
        header("Location:" . base_url('login'));
    }
}
