<?php
require_once "method/users.php";
require_once "method/bonyadPanel.php";

$users_obj = new users();
$bonyadPanel_obj = new bonyadPanel();

$manager = $_GET['m'];
switch ($action){

    case 'show':
        $device=$bonyadPanel_obj->show($_GET['id']);
        break;
    case 'list' :
        $devices = $bonyadPanel_obj->list();
       break;
//    case 'edit':
//        $device=$bonyadPanel_obj->show($_GET['id']);
//        break;
////    case 'update':
////
////        $bonyadPanel_obj->update($_POST);
////        header("location:?c=contacts&a=list&m=$manager");
////        break;
    case 'delete':
        $id= $_GET['id'];
        $bonyadPanel_obj->delete($id);
        header("location:?c=bonyadPanel&a=list&m=$manager");
        break;
    case 'set':
        $second=$bonyadPanel_obj->second();
        header("location:?c=bonyadPanel&a=list&t=$second&m=$manager");
        break;
    case 'deleteall':
        $second=$bonyadPanel_obj->second();
        $email = $_POST['username'];
        $password = strtoupper(sha1($_POST['password']));
        $user=$users_obj->login($email);
        if (($user['password']==$password) && ($user['admin'] == "admin" || $user['it'] == "it")){
            $bonyadPanel_obj->deleteall();
        }
        header("location:?c=bonyadPanel&a=list&t=$second&m=$manager");
        break;

}