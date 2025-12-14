<?php
include_once 'includes/config.php';
include_once 'method/survey.php';
require_once "method/uploader.php";
$survey_obj= new survey();
$upload = new uploader();
$manager = $_GET['m'];
switch ($action){

//    case 'show':
//        $hardware=$hardware_obj->show($_GET['id']);
//        break;
    case 'list' :
        $surveys = $survey_obj->list();

        break;
    case 'delete':
        $id= $_GET['id'];
        $survey_obj->delete($id);
        header("location:?c=survey&a=list&m=$manager");
        break;
    case 'show':
        $survey=$survey_obj->show($_GET['id']);
        break;
//    case 'edit':
//        $portal=$portal_obj->show();
//        break;
//    case 'updatetext':
//        $portal_obj->updatetext($_POST);
//        header("location:?c=portal&a=edit&m=$manager");
//        break;
//    case 'deletetext':
//        $portal_obj->deletetext();
//        header("location:?c=portal&a=edit&m=$manager");
//        break;
//    case 'updatemessage':
//        $portal_obj->updatemessage($_POST);
//        header("location:?c=portal&a=edit&m=$manager");
//        break;
//    case 'updatefile':
//        $file='';
//        if($_FILES['file']['size']>0) {
//            $file = $upload->fileuploader($_FILES['file']);
//        }
//        $portal_obj->updatefile($_POST,$file);
//        header("location:?c=portal&a=edit&m=$manager");
//        break;
//    case 'deletefile':
//        $portal_obj->deletefile();
//        header("location:?c=portal&a=edit&m=$manager");
//        break;
//    case 'updatepic':
//
//        $pic='';
//        if($_FILES['pic']['size']>0) {
//            $pic = $upload->uploader($_FILES['pic']);
//        }
//        $portal_obj->updatepic($_POST,$pic);
//        header("location:?c=portal&a=edit&m=$manager");
//        break;
//    case 'deletepic':
//        $portal_obj->deletepic();
//        header("location:?c=portal&a=edit&m=$manager");
//        break;
//    case 'updatevideo':
//        $video='';
//        if($_FILES['video']['size']>0) {
//            $video = $upload->videouploader($_FILES['video']);
//        }
//        $portal_obj->updatevideo($_POST,$video);
//        header("location:?c=portal&a=edit&m=$manager");
//        break;
//    case 'deletevideo':
//        $portal_obj->deletevideo();
//        header("location:?c=portal&a=edit&m=$manager");
//        break;
//
//    case 'deleteMessage':
//        $portal_obj->deleteMessage();
//        header("location:?c=portal&a=edit&m=$manager");
//        break;
//    case 'set':
//        $data=$portal_obj->secondclient();
//        $secondclient=$data[0];
//        header("location:?c=bonyadPanel&a=list&tclient=$secondclient&m=$manager");
//        break;

}