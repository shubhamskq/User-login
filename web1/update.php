<?php include_once "include/header.php";

if (isset($_GET["update"])) {
    $nm = $_GET['nm'];
    $pn = $_GET['pn'];
    $el = $_GET['el'];
    $gn = $_GET['gn'];
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $gender = $_GET['gender'];
    $userId = $_SESSION['userId'];
    $sql = "UPDATE name='$name', phone='$phone', email='$email', gender='$gender' FROM user WHERE id = '"  . $userId . "' ";
    $data = mysqli_query($conn, $sql);
    if ($data) {
        echo "Record Updated";
    } else {
        echo "<script>alert('No Record Found')</script>";
    }
}
?>
<html>

<body>
    <h1 class="head_up">
        Update Your Information
    </h1>
    <form class="form_up" method="GET" action="">
        <table border="0" bgcolor="yellow" cellspacing="50">
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Phone No
                </td>
                <td>
                    <input type="text" name="phone">
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    Gender
                </td>
                <td>
                    <select name="gender">
                        <option value="Man">Male</option>
                        <option value="Man">Female</option>
                    </select><br>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="update" value="submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>