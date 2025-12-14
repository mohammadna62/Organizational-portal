<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<h2 style="color: #ff981a">نمایش اطلاعات داوطلب</h2>
<div class="p-2">
    <div class='row'>
        <div class="col-md-6">
            <div class="row"> نام</div>
            <div class="row"> نام خانوادگی</div>
            <div class="row"> جنسیت</div>
            <div class="row">تلفن همراه</div>
            <div class="row">کد پرسنلی</div>
            <div class="row">کد ملی</div>
            <div class="row">تاریخ ایجاد</div>
            <div class="row">عنوان سمت</div>
            <div class="row">شعار انتخاباتی</div>
            <div class="row">توضیحات</div>
            <div class="row">تعداد آرا</div>
            <div class="row"> کد مدیرایجادکننده</div>
            <div class="row"> تصویر</div>
        </div>
        <div class="col-md-6">

            <div class="row"> <?php if ($volunteer['firstname']){echo $volunteer['firstname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($volunteer['lastname']){echo $volunteer['lastname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($volunteer['gender']){echo $volunteer['gender'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($volunteer['mobile']){echo $volunteer['mobile'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($volunteer['codepersoneli']){ echo $volunteer['codepersoneli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($volunteer['codemeli']){echo $volunteer['codemeli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($volunteer['created_at']){echo $volunteer['created_at'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($volunteer['post']){echo $volunteer['post'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($volunteer['slogan']){echo $volunteer['slogan'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($volunteer['description']){echo $volunteer['description'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($volunteer['voteCount']){echo $volunteer['voteCount'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($volunteer['creator']){echo $volunteer['creator'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row w-100">
                <img src="<?php echo $volunteer['pic'] ?>" alt="" width="60">
            </div>
        </div>
    </div>
    <a href="?c=election&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
</div>
