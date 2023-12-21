<?php
if ((isset($_SESSION['error']) && $_SESSION['error'] != '') || (isset($_SESSION['message']) && $_SESSION['message'] != '')) {
?>
    <div class="alert m-3 mx-5 alert-dismissible alert-<?= isset($_SESSION['error']) && $_SESSION['error'] != '' ? 'danger' : (isset($_SESSION['message']) && $_SESSION['message'] != '' ? 'primary' : '') ?>" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?= isset($_SESSION['error']) && $_SESSION['error'] != '' ? $_SESSION['error'] : (isset($_SESSION['message']) && $_SESSION['message'] != '' ? $_SESSION['message'] : '') ?>
    </div>
<?php
}
include_once '../../sessions.php';
?>