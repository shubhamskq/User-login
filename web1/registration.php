<?php
$title = "Register";
include_once  "include/header.php";
$alert = array();


if (isset($_POST['register'])) {
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    $repeatpassword = isset($_POST["repeatpassword"]) ? $_POST["repeatpassword"] : '';
    $passw = password_hash($password, PASSWORD_BCRYPT);
    $rpass = password_hash($repeatpassword, PASSWORD_BCRYPT);
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "loginpage";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    $result = mysqli_query($conn, "SELECT * FROM user WHERE phone = $phone");
    function validphone($phone)
    {
        if (preg_match('/^[0-9]{10}+$/', $phone)) {
            echo "";
        } else {
            exit("Invalid Number");
        }
    }
    validphone($phone);
    if (!$result || mysqli_num_rows($result) == 0) {
        if ($password == $repeatpassword) {
            $sql = "INSERT INTO user(name,phone,email,gender,password,repeatpassword)
            values('$name','$phone','$email','$gender','$passw','$rpass')";
            mysqli_query($conn, $sql);
            $alert['type'] = "success";
            $alert['msg'] = "Registered Successfully";
        } else {
            $alert['type'] = "error";
            $alert['msg'] = "Password Mistmatch!!";
        }
    } else {
        $alert['type'] = "error";
        $alert['msg'] = "Phone Number Already Exist!!";
    }
}

?>



<?php if (empty($alert)) { ?>
<form class="form-login" action="" method="post">
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
    <input type="text" name="name" class="btn-in" placeholder="Name" class="" required><br>
    <input type="number" name="phone" class="btn-in" placeholder="Phone No" class="" maxlength="10" minlength="10"
        required><br>
    <input type="email" name="email" class="btn-in" placeholder="Email" class=""><br>
    <select name="gender" class="btn-in">
        <option value="Man">Man</option>
        <option value="Man">Woman</option>
    </select><br>
    <input type="password" name="password" class="btn-in" placeholder="Password" class=""><br>
    <input type="password" name="repeatpassword" class="btn-in" placeholder="Repeat Password" class=""><br>
    <input type="checkbox">I have read and agree to the terms <br>
    <button type="submit" name="register" class="btn-sign">
        <p class="sign-p">SIGN UP</p>
    </button>
    <p>Already Registred?<a href="login.php">Login</a></p>
</form>

<?php } else { ?>
<section class="container pt-4">
    <div class="row">
        <div class="col-sm-12 text-center">
            <?php if (isset($alert)  && $alert['type'] == 'success') { ?>
            <img src="<?= base_url('assets/images/success.gif') ?>" />
            <h3 class="text-success"><?= $alert['msg']; ?></h3>
            <a href="<?= base_url('login.php') ?>" class="btn btn-primary">Login Now</a>
            <?php } else { ?>
            <img src="<?= base_url('assets/images/success.gif') ?>" />
            <h3 class="text-danger"><?= $alert['msg']; ?></h3>

            <a href="<?= base_url('registration.php') ?>" class="btn btn-warning">Re-Try</a>
            <?php } ?>


        </div>

    </div>
</section>
<?php } ?>


<?php include_once "include/footer.php" ?>
