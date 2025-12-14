<?php
if (isset($_COOKIE['email'])){
    header('location:index.php?c=users&a=dashboard');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت نام | بنیاد شهید و امور ایثارگران</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container bg-white w-50 text-center shadow mt-5 p-2 border-" dir="rtl" align="right">
    <h3>ثبت نام </h3>
    <p align="right" style="color: red">
        ثبت نام پنل مدیریت :
    </p>
    <form action="index.php?c=&a=signup" method="POST"  class="w-100" >
        <div class="form-group" align="right">
            <label for="firstname">نام :</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="form-group" align="right">
            <label for="lasttname">نام خانوادگی :</label>
            <input type="text" class="form-control" name="lastname" >
        </div>
        <div class="form-group" align="right">
            <label for="exampleFormControlInput1">موقعیت شغلی :</label>
            <input type="text" class="form-control"name="post" id="exampleFormControlInput1" placeholder="edari">
        </div>
        <div class="form-group" align="right">
            <label for="exampleFormControlInput1">آدرس ایمیل :</label>
            <input type="email" class="form-control"name="email" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group" align="right">
            <label for="exampleFormControlInput1">شماره موبایل :</label>
            <input type="text" class="form-control"name="mobile" id="exampleFormControlInput1" placeholder="09xxxxxxxxx">
        </div>
        <div class="form-group" align="right">
            <label for="exampleFormControlInput1">آدرس :</label>
            <input type="text" class="form-control"name="address" id="exampleFormControlInput1" placeholder="ایران ، تهران ...">
        </div>
        <div class="form-group" align="right">
            <label for="exampleFormControlInput1">رمز عبور :</label>
            <input type="password" class="form-control"name="password" id="exampleFormControlInput1" placeholder="*********">
        </div>

        <input type="submit" value="ثبت نام !" class="btn btn-primary">

    </form>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>