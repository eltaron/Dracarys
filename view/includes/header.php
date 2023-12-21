<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: index.php');
    exit();
}
include_once '../../connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mr/Mahmoud Ghalwash</title>
    <meta name="theme-color" content="#0881a3" />
    <meta name="msapplication-navbutton-color" content="#0881a3" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#0881a3" />
    <meta name="author" content="Ahmed Eltaroun ( Master code )" />
    <meta name="MobileOptimized" content="320" />
    <meta property="og:title" content="الرئيسية" />
    <meta property="og:type" content="website" />
    <link rel="shortcut icon" type="image/png" href="../../images/dragon.png">
    <!-- bootstrap files -->
    <link rel="stylesheet" href="../../assets/Bootstrab/css/bootstrap.min.css">
    <script src="../../assets/Bootstrab/js/bootstrap.bundle.min.js"></script>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200;300;400;600;700;800;900;1000&family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <!-- css files -->
    <link rel="stylesheet" href="../../assets/fontAwesome/css/all.min.css">
    <link rel="stylesheet" href="../../css/dracarys.css">
    <?php
    if (isset($_SESSION['theme']) && $_SESSION['theme'] == 'dark') {
        echo '<link rel="stylesheet" href="../../css/dark.css">';
    }
    ?>
    <?php
    if (isset($_SESSION['language']) && $_SESSION['language'] == 'english') {
        echo '<link rel="stylesheet" href="../../css/english.css">';
        include_once '../../lang/english.php';
    } else {
        include_once '../../lang/arabic.php';
    }
    ?>
</head>

<body>