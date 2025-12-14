<?php
class managment{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }
    public function create($userID,$data)
    {

        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $mobile = $data['mobile'];
        $password = strtoupper(sha1($data['password']));
        $post=$data['post'];
        $zone=$data['zone'];
        $admin = $data['admin'];
        $general = $data['general'];
        $deputy = $data['deputy'];
        $it = $data['it'];
        $hr= $data['hr'];
        $support= $data['support'];
        $created_at=$data['created_at'];
            $this->db->query("insert into users (firstname,lastname,creator,email,mobile,password,post,zone,create_at,admin,it,hr,support,general,deputy) 
                                    values ('$firstname','$lastname','$userID','$email','$mobile','$password','$post','$zone','$created_at','$admin','$it','$hr','$support','$general','$deputy') ");

    }
    public function list()
    {
        $query = $this->db->query("select * from users");
        return $query->fetchAll();
    }
    public function show($id)
    {
        $query=$this->db->query("select * from users where id = $id");
        return $query->fetch();
    }
    public function update($data)
    {
        $id = $data['id'];
        $query=$this->db->query("select password from users where id = $id ");
        $pass=$query->fetch();
        $password =$pass[0];
        if(strlen($data['password']>0)){
            $password = strtoupper(sha1($data['password']));
        }
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $post=$data['post'];
        $mobile=$data['mobile'];
        $zone=$data['zone'];
        $admin = $data['admin'];
        $general = $data['general'];
        $deputy = $data['deputy'];
        $it = $data['it'];
        $hr= $data['hr'];
        $support= $data['support'];
        $this->db->query("update users set 
                 firstname='$firstname' ,lastname = '$lastname',
                 email = '$email', password = '$password', zone = '$zone' ,
                 mobile='$mobile', post='$post' , admin = '$admin' , it = '$it' , hr = '$hr' , support = '$support' , general = '$general', deputy = '$deputy'
                  where id=$id");
    }
    public function delete($id)
    {
        $query=$this->db->query("delete from users where id= $id");
        return $query->fetch();
    }

}
