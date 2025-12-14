<?php
class senddeputy{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }

    public function send($data,$pic)
    {
        $fullname = $data['fullname'];
        $readstatus= 1;
        $title = $data['title'];
        $text=$data['text'];
        $datetime = $data['datetime'];
        $ip=$data['ip'];
        $devicename = $data['devicename'];
        $codepersoneli = $data['codepersoneli'];
        $codemeli = $data['codemeli'];
        $mobile = $data['mobile'];
        $zone = $data['zone'];
        $this->db->query("insert into deputymsg(fullname,mobile,codemeli,codepersoneli,pic,datetime,readstatus,title,text,ip,devicename,zone)
                             values ('$fullname','$mobile','$codemeli','$codepersoneli','$pic','$datetime','$readstatus','$title','$text','$ip','$devicename','$zone')");

    }
    public function deputyreplylist($data)
    {
        $codemeli=$data['codemeli'];
        $codepersoneli=$data['codepersoneli'];
        $query=$this->db->query("select * from deputyreply where codemeli= $codemeli and codepersoneli=$codepersoneli  order by  id desc  ");
        return $query->fetchAll();
    }
    public function showreply($id)
    {
        $id=$id;
        $query=$this->db->query("select * from deputyreply where id= $id ");
        return $query->fetch();
    }



}