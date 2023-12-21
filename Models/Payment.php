<?php
class Payment
{
    protected $con;
    public function __construct($connection)
    {
        $this->con = $connection;
    }
    public function add($title, $image)
    {
        $data = $this->con->prepare('insert into payments (title,image) values (?,?)');
        $data->execute(array($title, $image));
    }
    public function edit($title, $category_id)
    {
        $data = $this->con->prepare('update payments set title = ? where id = ?');
        $data->execute(array($title, $category_id));
    }
    public function delete($category_id)
    {
        $data = $this->con->prepare('delete from payments where id = ?');
        $data->execute(array($category_id));
    }
    public function fetch_all()
    {
        $data = $this->con->prepare('select * from payments order by id desc');
        $data->execute();
        $payments = $data->fetchAll();
        return $payments;
    }
    public function fetch($id)
    {
        $data = $this->con->prepare('select * from payments where id = ? order by id desc');
        $data->execute(array($id));
        $category = $data->fetch();
        return $category;
    }
}
