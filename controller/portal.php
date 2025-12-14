<?php
require_once "method/users.php";
require_once "method/portal.php";
require_once "method/uploader.php";
$users_obj = new users();
$portal_obj = new portal();
$upload = new uploader();
$manager = $_GET['m'];
switch ($action){
//    case 'create':
//        $hardware_obj->create($userID,$_POST);
//        header("location:?c=hardware&a=list&m=$manager");
//        break;
//    case 'show':
//        $hardware=$hardware_obj->show($_GET['id']);
//        break;
//    case 'list' :
//        $hardwares = $hardware_obj->list();
//
//        break;
    case 'setwebsiteStatus':
        $portal_obj->setwebsiteStatus($_POST['websiteStatus']);
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'edit':
        $portal=$portal_obj->show();
        break;
    case 'updatetext':
        $portal_obj->updatetext($_POST);
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'deletetext':
        $portal_obj->deletetext();
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'updatemessage':
        $portal_obj->updatemessage($_POST);
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'updatefile':
        $file='';
        if($_FILES['file']['size']>0) {
            $file = $upload->fileuploader($_FILES['file']);
        }
        $portal_obj->updatefile($_POST,$file);
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'updatespfile':
        $file='';
        if($_FILES['spfile']['size']>0) {
            $file = $upload->spfileuploader($_FILES['spfile']);
        }
        $portal_obj->updatespfile($_POST,$file);
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'deletespfile':
        $portal_obj->deletespfile();
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'deletefile':
        $portal_obj->deletefile();
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'updatepic':
        $temp= $portal_obj->show();
        $pic=$temp[3];
        if($_FILES['pic']['size']>0) {
            $pic = $upload->uploader($_FILES['pic']);
        }
        $portal_obj->updatepic($_POST,$pic);
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'deletepic':
        $portal_obj->deletepic();
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'updatevideo':
        $temp= $portal_obj->show();
        $video=$temp[5];
        if($_FILES['video']['size']>0) {
            $video = $upload->videouploader($_FILES['video']);
        }
        $portal_obj->updatevideo($_POST,$video);
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'deletevideo':
        $portal_obj->deletevideo();
        header("location:?c=portal&a=edit&m=$manager");
        break;

    case 'deleteMessage':
        $portal_obj->deleteMessage();
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'set':
        $data=$portal_obj->secondclient();
        $secondclient=$data[0];
        header("location:?c=bonyadPanel&a=list&tclient=$secondclient&m=$manager");
        break;
    case 'voteSet':
        $portal_obj->voteSet($_POST['voteStatus']);

        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'voteStatus':
       $voteStatus= $portal_obj->voteStatus();

        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'updatetabpic':
        $temp= $portal_obj->show();
        $pic=$temp[3];
        if($_FILES['tabpic']['size']>0) {
            $pic = $upload->uploadertabpic($_FILES['tabpic']);
        }
        $portal_obj->updatetabpic($pic);
        header("location:?c=portal&a=edit&m=$manager");
        break;
    case 'deletetabpic':
        $portal_obj->deletetabpic();
        header("location:?c=portal&a=edit&m=$manager");
        break;


}