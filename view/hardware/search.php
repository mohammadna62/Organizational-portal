<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}

?>
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<h2 style="color: #ff981a">لیست کامل سخت افزار</h2>
<div class="p-2" dir="rtl" align="right">
    <table id="myTable" class="table table-striped w-150" dir="rtl" align="right"  >
        <thead style="width: fit-content">
        <tr dir="rtl" align="right" style="width: fit-content">
            <td>شناسه</td>
            <td>نام</td>
            <td>فامیل</td>
            <td> همراه</td>
            <td>پرسنلی</td>
            <td>کدملی</td>
            <td>طبقه</td>
            <td>نود</td>
            <td>اتاق</td>
            <td>کاربری</td>
            <td>رمز</td>
            <td>IP</td>
            <td>PC</td>
            <td>کروم</td>
            <td>MB</td>
            <td>CPU</td>
            <td>RAM</td>
            <td>HDD</td>
            <td>OS</td>
            <td>نمایشگر</td>
            <td>CaseAmval</td>
            <td>MoAmval</td>
            <td>تاریخ</td>
            <td>وضعیت</td>
            <td>ایجادکننده</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $row =1 ;
        foreach ($hardwares as $hardware) :
            ?>
            <tr style="font-size: smaller;width: fit-content;border-style: groove;border: grey">
                <td><?php echo $row; ?></td>
                <td><?php echo $hardware['firstname']; ?></td>
                <td><?php echo $hardware['lastname']; ?></td>
                <td><?php echo $hardware['mobile']; ?></td>
                <td><?php echo $hardware['codepersoneli']; ?></td>
                <td><?php echo $hardware['codemeli']; ?></td>
                <td><?php echo $hardware['floor']; ?></td>
                <td><?php echo $hardware['node']; ?></td>
                <td><?php echo $hardware['room']; ?></td>
                <td><?php echo $hardware['username']; ?></td>
                <td><?php echo $hardware['password']; ?></td>
                <td><?php echo $hardware['ip']; ?></td>
                <td><?php echo $hardware['computer_name']; ?></td>
                <td><?php echo $hardware['chrome_ver']; ?></td>
                <td><?php echo $hardware['motherbord_detail']; ?></td>
                <td><?php echo $hardware['cpu_detail']; ?></td>
                <td><?php echo $hardware['ram_detail']; ?></td>
                <td><?php echo $hardware['hdd_detail']; ?></td>
                <td><?php echo $hardware['os_detail']; ?></td>
                <td><?php echo $hardware['monitor_name']; ?></td>
                <td><?php echo $hardware['case_amval']; ?></td>
                <td><?php echo $hardware['monitor_amval']; ?></td>
                <td><?php echo $hardware['created_at']; ?></td>
                <td><?php echo $hardware['status']; ?></td>
                <td><?php echo $hardware['creator']; ?></td>
                <td style="width:fit-content">
                    <a href="?c=hardware&a=show&id=<?php echo $hardware['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-primary">نمایش</a>
                    <span style="color: red">|</span>
                    <a href="?c=hardware&a=edit&id=<?php echo $hardware['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-warning">ویرایش</a>
                    <span style="color: red">|</span>
                    <a href="?c=hardware&a=delete&id=<?php echo $hardware['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-danger">حذف</a>
                </td>
            </tr>
            <?php $row++ ;
        endforeach; ?>
        </tbody>
    </table>
    <a href="view/hardware/export.php?m=<?php echo $manager; ?>" class="" ><img src="images/pic/excel.jpg" style="width:80px;hight:80px"></a><br>
    <a href="?c=hardware&a=list&m=<?php echo $manager; ?>" class="btn btn-primary" >بازگشت</a>

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