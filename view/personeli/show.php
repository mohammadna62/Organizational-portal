<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<h2 style="color: #ff981a"> اطلاعات اعضا</h2>
<div class="p-2">
    <div class='row'>
        <div class="col-md-6">
            <div class="row"> نام</div>
            <div class="row"> نام خانوادگی</div>
            <div class="row"> وضعیت رای</div>
            <div class="row">تلفن همراه</div>
            <div class="row">کد ملی</div>
            <div class="row">کد پرسنلی</div>
            <div class="row"> منطقه محل خدمت</div>
            <div class="row">توضیحات</div>
            <div class="row">تاریخ ایجاد</div>
            <div class="row"> کد مدیرایجادکننده</div>

        </div>
        <div class="col-md-6">

            <div class="row"> <?php if ($personeli['firstname']){echo $personeli['firstname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($personeli['lastname']){echo $personeli['lastname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($personeli['voteStatus']){echo $personeli['voteStatus'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($personeli['mobile']){echo $personeli['mobile'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($personeli['codemeli']){ echo $personeli['codemeli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($personeli['codepersoneli']){echo $personeli['codepersoneli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($personeli['zone']){echo $personeli['zone'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($personeli['description']){echo $personeli['description'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($personeli['created_at']){echo $personeli['created_at'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($personeli['creator']){echo $personeli['creator'];}else{echo "اطلاعات وارد نشده";} ?></div>


        </div>
    </div>
    <a href="?c=personeli&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
</div>
