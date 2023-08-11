<?php
include_once "include/header.php";
checkUserLogin();
// Get the user ID 
$userId = $_SESSION['userId'];

// Fetch user data
$sql = "SELECT * FROM user WHERE id = '$userId'";
$res = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($res);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get updated data from the form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    // Update user data
    $updateSql = "UPDATE user SET name = '$name', phone = '$phone', email = '$email', gender = '$gender' WHERE id = '$userId'";
    $updateResult = mysqli_query($conn, $updateSql);

    if ($updateResult) {
        echo "User data updated successfully!";
        // Update the user data
        $user['name'] = $name;
        $user['phone'] = $phone;
        $user['email'] = $email;
        $user['gender'] = $gender;
    } else {
        echo "Error updating user data: " . mysqli_error($conn);
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update User Info</title>
</head>

<body>
    <h1>Update Your Information</h1>
    <form method="POST" action="">
        <label>Name: </label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
        <label>Phone: </label>
        <input type="text" name="phone" value="<?php echo $user['phone']; ?>"><br>
        <label>Email: </label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
        <label>Gender: </label>
        <select name="gender">
            <option value="Male" <?php if ($user['gender'] === 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if ($user['gender'] === 'Female') echo 'selected'; ?>>Female</option>
        </select><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>