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

            <div class="row"> <?php if ($general['fullname']){echo $general['fullname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($general['title']){echo $general['title'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($general['datetime']){echo $general['datetime'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($general['zone']){ echo $general['zone'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($general['codepersoneli']){echo $general['codepersoneli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($general['codemeli']){echo $general['codemeli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($general['mobile']){echo $general['mobile'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($general['ip']){echo $general['ip'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($general['devicename']){echo $general['devicename'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($general['text']){echo $general['text'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row w-100">
                <a href="<?php echo "vote/".$general['pic']; ?>" target="_blank">
                <img src="<?php echo "vote/".$general['pic']; ?>" alt="" width="60">
                </a>
            </div>
        </div>
    </div>
    <a href="?c=general&a=reply&id=<?php echo $general['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-warning">پاسخ</a>
    <a href="?c=general&a=delete&id=<?php echo $general['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-danger">حذف پیام</a><br><br>
    <a href="?c=general&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
</div>
