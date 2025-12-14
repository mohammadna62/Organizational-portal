<?php
require_once 'includes/config.php';
require_once 'method/users.php';
require_once("lib/jdf.php");
date_default_timezone_set("Asia/Tehran");
if (!isset($_COOKIE['email'])) {
    header('location:login.php');
}
$user_obj = new users();
if (isset($_GET['m'])) {
    $manager = $_GET['m'];
} else {
    $email = $_COOKIE['email'];
    $user = $user_obj->login($email);
    $manager = $user['firstname'] . ' ' . $user['lastname'];
}


if (isset($_COOKIE['email'])) {
    $user = $user_obj->login($_COOKIE['email']);
    $userID = $user['id'];
}
$controller = (!empty($_GET['c']) ? $_GET['c'] : 'index');
$action = (!empty($_GET['a']) ? $_GET['a'] : 'index');
require_once "controller/$controller.php";
$path = "D:\\Downloads";//\\10.2.1.33\share\kakonan    echo exec("EXPLORER /E,$path");
//echo '<pre>', var_dump($categories),'</pre>';برای نمایش خوانا تر ور دامپ از این تگ استفاده می شود
?>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>بنیاد شهید و امور ایثارگران | پیشخوان </title>
    <link rel="stylesheet" href="assets/calendar/kamadatepicker.min.css">
    <link rel="icon" href="images/bonyadlogo/favicon.ico"/>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet"/>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>


    <style>
        #exampleFormControlInput1 {
            background-color: #F7F7F7;
            border-radius: 5px;
        }

        #tablework:hover {
            background-color: #0fa34c;
            color: #0a0a0a;
        }

        a:hover {
            color: #0a0a0a;
        }


    </style>
    <script>
        npm
        install
        froala - editor
    </script>
</head>
<body style="font-family: 'Adobe Arabic'; font-size: larger;">
<header style="background-image:linear-gradient(to right,#c3ede5,#ede9c1);height:80px; margin: 3px;border-radius: 5px; ">
    <div alt='centered image'
         style=" background-image: url('images/pic/flag7.png');background-size:40% 100%;background-repeat: no-repeat;height:70px;justify-content: center;">
        <h4 dir="rtl" align="right" style="width:fit-content;margin: 8px;color: red;"><span style="color: black">نام کاربر :</span> <?php echo $manager ?>
        </h4>
    </div>
