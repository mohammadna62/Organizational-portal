<?php
require_once "method/vote.php";
require_once "method/inspectionvol.php";
$vote_obj = new vote();
$inspectionvotestatus= new vote();
$volunteer_obj=new inspectionvol();
switch ($action){
    case 'votes':
        $codemeli= $_COOKIE['username'];
        $inspectvoteip= $_POST['inspectvoteip'];
        $inspectvotetime= $_POST['inspectvotetime'];
        if (isset($_POST['selected'])) {
            $checkBox = $_POST['selected'];
            $statusinspect=$inspectionvotestatus->inspectionvotestatus($codemeli);
            if($statusinspect[0]== 0 ) {
                if (sizeof($checkBox) < 2) {
                    for ($i = 0; $i < sizeof($checkBox); $i++) {
                        $volunteerName = $volunteer_obj->voteCount($checkBox[$i]);
                        $fullname = $volunteerName['firstname'] . ' ' . $volunteerName['lastname'];
                        $volName .= $fullname;
                        $data .= $checkBox[$i];
                        if ($i < sizeof($checkBox) - 1) {
                            $data .= ", ";
                            $volName .= ", ";
                        }
                    }
                }
                $vote_obj->inspectvotes($data, $volName,$codemeli,$inspectvoteip,$inspectvotetime);
            }
            header("location:?c=vote&a=dashboard");
        }else{
            header("location:?c=vote&a=listvol");
        }

        break;
//    case 'login':
//        $username = $_POST['codemeli'];
//        $password = $_POST['codepersoneli'];
//        $vote = $vote_obj->login($username);
//        if ($vote['codepersoneli']==$password){
//            $user= $vote['firstname'].' '.$vote['lastname'];
//            $id=$vote['id'];
//            setcookie('username',$username, time()+(3600));
//            header("location:?c=vote&a=dashboard&m=$user");
//
//        }else{
//            header('location:../vote/loginvote.php');
//        }
//
//        break;
//    case 'dashboard' :
//
//        break;
    case 'listvol' :
        $volunteers = $volunteer_obj->list();

        break;
    case 'exit' :
        setcookie('username','',time()-3600);
        header('location:loginvote.php');
        break;

}