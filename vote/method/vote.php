<?php
class vote{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }
//    public function create($creator,$data,$pic)
//    {
//        $firstname = $data['firstname'];
//        $lastname = $data['lastname'];
//        $gender = $data['gender'];
//        $mobile = $data['mobile'];
//        $codemeli = $data['codemeli'];
//        $codepersoneli = $data['codepersoneli'];
//        $post=$data['post'];
//        $created_at = $data['created_at'];
//        $description = $data['description'];
//        $slogan=$data['slogan'];
//        $this->db->query("insert into vote(creator,firstname,lastname,mobile,codemeli,codepersoneli,pic,created_at,description,post,gender,slogan)
//                                         values ('$creator','$firstname','$lastname','$mobile','$codemeli','$codepersoneli','$pic','$created_at','$description','$post','$gender','$slogan')");
//    }
    public function login($username)
    {
        $query=$this->db->query("select * from vote where codemeli ='$username '");
        return $query->fetch();
    }
//    public function list()
//    {
//        $query=$this->db->query("select * from volunteer order by lastname  ");
//        return $query->fetchAll();
//    }
    public function voteStatus($codemeli)
    {
        $query=$this->db->query("select voteStatus from vote where codemeli='$codemeli' ");
        return $query->fetch();
    }
    public function inspectionvotestatus($codemeli)
    {
        $query=$this->db->query("select inspectionvotestatus from vote where codemeli='$codemeli' ");
        return $query->fetch();
    }
    public function votes($data,$volName,$codemeli,$voteip,$votaetime)
    {
        $this->db->query("update vote set  votes='$data',volunteerName='$volName',voteStatus= '1' , votaetime='$votaetime', voteip='$voteip' where codemeli=$codemeli");

    }
    public function inspectvotes($data,$volName,$codemeli,$inspectvoteip,$inspectvotetime)
    {
        $this->db->query("update vote set  inspectionvote='$data',inspectionvolname='$volName',inspectionvotestatus= '1' , inspectvotetime='$inspectvotetime', inspectvoteip='$inspectvoteip' where codemeli=$codemeli");

    }
    public function sendgeneralStatus($codemeli)
    {
        $query=$this->db->query("select sendgeneralstatus	 from vote where codemeli='$codemeli' ");
        return $query->fetch();
    }
    public function senddeputyStatus($codemeli)
    {
        $query=$this->db->query("select senddeputystatus	 from vote where codemeli='$codemeli' ");
        return $query->fetch();
    }

    public function user($data)
    {
        $codemeli=$data;
        $query=$this->db->query("SELECT * FROM `vote` WHERE codemeli=$codemeli");
        return$query->fetch();
    }
//    public function deleteall($email)
//    {
//        $query=$this->db->query("select * from devices ");
//        return $query->fetch();
//    }

}
