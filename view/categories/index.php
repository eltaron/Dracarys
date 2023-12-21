<?php
include_once '../includes/header.php';
?>
<div class="row justify-content-end">
    <?php
    include_once '../includes/sidebar.php';
    include_once '../../Models/Category.php';
    $category = new Category($con);
    ?>
    <div class="col-9 pt-5">
        <div class="container px-4 d-flex justify-content-between">
            <h2>جميع المراحل</h2>
            <button type="button" class="btn btn-light px-3" id="openButton">اضافة مرحلة جديدة</button>
        </div>
        <?php include_once '../includes/message.php'; ?><?php include_once '../includes/message.php'; ?>
        <div class="container px-4">
            <div class="table-responsive">
                <table id="example" class="table">
                    <thead>
                        <tr>
                            <th>رقم القسم</th>
                            <th>اسم القسم</th>
                            <th>السعر</th>
                            <th>الاعدادات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $categories = $category->fetch_all();
                        foreach ($categories as $item) {
                        ?>
                            <tr class="text-center">
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['title'] ?></td>
                                <td><?= $item['price'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-info"><i class="fa-solid fa-eye"></i></button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="modal.value='categories';modal_id.value=<?= $item['id'] ?>;"><i class="fa-solid fa-trash"></i></button>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit" onclick="category_title.value=`<?= $item['title'] ?>`;price.value=<?= $item['price'] ?>;modal_id.value=<?= $item['id'] ?>;"><i class="fa-solid fa-edit"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="../../Controllers/categories.php" class="addwidgetform" method="post">
                <input type="hidden" name="modal_id" id="modal_id">
                <div class="modal-body">
                    <h2 class="mb-3">تعديل المرحلة</h2>
                    <div class="mb-3">
                        <input type="text" class="form-control " required name="title" id="category_title" placeholder="يرجي ادخال اسم المرحلة" />
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control " required name="price" id="price" placeholder="يرجي ادخال سعر المرحلة" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                    <button type="submit" name="edit" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    const electron = require('electron');
    const {
        ipcRenderer
    } = electron;
    const openButton = document.getElementById('openButton');
    openButton.addEventListener('click', () => {
        ipcRenderer.send('openCategoryWindow');
    });
</script>
<?php include_once '../includes/footer.php'; ?>