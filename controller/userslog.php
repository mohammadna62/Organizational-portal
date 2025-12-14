<?php
require_once "method/users.php";
require_once "method/userslog.php";
$users_obj = new users();
$userslog_obj = new userslog();
$manager = $_GET['m'];
switch ($action){
    case 'create':
        $userslog_obj->create($userID,$_POST);
        header("location:?c=userslog&a=list&m=$manager");
        break;
    case 'show':
        $userslog=$userslog_obj->show($_GET['id']);
        break;
    case 'list' :
        $userslogs = $userslog_obj->list();

        break;
    case 'delete':
        $id= $_GET['id'];
        $userslog_obj->delete($id);
        header("location:?c=userslog&a=list&m=$manager");
        break;

}