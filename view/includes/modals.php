<!-- Modal for server -->
<div class="modal fade" id="server" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                هل تريد الرفع على السيرفر ؟
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                <button type="button" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- Modal for settings -->
<div class="modal fade" id="language" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="../../Controllers/setting.php" method="post">
                <div class="modal-body">
                    <h2>اختر اللغة المناسبة لك</h2>
                    <select class="form-select form-select-lg w-100" name="item">
                        <option value="arabic">اللغة العربية</option>
                        <option value="english">اللغة الانجليزية</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                    <button type="submit" name="language" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal for theme -->
<div class="modal fade" id="theme" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="../../Controllers/setting.php" method="post">
                <div class="modal-body">
                    <h2>اختر الوضع المناسبة لك</h2>
                    <select class="form-select form-select-lg" name="item">
                        <option value="light">الوضع النهاري</option>
                        <option value="dark">الوضع الليلي</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                    <button type="submit" name="theme" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal for book -->
<div class="modal fade" id="book" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="mb-3">دفع حساب المذكرة</h2>
                <div class="mb-3">
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="ادخل كود الطالب" />
                </div>
                <select class="form-select mb-3" name="">
                    <option selected>اختر المذكرة</option>
                </select>
                <div class="mb-3">
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="ادخل سعر المذكرة (اختياري)" />
                </div>
                <div>
                    <textarea class="form-control" placeholder="ملاحظات (اختياري)" name="" id="" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                <button type="button" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- Modal for month -->
<div class="modal fade" id="month" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="mb-3">دفع حساب الشهر</h2>
                <div class="mb-3">
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="ادخل كود الطالب" />
                </div>
                <select class="form-select mb-3" name="">
                    <option selected>اختر الشهر</option>
                </select>
                <div class="mb-3">
                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="ادخل سعر الشهر (اختياري)" />
                </div>
                <div>
                    <textarea class="form-control" placeholder="ملاحظات (اختياري)" name="" id="" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                <button type="button" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- Modal for month -->
<div class="modal fade" id="payment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="mb-3">مصروفات جديدة</h2>
                <div class="mb-3">
                    <input type="number" class="form-control" name="" id="" aria-describedby="helpId" placeholder="المبلغ المدفوع" />
                </div>
                <div>
                    <textarea class="form-control" placeholder="ملاحظات (اختياري)" name="" id="" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                <button type="button" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- Modal for delete -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="../../Controllers/setting.php" method="post">
                <div class="modal-body">
                    <h2>هل تريد حذف هذا العنصر ؟</h2>
                    <input type="hidden" name="modal" id="modal">
                    <input type="hidden" name="modal_id" id="modal_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                    <button type="submit" name="delete" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal for 