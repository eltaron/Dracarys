<?php include_once '../includes/header.php'; ?>
<div class="container" style="height: 100vh;">
    <div class="d-flex h-100 justify-content-center align-items-center">
        <form action="../../Controllers/categories.php" class="addwidgetform" method="post">
            <h2>اضافة مرحلة جديدة</h2>
            <?php include_once '../includes/message.php'; ?>
            <div class="mb-3">
                <input type="text" class="form-control addwidgetinput" name="title" id="" placeholder="يرجي ادخال اسم المرحلة" value="" required />
                <small class="form-text  text-danger"><?= isset($_SESSION['title']) ? $_SESSION['title'] : '' ?></small>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control addwidgetinput" name="price" id="" placeholder="يرجي ادخال سعر المرحلة" value="" required />
                <small class="form-text  text-danger"><?= isset($_SESSION['price']) ? $_SESSION['price'] : '' ?></small>
            </div>
            <div class="text-center">
                <button type="button" id="refreshButton" class="btn btn-warning"><i class="fa-solid fa-refresh"></i></button>
                <button type="submit" name="add" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
            </div>
        </form>

    </div>
</div>
<script>
    const electron = require('electron');
    const {
        ipcRenderer
    } = electron;
    const refreshButton = document.getElementById('refreshButton');
    window.onload = function() {
        console.log('main');
        ipcRenderer.send('refresh-window');
    };
</script>