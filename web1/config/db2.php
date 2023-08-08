<?php

if (isset($_POST['contact'])) {

    $first = isset($_POST["first"]) ? $_POST["first"] : '';
    $last = isset($_POST["last"]) ? $_POST["last"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $message = isset($_POST["message"]) ? $_POST["message"] : '';

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "loginpage";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    $sql = "INSERT INTO sendmessage(first,last,email,message)
values('$first','$last','$email','$message')";
    mysqli_query($conn, $sql);
}