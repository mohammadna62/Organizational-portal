<?php
class general{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }
    public function sendreply($data)
    {
        $codemeli = $data['codemeli'];
        $codepersoneli = $data['codepersoneli'];
        $datetime = $data['datetime'];
        $text = $data['text'];
        $id = $data['id'];
        $readstatus = 1;

        $this->db->query("insert into generalreply(orginalmsgid,codepersoneli,codemeli,text,datetime,readstatus)
                             values ('$id','$codepersoneli','$codemeli','$text','$datetime','$readstatus')");
    }

    public function list()
    {
        $query=$this->db->query("select * from generalmsg order by id desc ");
        return $query->fetchAll();
    }
    public function show($id)
    {
        $query=$this->db->query("select * from generalmsg where id = $id");
        return$query->fetch();
    }

    public function update($id)
    {
        $readstatus = 0;
        $this->db->query("update generalmsg set readstatus='$readstatus' where id=$id");
    }
    public function delete($id)
    {
        $query=$this->db->query("select pic from generalmsg");
        $query= $query->fetch();
        $path="vote/".$query[0];
        unlink($path);
        $this->db->query("delete from generalmsg where id=$id");

    }
    public function showreply($id)
    {
        $query=$this->db->query("select * from generalmsg where id = $id");
        return$query->fetch();
    }
}