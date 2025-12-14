<?php
class migration{
    public function __construct(){
        global $db;
        $this->db=$db;
    }
    public function creat_db($dbname): bool
    {
        try {
            $this->db->query("create database $dbname");
            $filename= 'includes/config.php';
            $line=5;
            $lines = file($filename,FILE_IGNORE_NEW_LINES);
            $lines[$line]='$database ="'.$dbname.'";';
            file_put_contents($filename,implode("\n",$lines));
            echo "<br>"."Database With Name : "."<labale style='font-size: 20px; color: red'>" .$dbname."</labale>"." Created Successfully";
             return true;
        }catch (PDOException $e){
          echo $e->getMessage();
        }
    }
    public function creat_tbl($dbname):bool
    {
        try {
            $query[0]="create table $dbname.users (
             id int(6) unsigned auto_increment primary key,
             firstname varchar(255) not null,
             lastname varchar(255) not null,
             email varchar(255) unique ,
             mobile varchar(255) unique ,
             password varchar(255),
            
             create_at timestamp default current_timestamp ON update current_timestamp,
             delete_at timestamp default current_timestamp ON update current_timestamp

    )";
            $query[1]="create table $dbname.contacts (
             id int(6) unsigned auto_increment primary key,
             creator int(6) unsigned ,
             firstname varchar(255) not null,
             lastname varchar(255) not null,
             email varchar(255)  ,
             mobile varchar(255)  ,
             address varchar(255),
             pic varchar(255),
             create_at timestamp default current_timestamp ON update current_timestamp,
             delete_at timestamp default current_timestamp ON update current_timestamp

    )";
            foreach ($query as $item){
                $this->db->query($item);
            }
            echo '<br>Successfully Table created!';
            return true;
        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}
