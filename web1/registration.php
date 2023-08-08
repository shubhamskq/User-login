<?php
$title = "Register";
include_once "include/header.php"





?>




<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <div class="form-b">
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" role="tab" aria-controls="pills-login"
                    aria-selected="true">Sign Up</a>
        </ul>
        <form class="form-login" action="config/db1.php" method="post">
            <p class="text-center mb-3">Sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
                <a href="https://www.facebook.com/login/" class="fa fa-facebook"></a>
            </button>
            <button type="button" class="btn btn-link btn-floating mx-1">
                <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=AXo7B7Xe7StUDF2Ux3W90BIjfdiF-SCmqgO7rjIRCi2750ct-sj_CxChQgpekrakZupeYktpnrtvZw&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                    class="fa fa-google"></a>
            </button>
            <button type="button" class="btn btn-link btn-floating mx-1">
                <a href="https://twitter.com/i/flow/login" class="fa fa-twitter"></a>
            </button>
            <button type="button" class="btn btn-link btn-floating mx-1">
                <a href="https://github.com/login" class="fa fa-github"></a>
            </button>
            <p class="text-center">or:</p>
            <input type="text" name="name" class="btn-in" placeholder="Name" class=""><br>
            <input type="text" name="username" class="btn-in" placeholder="Username" class=""><br>
            <input type="email" name="email" class="btn-in" placeholder="Email" class=""><br>
            <input type="password" name="password" class="btn-in" placeholder="Password" class=""><br>
            <input type="password" name="repeatpassword" class="btn-in" placeholder="Repeat password" class=""><br>
            <input type="checkbox">I have read and agree to the terms <br>
            <a href="#">Forgot password?</a><br>
            <button type="submit" name="register" class="btn-sign">
                <p class="sign-p">SIGN UP</p>
            </button>
            <p>Already Registred?<a href="index.php">Login</a></p>
        </form>
    </div>
</body>

</html>
<?php include_once "include/footer.php" ?>