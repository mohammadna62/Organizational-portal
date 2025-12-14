<?php
class vote{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }
    public function create($creator,$data)
    {
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $mobile = $data['mobile'];
        $codemeli = $data['codemeli'];
        $codepersoneli = $data['codepersoneli'];
        $zone=$data['zone'];
        $created_at = $data['created_at'];
        $sendgeneralstatus = 1 ;
        $senddeputystatus = 1 ;
        $voteability=$data['voteability'];
        $description = $data['description'];

        $this->db->query("insert into vote(creator,firstname,lastname,mobile,codemeli,codepersoneli,created_at,description,zone,sendgeneralstatus,senddeputystatus,voteability) 
                             values ('$creator','$firstname','$lastname','$mobile','$codemeli','$codepersoneli','$created_at','$description','$zone','$sendgeneralstatus','$senddeputystatus','$voteability')");
    }

    public function list()
    {
        $query=$this->db->query("select * from vote order by id desc ");
        return $query->fetchAll();
    }
    public function show($id)
    {
        $query=$this->db->query("select * from vote where id = $id");
        return$query->fetch();
    }

    public function edit($id)
    {

    }
    public function update($data)
    {
        $id = $data['id'];
//        $firstname = $data['firstname'];
//        $lastname = $data['lastname'];
//        $mobile = $data['mobile'];
//        $codemeli = $data['codemeli'];
//        $codepersoneli = $data['codepersoneli'];
//        $zone=$data['zone'];
        $voteStatus = $data['voteStatus'];
        $voteability=$data['voteability'];
        $description = $data['description'];
        $this->db->query("update vote set description='$description', voteStatus='$voteStatus', voteability='$voteability' where id=$id");
    }
    public function delete($id)
    {
        $this->db->query("delete from vote where id=$id");
    }
    public function birthday($birthday)
    {
        $query = $this->db->query("select * from contacts where birthday LIKE '%$birthday'");
        return $query->fetchAll();
    }
}