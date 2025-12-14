<?php
class election{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }
    public function create($creator,$data,$pic)
    {
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $gender = $data['gender'];
        $mobile = $data['mobile'];
        $codemeli = $data['codemeli'];
        $codepersoneli = $data['codepersoneli'];
        $post=$data['post'];
        $created_at = $data['created_at'];
        $description = $data['description'];
        $slogan=$data['slogan'];
        $this->db->query("insert into volunteer(creator,firstname,lastname,mobile,codemeli,codepersoneli,pic,created_at,description,post,gender,slogan) 
                                         values ('$creator','$firstname','$lastname','$mobile','$codemeli','$codepersoneli','$pic','$created_at','$description','$post','$gender','$slogan')");
    }

    public function list()
    {
        $query=$this->db->query("select * from volunteer order by voteCount desc ");
        return $query->fetchAll();
    }
    public function show($id)
    {
        $query=$this->db->query("select * from volunteer where id = $id");
        return $query->fetch();
    }
    public function showpic($id)
    {
        $query=$this->db->query("SELECT pic FROM `volunteer` WHERE id=$id");
        return$query->fetch();
    }
//    public function edit($id)
//    {
//
//    }
    public function update($data,$pic)
    {
        $id = $data['id'];
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $gender = $data['gender'];
        $mobile = $data['mobile'];
        $codemeli = $data['codemeli'];
        $codepersoneli = $data['codepersoneli'];
        $post=$data['post'];
        $description = $data['description'];
        $slogan=$data['slogan'];
        $this->db->query("update volunteer set firstname='$firstname' ,lastname= '$lastname',mobile='$mobile',codemeli='$codemeli',codepersoneli='$codepersoneli',pic='$pic',description='$description',post='$post',gender='$gender',slogan='$slogan' where id=$id");
    }
    public function delete($id)
    {
        $query=$this->db->query("select pic from volunteer where id = $id");
        $query= $query->fetch();
        $path=$query[0];
        unlink($path);
        $this->db->query("delete from volunteer where id=$id");
    }
    public function default()
    {
       $this->db->query("update volunteer set voteCount=0");
        $this->db->query("update vote set voteStatus='0',votes='',volunteerName='' , votaetime='', voteip='' ");
    }

}