<?php
class Category
{
    protected $con;
    public function __construct($connection)
    {
        $this->con = $connection;
    }
    public function add($title, $price)
    {
        $data = $this->con->prepare('insert into categories (title,price) values (?,?)');
        $data->execute(array($title, $price));
        if ($data) {
            $_SESSION['message'] = 'تم اضافة المرحلة بنجاح';
        } else {
            $_SESSION['error'] = 'يوجد خطأ بالبيانات';
        }
    }
    public function edit($title, $price, $modal_id)
    {
        $data = $this->con->prepare("update categories set title = ? , price = ? where id = ?");
        $data->execute(array($title, $price, $modal_id));
        $rowCount = $data->rowCount();
        if ($rowCount > 0) {
            $_SESSION['message'] = 'تم تعديل المرحلة بنجاح';
        } else {
            $_SESSION['error'] = 'يوجد خطأ بالبيانات';
        }
    }
    public function fetch_all()
    {
        $data = $this->con->prepare('select * from categories order by id desc');
        $data->execute();
        $categories = $data->fetchAll();
        return $categories;
    }
}
