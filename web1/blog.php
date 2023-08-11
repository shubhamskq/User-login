<?php include_once "include/header.php";

checkUserLogin();
// Get the user ID 
$userId = $_SESSION['userId'];

// Fetch user data
if (isset($_POST['blogsubmit'])) {
    $title = isset($_POST["title"]) ? $_POST["title"] : '';
    $description = isset($_POST["description"]) ? $_POST["description"] : '';
    $img = isset($_POST["file"]) ? $_POST["file"] : '';
    $author = isset($_POST["name"]) ? $_POST["name"] : '';
    $dateat = isset($_POST["dateat"]) ? $_POST["dateat"] : '';
    $keyword = isset($_POST["keyword"]) ? $_POST["keyword"] : '';
    $tag = isset($_POST["tag"]) ? $_POST["tag"] : '';


    $sql = "INSERT INTO blog(title,description,img,author,dateat,keyword,tag)
            values('$title','$description','$img','$author','$dateat', '$keyword', '$tag')";
    $res =  mysqli_query($conn, $sql);
}

?>

<html>

<body>
    <form class="blog_form" method="post" action="">
        <div class="container" style="background-color: grey;">
            <div class="col md-10">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"><?php echo $user['id'] ?></label>
                    <div class="col-sm-10">
                        <p><?php echo $user['name'] ?></p>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="title" class="form-control" id="inputPassword">
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <script src="assets/js/ckeditor/ckeditor.js"></script>
                <form method="post" action="upload.php">

                    <textarea class="editor" name="description"></textarea>

                    <?php imageSubmit("", "file", "", "file") ?>
                    <script>
                        CKEDITOR.replace('description');
                    </script>
            </div>
            <div class="mb-3">
                <p><label>Tags</label>
                </p>
                <input type="textarea">
            </div>
            <div>
                <input type="submit" name="blogsubmit" class="btn btn-primary">
            </div>
        </div>
    </form>

</body>

</html>