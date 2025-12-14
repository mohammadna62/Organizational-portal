<?php
class userslog{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }
    public function create($email,$fullname,$ip,$datetime)
    {
        $this->db->query("insert into userslog (username,fullname,ip,datetime)
                             values ('$email','$fullname','$ip','$datetime')");
    }


    public function list()
    {
        $query=$this->db->query("select * from userslog order by id desc ");
        return $query->fetchAll();
    }
    public function show($id)
    {
        $query=$this->db->query("select * from userslog where id = $id");
        return$query->fetch();
    }

    public function delete($id)
    {
        $query=$this->db->query("select pic from contacts where id = $id");
        $query= $query->fetch();
        $path=$query[0];
        unlink($path);
        $this->db->query("delete from userslog where id=$id");
    }

}