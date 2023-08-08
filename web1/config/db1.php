<?php

if (isset($_POST['register'])) {
    //TODO ================
    // check if phonenumber already exist

    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $username = isset($_POST["username"]) ? $_POST["username"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    $repeatpassword = isset($_POST["repeatpassword"]) ? $_POST["repeatpassword"] : '';

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "loginpage";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if ($password == $repeatpassword) {
        $sql = "INSERT INTO websignup(name,username,email,password,repeatpassword)
values('$name','$username','$email','$password','$repeatpassword')";
        mysqli_query($conn, $sql);
        echo "Registred Succesfully";
    } else {
        echo "password are not matching";
        header("Location:registration.php");
    }
}