<?php
class Subcategory
{
    protected $con;
    public function __construct($connection)
    {
        $this->con = $connection;
    }
    public function add($title, $image)
    {
        $data = $this->con->prepare('insert into subcategories (title,image) values (?,?)');
        $data->execute(array($title, $image));
    }
    public function edit($title, $category_id)
    {
        $data = $this->con->prepare('update subcategories set title = ? where id = ?');
        $data->execute(array($title, $category_id));
    }
    public function delete($category_id)
    {
        $data = $this->con->prepare('delete from subcategories where id = ?');
        $data->execute(array($category_id));
    }
    public function fetch_all()
    {
        $data = $this->con->prepare('select * from subcategories order by id desc');
        $data->execute();
        $subcategories = $data->fetchAll();
        return $subcategories;
    }
    public function fetch($id)
    {
        $data = $this->con->prepare('select * from subcategories where id = ? order by id desc');
        $data->execute(array($id));
        $category = $data->fetch();
        return $category;
    }
}
