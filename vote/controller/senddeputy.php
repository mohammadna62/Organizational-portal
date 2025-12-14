<?php
//include_once '../includes/config.php';
require_once "method/uploader.php";
require_once "method/vote.php";
require_once "method/senddeputy.php";
require_once "method/volunteer.php";
$vote_obj=new vote();
$upload = new uploader();
$send_obj = new senddeputy();

switch ($action){
    case 'send' :
        $pic='images/noimage.jpg';
        if($_FILES['pic']['size']>0){
            $pic = $upload->uploadsdeputy($_FILES['pic']);
        }
        $send_obj->send($_POST,$pic);
        header("location:?c=vote&a=dashboard&m=$user");
        break;
    case 'deputyreply':
        $data=$vote_obj->user($_COOKIE['username']);
        $deputyreplies = $send_obj->deputyreplylist($data);
        break;
    case 'showreply' :
        $showreply=$send_obj->showreply($_GET['id']);
        break;

}