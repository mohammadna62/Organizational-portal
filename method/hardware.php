<?php
class hardware{
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
        $floor = $data['floor'];
        $node = $data['node'];
        $room = $data['room'];
        $username = $data['username'];
        $password = $data['password'];
        $ip=$data['ip'];
        $computer_name = $data['computer_name'];
        $chrome_ver = $data['chrome_ver'];
        $case_amval = $data['case_amval'];
        $motherbord_detail = $data['motherbord_detail'];
        $cpu_detail = $data['cpu_detail'];
        $ram_detail = $data['ram_detail'];
        $hdd_detail = $data['hdd_detail'];
        $os_detail = $data['os_detail'];
        $monitor_name = $data['monitor_name'];
        $monitor_amval = $data['monitor_amval'];
        $status = $data['status'];
        $description=$data['description'];
        $created_at= $data['created_at'];
        $this->db->query("insert into hardware(creator,firstname,lastname,mobile,codemeli,
                          codepersoneli,floor,node,room,
                          username,password,ip,computer_name,chrome_ver,
                          case_amval,motherbord_detail,cpu_detail,ram_detail,hdd_detail,os_detail,monitor_name,monitor_amval,status,description,created_at) 
      values ($creator,'$firstname','$lastname','$mobile','$codemeli','$codepersoneli','$floor',
              '$node','$room','$username','$password','$ip','$computer_name','$chrome_ver','$case_amval','$motherbord_detail'
              ,'$cpu_detail','$ram_detail','$hdd_detail','$os_detail',
              '$monitor_name','$monitor_amval','$status','$description','$created_at')");
    }
    public function list()
    {
        $query=$this->db->query("select * from hardware order by id desc ");
        return $query->fetchAll();
    }
    public function show($id)
    {
        $query=$this->db->query("select * from hardware where id = $id");
        return $query->fetch();
    }
    public function edit($id)
    {

    }
    public function update($data)
    {
        $id = $data['id'];
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $mobile = $data['mobile'];
        $codemeli = $data['codemeli'];
        $codepersoneli = $data['codepersoneli'];
        $floor = $data['floor'];
        $node = $data['node'];
        $room = $data['room'];
        $username = $data['username'];
        $password = $data['password'];
        $ip=$data['ip'];
        $computer_name = $data['computer_name'];
        $chrome_ver = $data['chrome_ver'];
        $case_amval = $data['case_amval'];
        $motherbord_detail = $data['motherbord_detail'];
        $cpu_detail = $data['cpu_detail'];
        $ram_detail = $data['ram_detail'];
        $hdd_detail = $data['hdd_detail'];
        $os_detail = $data['os_detail'];
        $monitor_name = $data['monitor_name'];
        $monitor_amval = $data['monitor_amval'];
        $status = $data['status'];
        $description=$data['description'];
        $created_at= $data['created_at'];
        $this->db->query("update hardware set firstname='$firstname' ,lastname= '$lastname',mobile='$mobile',codemeli='$codemeli',
                    codepersoneli='$codepersoneli' , floor= '$floor',node='$node',room='$room',username='$username',
                    password='$password',ip= '$ip' ,computer_name= '$computer_name',chrome_ver='$chrome_ver',case_amval='$case_amval',motherbord_detail='$motherbord_detail',
                    cpu_detail='$cpu_detail' ,ram_detail= '$ram_detail',hdd_detail='$hdd_detail',os_detail='$os_detail',monitor_name='$monitor_name',                    
                    monitor_amval='$monitor_amval' ,status= '$status',description= '$description' , created_at = '$created_at'
                    where id=$id");
    }
    public function delete($id)
    {
        $this->db->query("delete from hardware where id=$id");
    }
    public function search()
    {
        $query=$this->db->query("select * from hardware order by id desc ");
        return $query->fetchAll();
    }
//    public function last_contacts()
//    {
//        $query = $this->db->query("select * from contacts order by id desc limit 2");
//        return $query->fetchAll();
//    }
}
