<?php
session_start();
if (isset($_SESSION['admin_id'])) {
  header('Location: view/dashboard/index.php');
  exit();
}
include_once 'env.php';
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
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200;300;400;600;700;800;900;1000&family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./assets/bootstrab/bootstrap.min.css" />
  <!-- css files -->
  <link rel="shortcut icon" type="image/png" href="../../images/dragon.png">
  <link rel="stylesheet" type="text/css" href="./css/style.css" />
  <style>
    h6 {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="logo">
      <img src="./assets/images/logo.png">
      <p>تسجيل الدخول</p>
    </div>
    <div>
      <h6><?= isset($_SESSION['error']) ? $_SESSION['error'] : '' ?></h6>
    </div>
    <form action="Controllers/auth.php" method="post">
      <fieldset>
        <legend>اسم المستخدم</legend>
        <input type="text" name="username" placeholder="اسم المستخدم">
      </fieldset>
      <h6><?= isset($_SESSION['username']) ? $_SESSION['username'] : '' ?></h6>
      <fieldset>
        <legend>كلمة السر</legend>
        <input type="password" name="password" placeholder="كلمة السر">
      </fieldset>
      <h6><?= isset($_SESSION['password']) ? $_SESSION['password'] : '' ?></h6>
      <div class="text-center w-100">
        <button type="submit" name="login">تسجيل دخول</button>
      </div>
    </form>
  </div>

</body>

</html>