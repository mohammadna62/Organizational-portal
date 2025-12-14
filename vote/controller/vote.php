<?php
require_once "method/vote.php";
require_once "method/volunteer.php";
$vote_obj = new vote();
$voteStatus= new vote();
$volunteer_obj=new volunteer();
switch ($action){
    case 'votes':
       $codemeli= $_COOKIE['username'];
       $voteip= $_POST['voteip'];
       $votaetime= $_POST['votaetime'];
        if (isset($_POST['selected'])) {
            $checkBox = $_POST['selected'];
            $status=$voteStatus->voteStatus($codemeli);
            if($status[0]== 0 ) {
                if (sizeof($checkBox) < 6) {
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
                $vote_obj->votes($data, $volName,$codemeli,$voteip,$votaetime);
            }
            header("location:?c=inspectionvote&a=listvol");
        }else{
            header("location:?c=vote&a=listvol");
        }

        break;
    case 'login':
        $username = $_POST['codemeli'];
        $password = $_POST['codepersoneli'];
        $vote = $vote_obj->login($username);
        if ($vote['codepersoneli']==$password){
            $user= $vote['firstname'].' '.$vote['lastname'];
            $id=$vote['id'];
            setcookie('username',$username, time()+(3600));
            header("location:?c=vote&a=dashboard&m=$user");

        }else{
            header('location:../vote/loginvote.php');
        }

        break;
    case 'dashboard' :

        break;
    case 'listvol' :
        $volunteers = $volunteer_obj->list();

        break;
    case 'exit' :
        setcookie('username','',time()-3600);
        header('location:loginvote.php');
        break;

}