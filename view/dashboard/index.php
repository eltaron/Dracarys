<?php include_once '../includes/header.php'; ?>
<div class="row justify-content-end">
    <?php include_once '../includes/sidebar.php'; ?>
    <div class="col-9">
        <div class="container">
            <div class="d-flex justify-content-between mt-3 p-3">
                <h2>كافة المدفوعات</h2>
                <!-- Button trigger modal -->
                <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#server">
                    <i class="fas fa-plus"></i> الرفع علي السيرفر
                </button>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-4 d-flex align-items-center">
                    <i class="fa-solid fa-money-check-dollar"></i>
                    <div class="p-3">
                        <span>المدفوعات</span>
                        <h2>600 جنية</h2>
                    </div>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <i class="fa-solid fa-sack-dollar"></i>
                    <div class="p-3">
                        <span>المستحقات</span>
                        <h2>600 جنية</h2>
                    </div>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                    <div class="p-3">
                        <span>الاجمالي</span>
                        <h2>600 جنية</h2>
                    </div>
                </div>
            </div>

        </div>
        <div class="container px-4">

        </div>
    </div>
</div>
<?php include_once '../includes/footer.php'; ?>