<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<h2 style="color: #ff981a">نمایش پیام</h2>
<div class="p-2">
    <div class='row'>
        <div class="col-md-6">
            <div class="row"> نام و نام خانوادگی</div>
            <div class="row"> کد ملی</div>
            <div class="row"> کد پرسنلی </div>
            <div class="row"> آی پی</div>
            <div class="row">نام کامپیوتر</div>
            <div class="row">ارسال شده در تاریخ</div>
            <div class="row"> توضیحات</div>

        </div>
        <div class="col-md-6">

            <div class="row"> <?php echo $survey['familyname'] ?></div>
            <div class="row"> <?php echo $survey['codemeli'] ?></div>
            <div class="row"> <?php echo $survey['codepersoneli'] ?></div>
            <div class="row"> <?php echo $survey['ip'] ?></div>
            <div class="row"> <?php echo $survey['devicename'] ?></div>
            <div class="row"> <?php echo $survey['created_at'] ?></div>
            <div class="row"> <?php echo $survey['description'] ?></div>
        </div>
        <div class="col-sm-6">
            <div class="row w-100">
                <a href="<?php echo $survey['pic'] ?>" target="_blank"> <img src="<?php echo $survey['pic'] ?>" alt="" class="w-100"></a>
            </div>
        </div>
    </div>
    <a href="?c=survey&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
</div>
