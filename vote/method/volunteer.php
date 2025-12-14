<?php
class volunteer{
    public function __construct()
    {
        global $db;
        $this->db =$db;
    }

    public function list()
    {
        $query=$this->db->query("select * from volunteer order by lastname  ");
        return $query->fetchAll();
    }
    public function voteCount($id)
    {
        $query=$this->db->query("select voteCount from volunteer where id=$id  ");
        $voteCount= $query->fetch();
        $count=$voteCount['voteCount']+1;
        $this->db->query("update volunteer set voteCount='$count' where id=$id");
        $query2=$this->db->query("select firstname,lastname from volunteer where id=$id  ");
        return (array)$query2->fetch();

    }


}
