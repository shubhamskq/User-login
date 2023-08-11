<?php include_once "include/header.php";
checkUserLogin();
// Get the user ID 
$userId = $_SESSION['userId'];
if (isset($_GET['id'])) {
    $gid = $_GET['id'];
    $del = "DELETE FROM user WHERE id = $userId";
    $rdel = mysqli_query($conn, $del);
    if ($rdel) {
        echo "Data Deleted Successfully";
        session_destroy();
    } else {
        echo "Error occur";
        exit();
    }
}
