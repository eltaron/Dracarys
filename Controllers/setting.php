<?php
session_start();
include_once '../connect.php';
include_once '../sessions.php';
function back()
{
    echo '<script>window.history.back();</script>';
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['theme'])) {
        $item  = filter_var($_POST['item'], FILTER_SANITIZE_STRING);
        $_SESSION['theme'] = $item;
        back();
    }
    if (isset($_POST['language'])) {
        $item  = filter_var($_POST['item'], FILTER_SANITIZE_STRING);
        $_SESSION['language'] = $item;
        back();
    }
    if (isset($_POST['delete'])) {
        $modal     = filter_var($_POST['modal'], FILTER_SANITIZE_STRING);
        $modal_id  = filter_var($_POST['modal_id'], FILTER_SANITIZE_NUMBER_INT);
        $data = $con->prepare("delete from $modal where id = $modal_id");
        $data->execute();
        if ($data) {
            $_SESSION['message'] = 'تم حذف المرحلة بنجاح';
        } else {
            $_SESSION['error'] = 'يوجد خطأ بالبيانات';
        }
        back();
    }
} else {
    back();
}
