<?php
require_once "method/users.php";
require_once "method/inventory.php";
$users_obj = new users();
$inventory_obj = new inventory();
$manager = $_GET['m'];
switch ($action){
    case 'create':

        $inventory_obj->create($userID,$_POST);

        header("location:?c=inventory&a=list&m=$manager");
        break;
    case 'show':
        $inventory=$inventory_obj->show($_GET['id']);
        break;
    case 'list' :
        $inventories= $inventory_obj->list();

        break;
    case 'edit':
        $inventory=$inventory_obj->show($_GET['id']);
        break;
    case 'update':

         $inventory_obj->update($_POST);
        header("location:?c=inventory&a=list&m=$manager");
        break;
    case 'delete':
        $id= $_GET['id'];
        $inventory_obj->delete($id);
        header("location:?c=inventory&a=list&m=$manager");
        break;

}
