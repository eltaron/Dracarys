<?php
session_start();
include_once '../Models/Category.php';
include_once '../connect.php';
include_once '../sessions.php';
$Category = new Category($con);
function back()
{
    echo '<script>window.history.back();</script>';
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $title  = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
        $price  = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
        if (empty($title) || strlen($title) < 2) {
            $_SESSION['title'] = 'يجب اضافة اسم المرحلة ';
        }
        if (empty($price) || strlen($price) < 2) {
            $_SESSION['price'] = 'يجب اضافة سعر المرحلة ';
        }
        $Category->add($title, $price);
        back();
    }
    if (isset($_POST['edit'])) {
        $title  = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
        $price  = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
        $modal_id  = filter_var($_POST['modal_id'], FILTER_SANITIZE_NUMBER_INT);
        if (empty($title) || strlen($title) < 2) {
            $_SESSION['title'] = 'يجب اضافة اسم المرحلة ';
        }
        if (empty($price) || strlen($price) < 2) {
            $_SESSION['price'] = 'يجب اضافة سعر المرحلة ';
        }
        $Category->edit($title, $price, $modal_id);
        back();
    }
} else {
    back();
}
