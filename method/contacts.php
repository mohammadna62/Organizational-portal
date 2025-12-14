<?php
class contacts{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }
    public function create($creator,$data,$pic)
    {
      $firstname = $data['firstname'];
      $lastname = $data['lastname'];
      $mobile = $data['mobile'];
      $codemeli = $data['codemeli'];
      $codepersoneli = $data['codepersoneli'];
      $address = $data['address'];
      $created_at = $data['created_at'];
      $description = $data['description'];
      $zone=$data['zone'];
      $contract=$data['contract'];
      $contract_date=$data['contract_date'];
      $post=$data['post'];
      $gender=$data['gender'];
      $birthday=$data['birthday'];
      $contStatus=$data['contStatus'];
        $this->db->query("insert into contacts(creator,firstname,lastname,gender,mobile,codemeli,codepersoneli,address,pic,created_at,description,zone,contract,contract_date,post,birthday,contStatus) 
                             values ('$creator','$firstname','$lastname','$gender','$mobile','$codemeli','$codepersoneli','$address','$pic','$created_at','$description','$zone','$contract','$contract_date','$post','$birthday','$contStatus')");
    }


    public function list()
    {
      $query=$this->db->query("select * from contacts order by id desc ");
      return $query->fetchAll();
    }
    public function show($id)
    {
      $query=$this->db->query("select * from contacts where id = $id");
      return$query->fetch();
    }
    public function showpic($id)
    {
        $query=$this->db->query("SELECT pic FROM `contacts` WHERE id=$id");
        return$query->fetch();
    }
    public function edit($id)
    {

    }
    public function update($data,$pic)
    {
        $id = $data['id'];
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $mobile = $data['mobile'];
        $codemeli = $data['codemeli'];
        $codepersoneli = $data['codepersoneli'];
        $address = $data['address'];
        $description = $data['description'];
        $zone=$data['zone'];
        $contract=$data['contract'];
        $contract_date=$data['contract_date'];
        $post=$data['post'];
        $gender=$data['gender'];
        $birthday=$data['birthday'];
        $contStatus=$data['contStatus'];
        $this->db->query("update contacts set firstname='$firstname' ,lastname= '$lastname',mobile='$mobile',codemeli='$codemeli',codepersoneli='$codepersoneli',address='$address',pic='$pic',description='$description',zone='$zone',contract='$contract',contract_date='$contract_date',post='$post',gender='$gender',birthday='$birthday', contStatus='$contStatus' where id=$id");
    }
    public function delete($id)
    {
        $query=$this->db->query("select pic from contacts where id = $id");
        $query= $query->fetch();
        $path=$query[0];
        unlink($path);
        $this->db->query("delete from contacts where id=$id");
    }
    public function birthday($birthday)
    {
        $query = $this->db->query("select * from contacts where birthday LIKE '%$birthday'");
        return $query->fetchAll();
    }
}