<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
if (($user['admin'] == "admin" && $_SERVER['REMOTE_ADDR'] = '10.2.15.34') || ($user['deputy'] == "deputy" && $_SERVER['REMOTE_ADDR'] = '10.2.15.34')) {
    echo "";
} else {
    echo "شما اجازه دسترسی به این قسمت را ندارید";die();
}
?>
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<h2 style="color: #ff981a">لیست پیام های ارسالی :</h2>
<div class="p-2">
    <table id="myTable" class="table table-striped w-150">
        <thead>
        <tr dir="rtl" align="right">
            <td>شناسه</td>
            <td>نام و نام خانوادگی</td>
            <td>محل خدمت</td>
            <td>کد پرسنلی</td>
            <td>کد ملی</td>
            <td>تاریخ ارسال</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $id =1 ;
        $count = 0;
        foreach ($deputys as $deputy) : ?>
            <tr style="font">

                <td><b><?php echo $id; ?></b></td>
                <td><?php if($deputy['readstatus']==1){echo "<b style='color: red'>";}else{echo "";} echo $deputy['fullname']; if($deputy['readstatus']==1){echo "</b>";}else{echo "";} ?></td>
                <td><?php if($deputy['readstatus']==1){echo "<b>";}else{echo "";} echo $deputy['zone']; if($deputy['readstatus']==1){echo "</b>";}else{echo "";}  ?></td>
                <td><?php if($deputy['readstatus']==1){echo "<b>";}else{echo "";} echo $deputy['codepersoneli']; if($deputy['readstatus']==1){echo "</b>";}else{echo ""; } ?></td>
                <td><?php if($deputy['readstatus']==1){echo "<b>";}else{echo "";} echo $deputy['codemeli']; if($deputy['readstatus']==1){echo "</b>";}else{echo ""; } ?></b></td>
                <td><?php if($deputy['readstatus']==1){echo "<b>";}else{echo "";} echo $deputy['datetime']; if($deputy['readstatus']==1){echo "</b>";}else{echo ""; } ?></td>
                <td>
                    <a href="?c=deputy&a=show&id=<?php echo $deputy['id'];?>&m=<?php echo $manager;  ?>"class="btn btn-sm btn-primary">نمایش</a>
                    <span style="color: red">|</span>
                    <a href="?c=deputy&a=reply&id=<?php echo $deputy['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-warning">پاسخ</a>
                    <span style="color: red">|</span>
                    <a href="?c=deputy&a=delete&id=<?php echo $deputy['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-danger">حذف</a>
                </td>
            </tr>
            <?php $id++ ; endforeach; ?>
        </tbody>
    </table>

<!--    <a href="view/general/export.php?m=--><?php //echo $manager; ?><!--" class="" ><img src="images/pic/excel.jpg" style="width:80px;hight:80px;margin-bottom: 5px;"></a><br>-->

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