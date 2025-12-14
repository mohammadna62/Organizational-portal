<?php
class inventory{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }
    public function create($creator,$data)
    {
        $goodsname = $data['goodsname'];
        $goodstype = $data['goodstype'];
        $number = $data['number'];
        $datetime = $data['datetime'];
       $this->db->query("insert into inventory(creator,goodsname,goodstype,number,datetime) 
      values ($creator,'$goodsname','$goodstype','$number','$datetime')");
    }
    public function list()
    {
        $query=$this->db->query("select * from inventory order by id desc ");
        return $query->fetchAll();
    }
    public function show($id)
    {
        $query=$this->db->query("select * from inventory where id = $id");
        return$query->fetch();
    }
    public function edit($id)
    {

    }
    public function update($data)
    {
        $id = $data['id'];
        $goodsname = $data['goodsname'];
        $goodstype = $data['goodstype'];
        $number = $data['number'];
        $datetime = $data['datetime'];
        $this->db->query("update inventory set goodsname='$goodsname' ,goodstype= '$goodstype',number='$number', datetime='$datetime' where id=$id");
    }
    public function delete($id)
    {
        $this->db->query("delete from inventory where id=$id");
    }
    public function last_inventory()
    {
        $query = $this->db->query("select * from inventory order by id desc limit 2");
        return $query->fetchAll();
    }
}