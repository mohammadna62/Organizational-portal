<?php

class bonyadPanel
{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function create($datetime)
    {
        $ip = '';
        $serverip = '';
        $devicename = '';
        $browser = '';
        if (isset($_POST["ip"])) {
            $ip = $_POST["ip"];
        }
        if (isset($_POST["serverip"])) {
            $serverip = $_POST['serverip'];
        }
        if (isset($_POST["devicename"])) {
            $devicename = $_POST['devicename'];
        }
        if (isset($_POST["browser"])) {
            $browser = $_POST['browser'];
        }
         $this->db->query("insert into devices(ip,serverip,devicename,browser,datetime) 
      values ('$ip','$serverip','$devicename','$browser','$datetime')");

        $this->db->query("delete from devices where ip=''");

    }

    public function list()
    {
        $query = $this->db->query("select * from devices order by id desc ");
        return $query->fetchAll();
    }

    public function show($id)
    {
        $query = $this->db->query("select * from devices where id = $id");
        return $query->fetch();
    }
//    public function edit($id)
//    {
//
//    }
//    public function update($data,$pic)
//    {
//        $id = $data['id'];
//        $firstname = $data['firstname'];
//        $lastname = $data['lastname'];
//        $email = $data['email'];
//        $mobile = $data['mobile'];
//        $address = $data['address'];
//        $this->db->query("update devices set firstname='$firstname' ,lastname= '$lastname',email='$email',mobile='$mobile',address='$address',pic='$pic' where id=$id");
//    }
    public function delete($id)
    {
        $this->db->query("delete from devices where id=$id");
    }

    public function last_devices()
    {
        $query = $this->db->query("select * from devices order by id DESC limit 3");
        return $query->fetchAll();
    }

    public function second()
    {
        if (isset($_POST['refresh'])) {

            $second = $_POST['refresh'];
        } else {
            $second = 60;
        }
        return $second;
    }

    public function deleteall()
    {
        $this->db->query("delete from devices ");
    }
}