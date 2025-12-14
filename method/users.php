<?php
class users{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }
    public function signup($data) : bool
    {
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $mobile = $data['mobile'];
        $password = strtoupper(sha1($data['password']));
        $post=$data['post'];
        try {
            $this->db->query("insert into users (firstname,lastname,email,mobile,password,post) values ('$firstname','$lastname','$email','$mobile','$password','$post') ");
            return true;
        }
        catch (PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }
    public function login($email)
    {
        $query=$this->db->query("select * from users where email ='$email '");
        return $query->fetch();
    }
    public function deleteall($email)
    {
        $query=$this->db->query("select * from devices ");
        return $query->fetch();
    }

}
