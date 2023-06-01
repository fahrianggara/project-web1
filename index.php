<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productopia</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="assets/plugins/tinyslider/tiny-slider.css">
    <link rel="stylesheet" href="assets/css/b.css">
</head>

<body>
    <!-- Navbar -->
    <?php include('layouts/navbar.php'); ?>

    <main id="main">
        <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'home':
                        include('pages/homepage.php');
                        break;
                    case 'product':
                        include('pages/product.php');
                        break;
                    case 'search':
                        include('pages/search.php');
                        break;
                    case 'about':
                        include('pages/about.php');
                        break;
                    default:
                        include('pages/homepage.php');
                        break;
                }
            } else {
                include('layouts/welcome.php');
            }
        ?>
    </main>

    <!-- Footer -->
    <?php include('layouts/footer.php'); ?>

    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap4/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/jquery/sticky/jquery.sticky.js"></script>
    <script src="assets/plugins/jquery/easing/jquery.easing.min.js"></script>
    <script src="assets/plugins/tinyslider/tiny-slider.js"></script>
    <script src="assets/js/a.js"></script>
</body>

