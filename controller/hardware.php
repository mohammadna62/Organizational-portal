<?php
require_once "method/users.php";
require_once "method/hardware.php";
$users_obj = new users();
$hardware_obj = new hardware();
$manager = $_GET['m'];
switch ($action){
    case 'create':
        $hardware_obj->create($userID,$_POST);
        header("location:?c=hardware&a=list&m=$manager");
        break;
    case 'show':
        $hardware=$hardware_obj->show($_GET['id']);
        break;
    case 'list' :
        $hardwares = $hardware_obj->list();

        break;
    case 'edit':
        $hardware=$hardware_obj->show($_GET['id']);
        break;
    case 'update':
        $hardware_obj->update($_POST);
        header("location:?c=hardware&a=list&m=$manager");
        break;
    case 'delete':
        $id= $_GET['id'];

        $hardware_obj->delete($id);
        header("location:?c=hardware&a=list&m=$manager");
        break;
    case 'search' :
        $hardwares = $hardware_obj->list();

        break;
    case 'export' :
        $hardwares = $hardware_obj->list();

        break;
    case 'export2' :
        $hardwares = $hardware_obj->list();

        break;


}