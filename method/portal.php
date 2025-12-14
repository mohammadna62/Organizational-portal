<?php
class portal{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }
//    public function create($creator,$data)
//    {
//        $firstname = $data['firstname'];
//        $lastname = $data['lastname'];
//        $mobile = $data['mobile'];
//        $codemeli = $data['codemeli'];
//        $codepersoneli = $data['codepersoneli'];
//        $floor = $data['floor'];
//        $node = $data['node'];
//        $room = $data['room'];
//        $username = $data['username'];
//        $password = $data['password'];
//        $ip=$data['ip'];
//        $computer_name = $data['computer_name'];
//        $chrome_ver = $data['chrome_ver'];
//        $case_amval = $data['case_amval'];
//        $motherbord_detail = $data['motherbord_detail'];
//        $cpu_detail = $data['cpu_detail'];
//        $ram_detail = $data['ram_detail'];
//        $hdd_detail = $data['hdd_detail'];
//        $os_detail = $data['os_detail'];
//        $monitor_name = $data['monitor_name'];
//        $monitor_amval = $data['monitor_amval'];
//        $status = $data['status'];
//        $description=$data['description'];
//        $created_at= $data['created_at'];
//        $this->db->query("insert into hardware(creator,firstname,lastname,mobile,codemeli,
//                          codepersoneli,floor,node,room,
//                          username,password,ip,computer_name,chrome_ver,
//                          case_amval,motherbord_detail,cpu_detail,ram_detail,hdd_detail,os_detail,monitor_name,monitor_amval,status,description,created_at)
//      values ($creator,'$firstname','$lastname','$mobile','$codemeli','$codepersoneli','$floor',
//              '$node','$room','$username','$password','$ip','$computer_name','$chrome_ver','$case_amval','$motherbord_detail'
//              ,'$cpu_detail','$ram_detail','$hdd_detail','$os_detail',
//              '$monitor_name','$monitor_amval','$status','$description','$created_at')");
//    }
//    public function list()
//    {
//        $query=$this->db->query("select * from hardware order by id desc ");
//        return $query->fetchAll();
//    }
    public function show()
    {
        $query=$this->db->query("select * from portal");
        return $query->fetch();
    }
    public function setwebsiteStatus($data)
    {

        $this->db->query("update portal set websiteStatus= '$data'");
    }
//    public function edit($id)
//    {
//
//    }
    public function updatetext($data)
    {
        $text = $data['text'];
        $this->db->query("update portal set text= '$text'");
    }
    public function updatemessage($data)
    {
        $message = $data['message'];
        $this->db->query("update portal set message= '$message'");
    }
    public function updatefile($data,$file)
    {
        $title_file = $data['title_file'];
        $this->db->query("update portal set file= '$file' , title_file='$title_file'");
    }
    public function updatespfile($data,$spfile)
    {
        $spmessage = $data['spmessage'];
        $spip = $data['spip'];
        $this->db->query("update portal set spfile= '$spfile' , spmessage='$spmessage' , spip='$spip'");
    }
    public function updatepic($data,$pic)
    {
        $title_pic = $data['title_pic'];
        $this->db->query("update portal set pic= '$pic' , title_pic='$title_pic'");
    }
    public function updatevideo($data,$video)
    {
        $title_video = $data['title_video'];
        $this->db->query("update portal set video= '$video' , title_video='$title_video'");
    }
    public function secondclient()
    {
       $refreshclient= $_POST['refreshclient'];
        $this->db->query("update portal set refreshclient= '$refreshclient'");
        $query=$this->db->query("select refreshclient from portal");
        return $query->fetch();
    }
    public function set()
    {
        $query=$this->db->query("select * from portal");
        return $query->fetch();
    }
    public function getData()
    {
        $query=$this->db->query("select * from portal");
        return $query->fetch();
    }

    public function deleteMessage()
    {
        $this->db->query("update portal set message= ''");
    }
    public function deletetext()
    {
        $this->db->query("update portal set text= ''");
    }
    public function deletefile()
    {
        $query=$this->db->query("select file from portal");
        $query= $query->fetch();
        $path=$query[0];
        unlink($path);
        $this->db->query("update portal set title_file= '' , file=''");
    }
    public function deletespfile()
    {
        $query=$this->db->query("select spfile from portal");
        $query= $query->fetch();
        $path=$query[0];
        unlink($path);
        $this->db->query("update portal set spmessage= '' , spfile='' , spip=''");
    }
    public function deletepic()
    {
        $query=$this->db->query("select pic from portal");
        $query= $query->fetch();
        $path=$query[0];
        unlink($path);
        $this->db->query("update portal set title_pic= '' , pic=''");
    }
    public function deletevideo()
    {
        $query=$this->db->query("select video from portal");
        $query= $query->fetch();
        $path=$query[0];
        unlink($path);
        $this->db->query("update portal set title_video= '' , video=''");
    }
    public function voteSet($voteSet)
    {
                $this->db->query("update portal set voteStatus= '$voteSet'");
    }
    public function voteStatus()
    {
        $query=$this->db->query("select voteStatus from portal");
        return $query->fetch();
    }
    public function updatetabpic($pic)
    {

        $this->db->query("update portal set tabpic= '$pic' , tabpicstatus='1'");
    }
    public function deletetabpic()
    {
        $query=$this->db->query("select tabpic from portal");
        $query= $query->fetch();
        $path=$query[0];
        unlink($path);
        $this->db->query("update portal set  tabpic='' , tabpicstatus='0'");
    }
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
