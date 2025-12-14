<?php
class survey{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }
    public function create($data,$pic)
    {
        $familyname = $data['familyname'];
        $codemeli = $data['codemeli'];
        $codepersoneli = $data['codepersoneli'];
        $ip=$data['ip'];
        $devicename=$data['devicename'];
        $description=$data['description'];
        $created_at= $data['datetime'];
        $this->db->query("insert into survey (familyname,codemeli,codepersoneli,description,ip,pic,devicename,created_at)
                  values ('$familyname','$codemeli','$codepersoneli','$description','$ip','$pic','$devicename','$created_at')");
    }
    public function list()
    {
        $query=$this->db->query("select * from survey order by id desc ");
        return $query->fetchAll();
    }
    public function delete($id)
    {
        $query=$this->db->query("select pic from survey where id=$id");
        $query= $query->fetch();
        $path=$query[0];
        unlink($path);
        $this->db->query("delete from survey where id=$id");
    }
    public function show($id)
    {
        $query=$this->db->query("select * from survey WHERE id=$id");
        return $query->fetch();
    }
//    public function edit($id)
//    {
//
//    }
//    public function updatetext($data)
//    {
//        $text = $data['text'];
//        $this->db->query("update survey set text= '$text'");
//    }
//    public function updatemessage($data)
//    {
//        $message = $data['message'];
//        $this->db->query("update survey set message= '$message'");
//    }
//    public function updatefile($data,$file)
//    {
//        $title_file = $data['title_file'];
//        $this->db->query("update survey set file= '$file' , title_file='$title_file'");
//    }
//    public function updatepic($data,$pic)
//    {
//        $title_pic = $data['title_pic'];
//        $this->db->query("update survey set pic= '$pic' , title_pic='$title_pic'");
//    }
//    public function updatevideo($data,$video)
//    {
//        $title_video = $data['title_video'];
//        $this->db->query("update survey set video= '$video' , title_video='$title_video'");
//    }
//    public function secondclient()
//    {
//        $refreshclient= $_POST['refreshclient'];
//        $this->db->query("update survey set refreshclient= '$refreshclient'");
//        $query=$this->db->query("select refreshclient from survey");
//        return $query->fetch();
//    }
//    public function set()
//    {
//        $query=$this->db->query("select * from survey");
//        return $query->fetch();
//    }
//    public function getData()
//    {
//        $query=$this->db->query("select * from survey");
//        return $query->fetch();
//    }
//
//    public function deleteMessage()
//    {
//        $this->db->query("update portal set message= ''");
//    }
//    public function deletetext()
//    {
//        $this->db->query("update portal set text= ''");
//    }
//    public function deletefile()
//    {
//        $query=$this->db->query("select file from portal");
//        $query= $query->fetch();
//        $path=$query[0];
//        unlink($path);
//        $this->db->query("update portal set title_file= '' , file=''");
//    }
//    public function deletepic()
//    {
//        $query=$this->db->query("select pic from portal");
//        $query= $query->fetch();
//        $path=$query[0];
//        unlink($path);
//        $this->db->query("update portal set title_pic= '' , pic=''");
//    }
//    public function deletevideo()
//    {
//        $query=$this->db->query("select video from portal");
//        $query= $query->fetch();
//        $path=$query[0];
//        unlink($path);
//        $this->db->query("update portal set title_video= '' , video=''");
//    }
//    public function search()
//    {
//        $query=$this->db->query("select * from hardware order by id desc ");
//        return $query->fetchAll();
//    }
//    public function last_contacts()
//    {
//        $query = $this->db->query("select * from contacts order by id desc limit 2");
//        return $query->fetchAll();
//    }
}
