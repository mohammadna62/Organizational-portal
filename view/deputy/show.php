<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<h2 style="color: #ff981a"> جزئیات پیام ارسالی :</h2>
<div class="p-2">
    <div class='row'>
        <div class="col-md-6">
            <div class="row"> نام و نام خانوادگی</div>
            <div class="row"> موضوع</div>
            <div class="row">تاریخ ارسال</div>
            <div class="row">منطقه</div>
            <div class="row">کد پرسنلی</div>
            <div class="row"> کد ملی</div>
            <div class="row"> تلفن همراه</div>
            <div class="row">ip</div>
            <div class="row">نام رایانه</div>
            <div class="row">متن پیام</div>
            <div class="row">تصویر</div>
        </div>
        <div class="col-md-6">

            <div class="row"> <?php if ($deputy['fullname']){echo $deputy['fullname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($deputy['title']){echo $deputy['title'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($deputy['datetime']){echo $deputy['datetime'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($deputy['zone']){ echo $deputy['zone'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($deputy['codepersoneli']){echo $deputy['codepersoneli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($deputy['codemeli']){echo $deputy['codemeli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($deputy['mobile']){echo $deputy['mobile'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($deputy['ip']){echo $deputy['ip'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($deputy['devicename']){echo $deputy['devicename'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($deputy['text']){echo $deputy['text'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row w-100">
                <a href="<?php echo "vote/".$deputy['pic']; ?>" target="_blank">
                <img src="<?php echo "vote/".$deputy['pic']; ?>" alt="" width="60">
                </a>
            </div>
        </div>
    </div>
    <a href="?c=deputy&a=reply&id=<?php echo $deputy['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-warning">پاسخ</a>
    <a href="?c=deputy&a=delete&id=<?php echo $deputy['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-danger">حذف پیام</a><br><br>
    <a href="?c=deputy&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
</div>
