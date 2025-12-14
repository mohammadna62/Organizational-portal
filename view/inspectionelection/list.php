<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<meta http-equiv="refresh" content="300">
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<h2 style="color: #ff981a">لیست داوطلبان بازرسی صندوق</h2>
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
        foreach ($inspectionvols as $inspectionvol) :
            ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td>
                <img src="<?php echo $inspectionvol['pic'];?>" width="60">
            </td>
            <td><?php echo $inspectionvol['firstname'].' '.$inspectionvol['lastname']; ?></td>
            <td><?php echo $inspectionvol['codepersoneli']; ?></td>
            <td><?php echo $inspectionvol['mobile']; ?></td>
            <td><?php echo $inspectionvol['voteCount']; ?></td>
            <td>
                 <a href="?c=inspectionelection&a=show&id=<?php echo $inspectionvol['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-primary">نمایش</a>
                <?php if (($_SERVER['REMOTE_ADDR'] == $serverip || $_SERVER['REMOTE_ADDR'] == $privateip) && ($user['admin'] == "admin")) {
                    echo "";
                } else {
                    echo "<!--";
                } ?>
                <span style="color: red">|</span>
                 <a href="?c=inspectionelection&a=edit&id=<?php echo $inspectionvol['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-warning">ویرایش</a>
                <span style="color: red">|</span>
                 <a href="?c=inspectionelection&a=delete&id=<?php echo $inspectionvol['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-danger">حذف</a>
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
    <a href="view/inspectionelection/export.php?m=<?php echo $manager; ?>" class="" ><img src="images/pic/excel.jpg" style="width:80px;hight:80px;margin-bottom: 5px;"></a><br>
    <?php if (($_SERVER['REMOTE_ADDR'] == $serverip || $_SERVER['REMOTE_ADDR'] == $privateip) && ($user['admin'] == "admin")) {
        echo "";
    } else {
        echo "<!--";
    } ?>
    <span style="color: red">توجه: استفاده از کلید زیر تعداد آری گرفته شده را صفر می کند و وضعیت کاربران را به رای نداده تغییر می دهد</span><br>
    <a href="?c=inspectionelection&a=default&m=<?php echo $manager;  ?>" style="margin-bottom: 3px" class="btn btn-primary" >تنظیمات اولیه</a><br>
    <?php if (($_SERVER['REMOTE_ADDR'] == $serverip || $_SERVER['REMOTE_ADDR'] == $privateip) && ($user['admin'] == "admin")) {
        echo "";
    } else {
        echo "-->";
    } ?>
    <a href="?c=inspectionelection&a=add&m=<?php echo $manager;  ?>" class="btn btn-primary" >داوطلب بازرسی جدید</a>
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