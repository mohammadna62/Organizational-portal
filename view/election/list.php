<?php

if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<meta http-equiv="refresh" content="300">
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<h2 style="color: #ff981a"> لیست داوطلبان انتخابات صندوق</h2>
<div class="p-2">
    <table id="myTable" class="table table-striped w-150">
        <thead>
        <tr dir="rtl" align="right">
            <td>شناسه</td>
            <td>تصویر</td>
            <td>نام و نام خانوادگی</td>
            <td>کد پرسنلی</td>
            <td>موبایل</td>
            <td>تعداد آرا</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $id =1 ;
        foreach ($volunteers as $volunteer) :
            ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td>
                <img src="<?php echo $volunteer['pic'];?>" width="60">
            </td>
            <td><?php echo $volunteer['firstname'].' '.$volunteer['lastname']; ?></td>
            <td><?php echo $volunteer['codepersoneli']; ?></td>
            <td><?php echo $volunteer['mobile']; ?></td>
            <td><?php echo $volunteer['voteCount']; ?></td>
            <td>
                 <a href="?c=election&a=show&id=<?php echo $volunteer['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-primary">نمایش</a>
                <?php if (($_SERVER['REMOTE_ADDR'] == $serverip || $_SERVER['REMOTE_ADDR'] == $privateip) && ($user['admin'] == "admin")) {
                    echo "";
                } else {
                    echo "<!--";
                } ?>
                <span style="color: red">|</span>
                 <a href="?c=election&a=edit&id=<?php echo $volunteer['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-warning">ویرایش</a>
                <span style="color: red">|</span>
                 <a href="?c=election&a=delete&id=<?php echo $volunteer['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-danger">حذف</a>
                <?php if (($_SERVER['REMOTE_ADDR'] == $serverip || $_SERVER['REMOTE_ADDR'] == $privateip) && ($user['admin'] == "admin")) {
                    echo "";
                } else {
                    echo "-->";
                } ?>
             </td>
        </tr>
        <?php $id++ ;
        endforeach; ?>
        </tbody>
    </table>
    <a href="view/election/export.php?m=<?php echo $manager; ?>" class="" ><img src="images/pic/excel.jpg" style="width:80px;hight:80px;margin-bottom: 5px;"></a><br>
    <?php if (($_SERVER['REMOTE_ADDR'] == $serverip || $_SERVER['REMOTE_ADDR'] == $privateip) && ($user['admin'] == "admin")) {
        echo "";
    } else {
        echo "<!--";
    } ?>
    <span style="color: red">توجه: استفاده از کلید زیر تعداد آری گرفته شده را صفر می کند و وضعیت کاربران را به رای نداده تغییر می دهد</span><br>
    <a href="?c=election&a=default&m=<?php echo $manager;  ?>" style="margin-bottom: 3px" class="btn btn-primary" >تنظیمات اولیه</a>
    <?php if (($_SERVER['REMOTE_ADDR'] == $serverip || $_SERVER['REMOTE_ADDR'] == $privateip) && ($user['admin'] == "admin")) {
        echo "";
    } else {
        echo "-->";
    } ?>
    <a href="?c=inspectionelection&a=list&m=<?php echo $manager; ?>" style="margin-bottom: 3px;background-color: #1e7e34" class="btn btn-primary" >صفحه انتخابات بازرسی</a><br>
    <a href="?c=election&a=add&m=<?php echo $manager;  ?>" class="btn btn-primary" >داوطلب جدید</a>
    <?php if (($_SERVER['REMOTE_ADDR'] == $serverip || $_SERVER['REMOTE_ADDR'] == $privateip) && ($user['admin'] == "admin")) {
        echo "";
    } else {
        echo "<!--";
    } ?>
    <a href="?c=vote&a=list&m=<?php echo $manager;  ?>" class="btn btn-primary" >لیست رای دهندگان</a>
    <?php if (($_SERVER['REMOTE_ADDR'] == $serverip || $_SERVER['REMOTE_ADDR'] == $privateip) && ($user['admin'] == "admin")) {
        echo "";
    } else {
        echo "-->";
    } ?>
</div>
<script src="assets/DataTables/datatables.min.js"></script>
<script>
    var table = new DataTable('#myTable', {
        language: {
            url: 'assets/DataTables/fa.json',
        },
    });
</script>
<script>
    let table = new DataTable('#myTable');
</script>