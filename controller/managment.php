<?php
require_once "method/managment.php";
$managment_obj = new managment();
$manager = $_GET['m'];
switch ($action){
    case 'create':
        $managment_obj->create($userID,$_POST);
        header("location:?c=managment&a=list&m=$manager");
        break;
    case 'list' :
        $users = $managment_obj->list();

        break;
    case 'edit':
        $user =$managment_obj->show($_GET['id']);
        break;
    case 'update':
        $managment_obj->update($_POST);
        header("location:?c=managment&a=list&m=$manager");
        break;
    case 'delete':
        $id= $_GET['id'];
        $managment_obj->delete($id);
        header("location:?c=managment&a=list&m=$manager");
        break;

}