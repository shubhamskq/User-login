<?php
session_start();
if (isset($_POST['submit'])) {
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "loginpage";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    $result = mysqli_query($conn, "SELECT * FROM user WHERE phone = $phone");
    if (!$result || mysqli_num_rows($result) == 0) {
?>
        <script>
            alert("User Does Not Exist");
        </script>
<?php
    } else {
        $userData = array(
            "userId" => $result['id'],
            "role" => 'user',
        );

        $_SESSION['user'] = $userData;
    }
}


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
