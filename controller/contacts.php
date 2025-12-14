<?php
require_once "method/users.php";
require_once "method/contacts.php";
require_once "method/uploader.php";
$users_obj = new users();
$contacts_obj = new contacts();
$upload = new uploader();
$manager = $_GET['m'];
switch ($action){
        case 'create':
            $pic='images/user.jpg';
           if($_FILES['pic']['size']>0){
               $pic = $upload->uploader($_FILES['pic']);
           }

            $contacts_obj->create($userID,$_POST,$pic);
           header("location:?c=contacts&a=list&m=$manager");
        break;
        case 'show':
          $contact=$contacts_obj->show($_GET['id']);
        break;
        case 'list' :
         $contacts = $contacts_obj->list();

        break;
        case 'edit':
            $contact=$contacts_obj->show($_GET['id']);
        break;
        case 'update':
            $picarray=$contacts_obj->showpic($_GET['id']);
            $pic=$picarray[0];
            if($_FILES['pic']['size']>0){
            $pic = $upload->uploader($_FILES['pic']);
                }
            $contacts_obj->update($_POST,$pic);
            header("location:?c=contacts&a=list&m=$manager");
        break;
        case 'delete':
            $id= $_GET['id'];
            $contacts_obj->delete($id);
            header("location:?c=contacts&a=list&m=$manager");
        break;

}