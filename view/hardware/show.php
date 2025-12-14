<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}

?>
<h2 style="color: #ff981a">نمایش سخت افزار</h2>
<div class="p-2" style="border-color: #1d2124;border-radius: 7px;border-style: groove">
    <div class='row' style="margin-right: 5px">
        <div class="col-md-6" >
            <div class="row"> نام</div>
            <div class="row"> نام خانوادگی</div>
            <div class="row"> تلفن همراه </div>
            <div class="row">کد پرسنلی</div>
            <div class="row"> کد ملی</div>
            <div class="row">طبقه</div>
            <div class="row">نود شبکه</div>
            <div class="row">اتاق</div>
            <div class="row">نام کاربری</div>
            <div class="row"> رمز عبور </div>
            <div class="row"> آی پی</div>
            <div class="row"> نام کامپیوتر</div>
            <div class="row">نسخه مرورگر کروم</div>
            <div class="row"> مشخصات مادربورد</div>
            <div class="row"> مشخصات پردازشگر</div>
            <div class="row">حافظه کوتاه مدت</div>
            <div class="row"> حافظه دائم </div>
            <div class="row"> نسخه سیستم عامل</div>
            <div class="row"> مدل نمایشگر</div>
            <div class="row"> وضعیت</div>
            <div class="row"> شماره اموال کیس</div>
            <div class="row"> شماره اموال نمایشگر</div>
            <div class="row"> کد مدیرایجاد کننده</div>
            <div class="row">توضیحات</div>

        </div>
        <div class="col-md-6">
            <div class="row"> <?php if ($hardware['firstname']){echo$hardware['firstname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['lastname']){echo $hardware['lastname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['mobile']){echo $hardware['mobile'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['codepersoneli']){echo $hardware['codepersoneli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['codemeli']){echo $hardware['codemeli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['floor']){echo $hardware['floor'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['node']){echo $hardware['node'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['room']){echo $hardware['room'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['username']){echo $hardware['username'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['password']){echo $hardware['password'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['ip']){echo $hardware['ip'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['computer_name']){echo $hardware['computer_name'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['chrome_ver']){echo $hardware['chrome_ver'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['motherbord_detail']){echo $hardware['motherbord_detail'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['cpu_detail']){echo $hardware['cpu_detail'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['ram_detail']){echo $hardware['ram_detail'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['hdd_detail']){echo $hardware['hdd_detail'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['os_detail']){echo $hardware['os_detail'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['monitor_name']){echo $hardware['monitor_name'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['status']){echo $hardware['status'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['case_amval']){echo $hardware['case_amval'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['monitor_amval']){echo $hardware['monitor_amval'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['creator']){echo $hardware['creator'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($hardware['description']){echo $hardware['description'];}else{echo "اطلاعات وارد نشده";} ?></div>

        </div>
        <div style="color: red">
            <div class="row" >بررسی اتصال کامپیوتر به شبکه :</div>
            <div class="row" > <?php $ping=$hardware['ip'];echo system("ping $ping");//exec("ping  $ping",$return); ?></div>

        </div>
    </div>
    <a href="?c=hardware&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
</div>

