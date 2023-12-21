<?php
class Admin
{
    protected $con;
    public function __construct($connection)
    {
        $this->con = $connection;
    }
    public function login($username, $password)
    {
        $data = $this->con->prepare('select * from admins where name = ? and password = ?');
        $data->execute(array($username, md5($password)));
        $user = $data->fetchAll();
        if (count($user) > 0) {
            $_SESSION['admin_id'] = $user[0]['id'];
            header('Location: ../view/dashboard/index.php');
            exit();
        }
    }
    public function add($title, $image)
    {
        $data = $this->con->prepare('insert into categories (title,image) values (?,?)');
        $data->execute(array($title, $image));
    }
    public function edit($title, $category_id)
    {
        $data = $this->con->prepare('update categories set title = ? where id = ?');
        $data->execute(array($title, $category_id));
    }
    public function delete($category_id)
    {
        $data = $this->con->prepare('delete from categories where id = ?');
        $data->execute(array($category_id));
    }
    public function fetch_all()
    {
        $data = $this->con->prepare('select * from categories order by id desc');
        $data->execute();
        $categories = $data->fetchAll();
        return $categories;
    }
    public function fetch($id)
    {
        $data = $this->con->prepare('select * from categories where id = ? order by id desc');
        $data->execute(array($id));
        $category = $data->fetch();
        return $category;
    }
}
