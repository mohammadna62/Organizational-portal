<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<h2 style="color: #ff981a">لیست کالا</h2>
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<div class="p-2" dir="rtl" align="right">
    <table id="myTable" class="table table-striped w-150" dir="rtl" align="right">
        <thead>
        <tr dir="rtl" align="right">
            <td>شناسه</td>
            <td>نام کالا</td>
            <td>نوع کالا</td>
            <td>تعداد</td>
            <td>تاریخ ورود به انبار</td>
            <td>کد ایجاد کننده</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $row =1 ;
        foreach ($inventories as $inventory) :
            ?>
            <tr>
                <td><?php echo $row; ?></td>
                <td><?php echo $inventory['goodsname']; ?></td>
                <td><?php echo $inventory['goodstype']; ?></td>
                <td><?php echo $inventory['number']; ?></td>
                <td><?php echo $inventory['datetime']; ?></td>
                <td><?php echo $inventory['creator']; ?></td>
                <td>
                    <a href="?c=inventory&a=show&id=<?php echo $inventory['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-primary">نمایش</a>
                    <span style="color: red">|</span>
                    <a href="?c=inventory&a=edit&id=<?php echo $inventory['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-warning">ویرایش</a>
                    <span style="color: red">|</span>
                    <a href="?c=inventory&a=delete&id=<?php echo $inventory['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-danger">حذف</a>
                </td>
            </tr>
            <?php $row++ ;
        endforeach; ?>
        </tbody>
    </table>
    <a href="view/inventory/export.php?m=<?php echo $manager; ?>" class="" ><img src="images/pic/excel.jpg" style="width:80px;hight:80px"></a><br>
        <a href="?c=inventory&a=add&m=<?php echo $manager;  ?>" class="btn btn-primary" style="margin-top: 5px">اضافه کردن کالا</a>
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