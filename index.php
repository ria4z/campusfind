<?php
require_once __DIR__ . "/includes/paths.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BNAHS CampusFind</title>

    <link rel="stylesheet" href="assets/css/shared/global.css">
    <link rel="stylesheet" href="assets/css/shared/navbar.css">
    <link rel="stylesheet" href="assets/css/pages/home.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<?php include __DIR__ . "/includes/navbar.php"; ?>

<section class="hero">

    <div class="hero-text">

        <h1>
            Lost Something?<br>
            Found Something?
        </h1>

        <p>
            Lost or found, we're here to help. CampusFind connects the belongings of Balagtas
           National Agricultural High School - Main Campus students with their rightful owners
           through simple and secure identification.
        </p>

        <div class="buttons">
            

<a
    href="<?php
        if (
            isset($_SESSION['admin_id']) &&
            ($_SESSION['role'] ?? '') === 'admin'
        ) {
            echo 'admin/admin-lost-reports.php';
        } elseif (
            isset($_SESSION['user_id']) &&
            ($_SESSION['role'] ?? 'student') === 'student'
        ) {
            echo 'pages/report-lost.php';
        } else {
            echo 'auth/login.php?redirect=pages/report-lost.php';
        }
?>"
    class="primary-btn"
>
    <?php
    if (
        isset($_SESSION['admin_id']) &&
        ($_SESSION['role'] ?? '') === 'admin'
    ) {
        echo 'View Reported Lost Items';
    } else {
        echo 'Report Your Lost Item';
    }
?>
</a>

            <a href="pages/found-items.php" class="secondary-btn">Browse Found Items</a>
        </div>

    </div>

    <div class="hero-image">

        <img src="assets/images/hero2.png" alt="Lost and Found">

    </div>

</section>

<?php include __DIR__ . "/includes/footer.php"; ?>

<script src="assets/js/navbar.js"></script>

</body>
</html>