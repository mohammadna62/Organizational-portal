<?php
require_once "method/users.php";
require_once "method/deputy.php";
$users_obj = new users();
$deputy_obj = new deputy();
switch ($action){
//    case 'create':
//        $general_obj->create($userID,$_POST);
//        header("location:?c=general&a=list&m=$manager");
//        break;
    case 'show':
        $deputy=$deputy_obj->show($_GET['id']);
        $deputy_obj->update($_GET['id']);
        break;
    case 'list' :
        $deputys = $deputy_obj->list();
        break;
    case 'sendreply':
        $deputy_obj->sendreply($_POST);
        header("location:?c=deputy&a=list&m=$manager");
        break;
    case 'reply':
        $idreply=$_GET['id'];
        $reply_msg=new deputy();
        $replymsg=$reply_msg->showreply($idreply);
        break;

    case 'delete':
        $id= $_GET['id'];
        $deputy_obj->delete($id);
        header("location:?c=deputy&a=list&m=$manager");
        break;

}