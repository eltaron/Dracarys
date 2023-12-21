<?php
session_start();
include_once '../Models/Admin.php';
include_once '../connect.php';
$admin = new Admin($con);
function back()
{
    header('Location: ../index.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        $username  = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password  = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        if (empty($username) || strlen($username) < 2) {
            $_SESSION['username'] = 'يجب اضافة اسم المستخدم ';
        }
        if (empty($password) || strlen($password) < 2) {
            $_SESSION['password'] = 'يجب اضافة كلمة المرور ';
        }
        $admin->login($username, $password);
        $_SESSION['error'] = 'الحساب غير مسجل';
        back();
    }
} else {
    back();
}
