<?php
include_once "include/header.php";

checkUserLogin();

$userId = $_SESSION['userId'];

$sql    = "SELECT * FROM user WHERE id =  '" . $userId . "' ";
$res = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($res);


pre($user);
?>
<a class="profile_u" href="update.php?nm=$user['name'] & pn=$user['phone'] & el=$user['email'] & gn=$user['gender']">Update</a>
