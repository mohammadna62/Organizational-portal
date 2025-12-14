<?php
require_once "method/users.php";
require_once "method/personeli.php";
$users_obj = new users();
$personeli_obj = new personeli();
switch ($action){
    case 'create':
        $personeli_obj->create($userID,$_POST);
        header("location:?c=personeli&a=list&m=$manager");
        break;
    case 'show':
        $personeli=$personeli_obj->show($_GET['id']);
        break;
    case 'list' :
        $personelis = $personeli_obj->list();

        break;
    case 'edit':
        $personeli=$personeli_obj->show($_GET['id']);
        break;
    case 'update':

        $personeli_obj->update($_POST);
        header("location:?c=personeli&a=list&m=$manager");
        break;
    case 'delete':
        $id= $_GET['id'];
        $personeli_obj->delete($id);
        header("location:?c=personeli&a=list&m=$manager");
        break;

}