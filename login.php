<?php
if (isset($_COOKIE['email'])){
    header('location:index.php?c=users&a=dashboard');
}
?>
<?php
include_once 'ajax.php';
require_once("lib/jdf.php");
$date1 = date('H:i');
$jalali1 = gregorian_to_jalali(date('Y'), date('m'), date('d'), '/');
$datetime1 = $jalali1 . "    " . $date1;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود | بنیاد شهید و امور ایثارگران</title>
    <link rel="icon" href="images/bonyadlogo/favicon.ico"/>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />
    <script src="assets/js/jquery-3.7.1.js"></script>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
</head>
<body class="login-body" >

<div class="container" dir="rtl" align="right" style="width: 500px">
    <div class="login-wrap" >
        <img src="images/bonyad.png" onload="fadeIn(this)" style="width:200px; float: right;display: none" ><br>
    </div><br>
    <div class="login-wrap">
    <form class="form-signin" action="index.php?c=users&a=login" method="post" >
        <h2 class="form-signin-heading" style="font-family: 'Adobe Arabic' ; font-size: 25px"> خدمات الکترونیک  بنیاد شهید و امور ایثارگران  </h2><span>    </span>
        <br> <div class="login-wrap" >
            <label for=""  style="font-family: 'Adobe Arabic'; font-size: large">نام کاربری :</label>
            <input class="form-control" type="text" name="email" placeholder="ایمیل خود را وارد کنید...." required  autofocus>
            <br>
            <label for="" style="font-family: 'Adobe Arabic'; font-size: large">رمز عبور :</label>
            <input class="form-control" type="password" name="password" placeholder="رمز عبور خود را وارد کنید" required>
            <input class="form-control" type="text" name="devicename" style="width: 1px;display: inline;visibility: hidden" value="<?php $devicename=gethostbyaddr($_SERVER['REMOTE_ADDR']); echo $devicename; ?>">
            <input class="form-control" type="text" name="ip" style="width: 1px;display: inline;visibility: hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
            <input class="form-control" type="text" name="datetime" style="width: 1px;display: inline;visibility: hidden" value="<?php echo $datetime1; ?>">
            <br>
            <input type="submit" value="ورود" name="submit" class="btn btn-lg btn-login btn-block" style="font-family: 'Adobe Arabic' ; font-size: large">
        </div>
    </form>
    </div>
</div>
<script>
    // this function must be defined in the global scope
    window.fadeIn = function(obj) {
        $(obj).fadeIn(5000);
    }
</script>
</body>
</html>
