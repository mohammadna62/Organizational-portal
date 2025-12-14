<?php
require_once "method/users.php";
require_once "method/userslog.php";
require_once "method/bonyadPanel.php";
$users_obj = new users();
$bonyadPanel_obj = new bonyadPanel();
$userslog_obj = new userslog();

switch ($action) {
    case 'login':
        $email = $_POST['email'];
        $ip = $_POST['ip'];
        $datetime = $_POST['datetime'];
        $password = strtoupper(sha1($_POST['password']));
        $user = $users_obj->login($email);
        if ($user['password'] == $password) {
            $manager = $user['firstname'] . ' ' . $user['lastname'];
            $id = $user['id'];
            setcookie('email', $email, time() + (3600));
            $userslog_obj->create($email,$manager,$ip,$datetime);
            header("location:?c=users&a=dashboard&m=$manager");

        } else {
            header('location:login.php');
        }

        break;
    case 'dashboard' :
        $devices = $bonyadPanel_obj->last_devices();
        break;
    case 'exit' :
        setcookie('email', '', time() - 3600);
        header('location:login.php');
        break;

}