<?php include_once  "config/db.php" ?>
<?php include_once  "config/function.php" ?>

<html>
<title><?php echo isset($title) ? $title : 'Website Name'  ?></title>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>



<!-- my menu-->
<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigationz
                <span class=" navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 ml-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li>
                        <a class="nav-link active" aria-current="page" href="<?= base_url('about.php') ?>">About Us</a>
                    </li>

                    <li>
                        <a class="nav-link active" aria-current="page" href="<?= base_url('contact.php') ?>">Contact
                            Us</a>
                    </li>
                    <!-- login & registration --->
                    <li>
                        <a class="nav-link active" aria-current="page" href="<?= base_url('login.php') ?>">Login</a>
                    </li>
                    <li>
                        <a class="nav-link active" aria-current="page"
                            href="<?= base_url('registration.php') ?>">Signup</a>
                    </li>
                    <!--// login & registration --->


                </ul>

            </div>
        </div>
    </nav>
</header>
<!-- my menu-->



<body>
