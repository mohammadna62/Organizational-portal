<?php
require_once "method/users.php";
require_once "method/inspectionelection.php";
require_once "method/uploader.php";
$users_obj = new users();
$election_obj = new inspectionelection();
$upload = new uploader();
$manager = $_GET['m'];
switch ($action){
    case 'create':
        $pic='images/user.jpg';
        if($_FILES['pic']['size']>0){
            $pic = $upload->uploaderelection($_FILES['pic']);
        }

        $election_obj->create($userID,$_POST,$pic);
        header("location:?c=inspectionelection&a=list&m=$manager");
        break;
    case 'show':
        $inspectionvol=$election_obj->show($_GET['id']);
        break;
    case 'list' :
        $inspectionvols = $election_obj->list();

        break;
    case 'edit':
        $inspectionvol=$election_obj->show($_GET['id']);
        break;
    case 'update':
        $picarray=$election_obj->showpic($_GET['id']);
        $pic=$picarray[0];
        if($_FILES['pic']['size']>0){
            $pic = $upload->uploader($_FILES['pic']);
        }
        $election_obj->update($_POST,$pic);
        header("location:?c=inspectionelection&a=list&m=$manager");
        break;
    case 'delete':
        $id= $_GET['id'];
        $election_obj->delete($id);
        header("location:?c=inspectionelection&a=list&m=$manager");
        break;
    case 'default':
        $election_obj->default();
        header("location:?c=inspectionelection&a=list&m=$manager");
        break;
}