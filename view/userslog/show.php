<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<h2 style="color: #ff981a"> اطلاعات کارمند</h2>
<div class="p-2">
    <div class='row'>
        <div class="col-md-6">
            <div class="row"> نام</div>
            <div class="row"> نام خانوادگی</div>
            <div class="row"> جنسیت</div>
            <div class="row">تلفن همراه</div>
            <div class="row">کد ملی</div>
            <div class="row">کد پرسنلی</div>
            <div class="row">آدرس</div>
            <div class="row"> منطقه محل خدمت</div>
            <div class="row">نوع قرارداد</div>
            <div class="row">توضیحات</div>
            <div class="row">تاریخ ایجاد</div>
            <div class="row">تاریخ استخدام</div>
            <div class="row">عنوان سمت</div>
            <div class="row">تاریخ تولد</div>
            <div class="row">وضعیت همکاری</div>
            <div class="row"> کد مدیرایجادکننده</div>
            <div class="row"> تصویر</div>
        </div>
        <div class="col-md-6">

            <div class="row"> <?php if ($contact['firstname']){echo $contact['firstname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['lastname']){echo $contact['lastname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['gender']){echo $contact['gender'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['mobile']){echo $contact['mobile'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['codemeli']){ echo $contact['codemeli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['codepersoneli']){echo $contact['codepersoneli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['address']){echo $contact['address'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['zone']){echo $contact['zone'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['contract']){echo $contact['contract'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['description']){echo $contact['description'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['created_at']){echo $contact['created_at'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['contract_date']){echo $contact['contract_date'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['post']){echo $contact['post'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['birthday']){echo $contact['birthday'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['contStatus']){echo $contact['contStatus'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($contact['creator']){echo $contact['creator'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row w-100">
                <img src="<?php echo $contact['pic'] ?>" alt="" width="60">
            </div>
        </div>
    </div>
    <a href="?c=contacts&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
</div>
