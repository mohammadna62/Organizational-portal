<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<h2 style="color: #ff981a">لیست سخت افزار</h2>
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<div class="p-2" dir="rtl" align="right">
    <table id="myTable" class="table table-striped w-150" dir="rtl" align="right">
        <thead>
        <tr dir="rtl" align="right">
            <td>شناسه</td>
            <td>نام کاربری</td>
            <td>تلفن همراه</td>
            <td>کد پرسنلی</td>
            <td>کد ملی</td>
            <td>وضعیت</td>
            <td>تاریخ ایجاد</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $row =1 ;
        foreach ($hardwares as $hardware) :
            ?>
            <tr>
                <td><?php echo $row; ?></td>
                <td><?php echo $hardware['firstname'].' '.$hardware['lastname']; ?></td>
                <td><?php echo $hardware['mobile']; ?></td>
                <td><?php echo $hardware['codepersoneli']; ?></td>
                <td><?php echo $hardware['codemeli']; ?></td>
                <td><?php echo $hardware['status']; ?></td>
                <td><?php echo $hardware['created_at']; ?></td>
                <td>
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
    <a href="?c=hardware&a=search&m=<?php echo $manager; ?>" class="btn btn-primary">لیست کامل</a>
    <a href="?c=hardware&a=add&m=<?php echo $manager;  ?>" class="btn btn-primary">اضافه کردن </a>


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