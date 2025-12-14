<?php
require_once "method/users.php";
require_once "method/vote.php";
$users_obj = new users();
$vote_obj = new vote();
switch ($action){
    case 'create':
        $vote_obj->create($userID,$_POST);
        header("location:?c=vote&a=list&m=$manager");
        break;
    case 'show':
        $vote=$vote_obj->show($_GET['id']);
        break;
    case 'list' :
        $votes = $vote_obj->list();

        break;
    case 'edit':
        $vote=$vote_obj->show($_GET['id']);
        break;
    case 'update':

        $vote_obj->update($_POST);
        header("location:?c=vote&a=list&m=$manager");
        break;
    case 'delete':
        $id= $_GET['id'];
        $vote_obj->delete($id);
        header("location:?c=vote&a=list&m=$manager");
        break;

}