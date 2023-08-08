<?php

if (isset($_POST['submit'])) {
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "loginpage";

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql = "INSERT INTO weblogin(username,password) values('$email','$password')";
    mysqli_query($conn, $sql);
    echo "loggedin successfully";
}