</header>
<div class="container-fluid" align="right" style="float: right; display: inline-block; text-align: right">
    <div class="row">
        <aside class="col-sm-2 bg-white shadow p-2"
               style="border-style: groove;border-color: #1d2124;border-radius: 5px;">
            <h4> فهرست :</h4>
            <ul>
                <li><a href="?c=users&a=dashboard&m=<?php echo $manager; ?>">پیشخوان</a></li>
                <?php if ($user['admin'] == "admin" || $user['hr'] == "hr") {
                    echo "";
                } else {
                    echo "<!--";
                } ?>
                <li><a href="?c=contacts&a=list&m=<?php echo $manager; ?>">لیست کارمندان </a></li>
                <?php if ($user['admin'] == "admin" || $user['hr'] == "hr") {
                    echo "";
                } else {
                    echo "-->";
                } ?>
                <?php if ($user['admin'] == "admin" && $_SERVER['REMOTE_ADDR'] == $privateip) {
                    echo "";
                } else {
                    echo "<!--";
                } ?>
                <li><a href="?c=managment&a=list&m=<?php echo $manager; ?>">مدیریت حساب های کاربری</a></li>
                <?php if ($user['admin'] == "admin" && $_SERVER['REMOTE_ADDR'] == $privateip) {
                    echo "";
                } else {
                    echo "-->";
                } ?>
                <?php if (($user['admin'] == "admin" && $_SERVER['REMOTE_ADDR'] == $privateip)||( $user['general'] == "general" && $_SERVER['REMOTE_ADDR'] == $privateip )) {
                    echo "";
                } else {
                    echo "<!--";
                } ?>
                <li><a href="?c=general&a=list&m=<?php echo $manager; ?>">کارتابل مدیرکل</a></li>
                <?php if (($user['admin'] == "admin" && $_SERVER['REMOTE_ADDR'] == $privateip)||( $user['general'] == "general" && $_SERVER['REMOTE_ADDR'] == $privateip)) {
                    echo "";
                } else {
                    echo "-->";
                } ?>
                <?php if (($user['admin'] == "admin" && $_SERVER['REMOTE_ADDR'] == $privateip)||( $user['deputy'] == "deputy" && $_SERVER['REMOTE_ADDR'] == $privateip)) {
                    echo "";
                } else {
                    echo "<!--";
                } ?>
                <li><a href="?c=deputy&a=list&m=<?php echo $manager; ?>">کارتابل معاون توسعه</a></li>
                <?php if (($user['admin'] == "admin" && $_SERVER['REMOTE_ADDR'] == $privateip)||( $user['deputy'] == "deputy" && $_SERVER['REMOTE_ADDR'] == $privateip)) {
                    echo "";
                } else {
                    echo "-->";
                } ?>
                <?php if ($user['admin'] == "admin" || $user['hr'] == "hr") {
                    echo "";
                } else {
                    echo "<!--";
                } ?>
                <li><a href="?c=portal&a=edit&m=<?php echo $manager; ?>">مدیریت پرتال بنیاد شهید</a></li>
                <?php if ($user['admin'] == "admin" || $user['hr'] == "hr") {
                    echo "";
                } else {
                    echo "-->";
                } ?>
                <?php if ($user['admin'] == "admin" || $user['it'] == "it") {
                    echo "";
                } else {
                    echo "<!--";
                } ?>
                <li><a href="?c=bonyadPanel&a=list&m=<?php echo $manager; ?>">رایانه های متصل به شبکه</a></li>
                <li><a href="?c=hardware&a=list&m=<?php echo $manager; ?>">لیست سخت افزار</a></li>
                <?php if ($user['admin'] == "admin" || $user['it'] == "it") {
                    echo "";
                } else {
                    echo "-->";
                } ?>
                <?php if ($user['admin'] == "admin" || $user['hr'] == "hr") {
                    echo "";
                } else {
                    echo "<!--";
                } ?>
                <li><a href="?c=personeli&a=list&m=<?php echo $manager; ?>">مدیریت پرتال اداری</a></li>
                <?php if ($user['admin'] == "admin" || $user['hr'] == "hr") {
                    echo "";
                } else {
                    echo "-->";
                } ?>
                <?php if ($user['admin'] == "admin" || $user['hr'] == "hr") {
                    echo "";
                } else {
                    echo "<!--";
                } ?>
                <li><a href="?c=election&a=list&m=<?php echo $manager; ?>">مدیریت پرتال انتخابات</a></li>
                <?php if ($user['admin'] == "admin" || $user['hr'] == "hr") {
                    echo "";
                } else {
                    echo "-->";
                } ?>
                <?php if ($user['admin'] == "admin" || $user['support'] == "support") {
                    echo "";
                } else {
                    echo "<!--";
                } ?>
                <li><a href="?c=inventory&a=list&m=<?php echo $manager; ?>">لیست کالای موجود </a></li>
                <?php if ($user['admin'] == "admin" || $user['support'] == "support") {
                    echo "";
                } else {
                    echo "-->";
                } ?>
                <li>--------------------------------</li>
                <li><a class="btn btn-primary" href="?c=users&a=exit">خروج</a></li>

            </ul>
            <img src="images/bonyad.png" width="200">
        </aside>
        <div class="col-sm-9 bg-white" style="width: 500px">
            <?php
            require_once "view/$controller/$action.php";
            ?>
        </div>
    </div>
    <footer style=" height:100px; margin-top: 3px;border-radius: 5px">
        <fieldset id="tablework" style="display: block;
                        padding-block-start: 0.35em;
                        padding-inline-start: 0.75em;
                        padding-inline-end: 0.75em;
                        padding-block-end: 0.625em;
                        border-width: 2px;
                        background-color:#12b2ed;
                        border-radius: 5px;
                         ">
            <legend style="font-family: 'Adobe Arabic';color: red"> میز کار : در حال بروز رسانی ...</legend>
            <a id="tablework" href="https://pargar.isaar.ir/fonix/Mailbox/#/incomemessage" target="_blank"
               class="btn btn-primary" style="background-color: #1e7e34; font-family: 'Adobe Arabic';">اتوماسیون اداری
                (پرگار)</a>
            <a id="tablework" href="http://10.2.1.200/" class="btn btn-primary" target="_blank"
               style="background-color: #1e7e34; font-family: 'Adobe Arabic'">خدمات الکترونیک</a>
            <a id="tablework" href="https://login.isaar.ir/login" class="btn btn-primary" target="_blank"
               style="background-color: #1e7e34; font-family: 'Adobe Arabic'">ایثار من</a>
            <a id="tablework" href="saerp://open" target="_blank" title="" class="btn btn-primary"
               style="background-color: #1e7e34; font-family: 'Adobe Arabic'">سیستم سجایا</a>
            <a id="tablework" href="https://azmoon.isaar.ir/" class="btn btn-primary" target="_blank"
               style="background-color: #1e7e34; font-family: 'Adobe Arabic'">سامانه آموزش فراگیر</a>
        </fieldset>
    </footer>

</div>


<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/calendar/jquery.js"></script>
<script src="assets/calendar/kamadatepicker.min.js"></script>

<script>
    let option = {
        placeholder: "تاریخ",
        twodigit: true,// اگر فالس باشد اعداد تک رقمی نمایش داده می شود
        closeAfterSelect: true, //اگر فالس باشد بعد از انتخاب تاریخ صفحه بسته نمی شود
        // nextButtonIcon : import("assets/calendar/timeir_next.png") ,
        // previousButtonIcon : import("assets/calendar/timeir_prev.png") ,
        buttonsColor: "red",
        forceFarsiDigits: true,
        markToday: true,
        markHolidays: true,
        highlightSelectedDay: true,
        gotoToday: true,

    }
    kamaDatepicker('datetime', option);
</script>
<script>
    let option2 = {
        placeholder: 'تاریخ ',
        twodigit: false,// اگر فالس باشد اعداد تک رقمی نمایش داده می شود
        closeAfterSelect: true, //اگر فالس باشد بعد از انتخاب تاریخ صفحه بسته نمی شود
        // nextButtonIcon : import("assets/calendar/timeir_next.png") ,
        // previousButtonIcon : import("assets/calendar/timeir_prev.png") ,
        buttonsColor: "red",
        forceFarsiDigits: true,
        markToday: true,
        markHolidays: true,
        highlightSelectedDay: true,
        gotoToday: true,

    }
    kamaDatepicker('datetime2', option2);
</script>

<script src="assets/js/jquery-2.1.3.min.js"></script>
<script src="assets/js/persianumber.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('*').persiaNumber();
    });
</script>
<script>

</script>
</body>
</html>
