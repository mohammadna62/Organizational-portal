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

            <div class="row"> <?php if ($inspectionvol['firstname']){echo $inspectionvol['firstname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($inspectionvol['lastname']){echo $inspectionvol['lastname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($inspectionvol['gender']){echo $inspectionvol['gender'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($inspectionvol['mobile']){echo $inspectionvol['mobile'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($inspectionvol['codepersoneli']){ echo $inspectionvol['codepersoneli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($inspectionvol['codemeli']){echo $inspectionvol['codemeli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($inspectionvol['created_at']){echo $inspectionvol['created_at'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($inspectionvol['post']){echo $inspectionvol['post'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($inspectionvol['slogan']){echo $inspectionvol['slogan'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($inspectionvol['description']){echo $inspectionvol['description'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($inspectionvol['voteCount']){echo $inspectionvol['voteCount'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($inspectionvol['creator']){echo $inspectionvol['creator'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row w-100">
                <img src="<?php echo $inspectionvol['pic'] ?>" alt="" width="60">
            </div>
        </div>
    </div>
    <a href="?c=inspectionelection&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
</div>
