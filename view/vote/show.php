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
            <div class="row"> وضعیت رای صندوق</div>
            <div class="row"> وضعیت رای بازرسی</div>
            <div class="row">تلفن همراه</div>
            <div class="row">کد ملی</div>
            <div class="row">کد پرسنلی</div>
            <div class="row"> منطقه محل خدمت</div>
            <div class="row"> آرای صندوق</div>
            <div class="row">توضیحات</div>
            <div class="row">تاریخ ایجاد</div>
            <div class="row"> کد مدیرایجادکننده</div>
            <div class="row"> اسامی انتخاب شده مجمع عمومی</div>
            <div class="row">مشخصات رایانه رای مجمع عمومی</div>
            <div class="row"> زمان اخذ رای صندوق</div>
            <div class="row">رای بازرسی</div>
            <div class="row"> اسم انتخاب شده بازرسی</div>
            <div class="row">مشخصات رایانه رای بازرسی</div>
            <div class="row"> زمان اخذ رای بازرسی</div>
        </div>
        <div class="col-md-6">

            <div class="row"> <?php if ($vote['firstname']){echo $vote['firstname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['lastname']){echo $vote['lastname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['voteStatus']==1){echo "<span style='color: red'>"." در انتخابات مجمع عمومی شرکت کرده است"."</span>";}else{echo "<span style='color: blue'>"." شرکت نکرده است"."</span>";} ?></div>
            <div class="row"> <?php if ($vote['inspectionvotestatus']==1){echo "<span style='color: red'>"." در انتخابات بازرسی صندوق شرکت کرده است"."</span>";}else{echo "<span style='color: blue'>"." شرکت نکرده است"."</span>";} ?></div>
            <div class="row"> <?php if ($vote['mobile']){echo $vote['mobile'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['codemeli']){ echo $vote['codemeli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['codepersoneli']){echo $vote['codepersoneli'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['zone']){echo $vote['zone'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['votes']){echo $vote['votes'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['description']){echo $vote['description'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['created_at']){echo $vote['created_at'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['creator']){echo $vote['creator'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['volunteerName']){echo $vote['volunteerName'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['voteip']){echo $vote['voteip'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['votaetime']){echo $vote['votaetime'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['inspectionvote']){echo $vote['inspectionvote'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['inspectionvolname']){echo $vote['inspectionvolname'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['inspectvoteip']){echo $vote['inspectvoteip'];}else{echo "اطلاعات وارد نشده";} ?></div>
            <div class="row"> <?php if ($vote['inspectvotetime']){echo $vote['inspectvotetime'];}else{echo "اطلاعات وارد نشده";} ?></div>

        </div>
    </div>
    <a href="?c=vote&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
</div>
