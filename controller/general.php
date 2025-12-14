<?php
require_once "method/users.php";
require_once "method/general.php";
$users_obj = new users();
$general_obj = new general();
switch ($action){
//    case 'create':
//        $general_obj->create($userID,$_POST);
//        header("location:?c=general&a=list&m=$manager");
//        break;
    case 'show':
        $general=$general_obj->show($_GET['id']);
        $general_obj->update($_GET['id']);
        break;
    case 'list' :
        $generals = $general_obj->list();
        break;
    case 'sendreply':
       $general_obj->sendreply($_POST);
        header("location:?c=general&a=list&m=$manager");
        break;
    case 'reply':
        $idreply=$_GET['id'];
        $reply_msg=new general();
        $replymsg=$reply_msg->showreply($idreply);
        break;

    case 'delete':
        $id= $_GET['id'];
        $general_obj->delete($id);
        header("location:?c=general&a=list&m=$manager");
        break;

}