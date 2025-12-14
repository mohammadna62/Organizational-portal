<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<h2 style="color: #ff981a">مشخصات کامل رایانه</h2>
<div class="p-2">
    <div class='row'>
        <div class="col-md-6">

            <div class="row"> آی پی</div>
            <div class="row">سرور آی پی</div>
            <div class="row"> نام کامپیوتر</div>
            <div class="row">  نسخه مرور گر</div>
            <div class="row"> تاریخ ورود</div>

        </div>
        <div class="col-md-6">

            <div class="row"> <?php echo $device['ip'] ?></div>
            <div class="row"> <?php echo $device['serverip'] ?></div>
            <div class="row"> <?php echo $device['devicename'] ?></div>
            <div class="row"> <?php echo $device['browser'] ?></div>
            <div class="row"> <?php echo $device['datetime'] ?></div>


        </div>
    </div>
    <a href="?c=bonyadPanel&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
</div>
