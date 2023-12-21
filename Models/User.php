<?php
class User
{
    protected $con;
    public function __construct($connection)
    {
        $this->con = $connection;
    }
    public function add($title, $image)
    {
        $data = $this->con->prepare('insert into users (title,image) values (?,?)');
        $data->execute(array($title, $image));
    }
    public function edit($title, $category_id)
    {
        $data = $this->con->prepare('update users set title = ? where id = ?');
        $data->execute(array($title, $category_id));
    }
    public function delete($category_id)
    {
        $data = $this->con->prepare('delete from users where id = ?');
        $data->execute(array($category_id));
    }
    public function fetch_all()
    {
        $data = $this->con->prepare('select * from users order by id desc');
        $data->execute();
        $users = $data->fetchAll();
        return $users;
    }
    public function fetch($id)
    {
        $data = $this->con->prepare('select * from users where id = ? order by id desc');
        $data->execute(array($id));
        $category = $data->fetch();
        return $category;
    }
}
