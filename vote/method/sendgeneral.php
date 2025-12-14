<?php
class sendgeneral{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }

    public function send($data,$pic)
    {
        $fullname = $data['fullname'];
          $readstatus= 1;
          $sendstatus= 1;
          $title = $data['title'];
          $text=$data['text'];
          $datetime = $data['datetime'];
          $ip=$data['ip'];
          $devicename = $data['devicename'];
          $codepersoneli = $data['codepersoneli'];
          $codemeli = $data['codemeli'];
          $zone = $data['zone'];
         $mobile = $data['mobile'];
          $this->db->query("insert into generalmsg(fullname,mobile,codemeli,codepersoneli,pic,datetime,readstatus,title,text,ip,devicename,sendstatus,zone)
                             values ('$fullname','$mobile','$codemeli','$codepersoneli','$pic','$datetime','$readstatus','$title','$text','$ip','$devicename','$sendstatus','$zone')");

    }
    public function generalreplylist($data)
    {
        $codemeli=$data['codemeli'];
        $codepersoneli=$data['codepersoneli'];
        $query=$this->db->query("select * from generalreply where codemeli= $codemeli and codepersoneli=$codepersoneli  order by  id desc  ");
        return $query->fetchAll();
    }

    public function showreply($id)
    {
        $id=$id;
        $query=$this->db->query("select * from generalreply where id= $id ");
        return $query->fetch();
    }


}