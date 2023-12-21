<div class="col-3 d-flex flex-column align-items-center">
    <img src="../../assets/images/logo.png" alt="error">
    <h1>
        <?php
        $data = $con->prepare('select name from admins where id = ?');
        $data->execute(array($_SESSION['admin_id']));
        $name = $data->fetch();
        echo $name['name'];
        ?>
    </h1>
    <ul class="list-group list-group-flush">
        <li class="list-group-item <?= substr($_SERVER['REQUEST_URI'], 6, strlen('dashboard')) == 'dashboard' ? 'mactive' : '' ?>">
            <a href="../dashboard/index.php">
                <i class="fa-solid fa-file-signature"><span class="me-2"><?= $lang['home'] ?></span></i>
            </a>
        </li>
        <li class="list-group-item <?= substr($_SERVER['REQUEST_URI'], 6, strlen('reservations')) == 'reservations' ? 'mactive' : '' ?>">
            <a href="../reservations/index.php">
                <i class="fa-solid fa-file-signature"><span class="me-2">الحجوزات</span></i>
            </a>
        </li>
        <li class="list-group-item <?= substr($_SERVER['REQUEST_URI'], 6, strlen('categories')) == 'categories' ? 'mactive' : '' ?>">
            <a href="../categories/index.php">
                <i class="fa-solid fa-users-rectangle"><span class="me-2">المراحل</span></i>
            </a>
        </li>
        <li class="list-group-item <?= substr($_SERVER['REQUEST_URI'], 6, strlen('subcategories')) == 'subcategories' ? 'mactive' : '' ?>">
            <a href="../subcategories/index.php">
                <i class="fa-solid fa-users-viewfinder"><span class="me-2">المجموعات</span></i>
            </a>
        </li>
        <li class="list-group-item <?= substr($_SERVER['REQUEST_URI'], 6, strlen('books')) == 'books' ? 'mactive' : '' ?>">
            <a href="../books/index.php">
                <i class="fas fa-book"><span class="me-2">المذكرات</span></i>
            </a>
        </li>
        <li class="list-group-item <?= substr($_SERVER['REQUEST_URI'], 6, strlen('users')) == 'users' ? 'mactive' : '' ?>">
            <a href="../users/index.php">
                <i class="fa-solid fa-users "><span class="me-2">الطلاب</span></i>
            </a>
        </li>
        <li class="list-group-item <?= substr($_SERVER['REQUEST_URI'], 6, strlen('lessons')) == 'lessons' ? 'mactive' : '' ?>">
            <a href="../lessons/index.php">
                <i class="fa-solid fa-clipboard-user"><span class="me-2">الحصص</span></i>
            </a>
        </li>
        <li class="list-group-item <?= substr($_SERVER['REQUEST_URI'], 6, strlen('exams')) == 'exams' ? 'mactive' : '' ?>">
            <a href="../exams/index.php">
                <i class="fa-solid fa-file-circle-question"><span class="me-2">الامتحانات</span></i>
            </a>
        </li>
        <li class="list-group-item <?= substr($_SERVER['REQUEST_URI'], 6, strlen('messages')) == 'messages' ? 'mactive' : '' ?>">
            <a href="../messages/index.php">
                <i class="fa-solid fa-comments"><span class="me-2">الرسائل</span></i>
            </a>
        </li>
        <li class="list-group-item <?= substr($_SERVER['REQUEST_URI'], 6, strlen('payments')) == 'payments' ? 'mactive' : '' ?>">
            <a href="../payments/index.php">
                <i class="fa-solid fa-credit-card"><span class="me-2">الحسابات</span></i>
            </a>
        </li>
    </ul>
    <!-- Button in the start -->
    <div class="input-group mb-3">
        <button class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-gear">
                <span>اعدادات سريعة</span>
            </i>
        </button>
        <ul class="dropdown-menu text-end">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#book">دفع حساب
                    مذكرة</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#month">دفع حساب
                    شهر</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#payment">اضافة
                    مصروفات</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#language">تغيير
                    اللغة</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#theme">تغيير
                    التصميم</a></li>
        </ul>
    </div>
</div>