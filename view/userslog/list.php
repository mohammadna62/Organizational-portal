<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<h2 style="color: #ff981a">لیست و زمان ورود به سیستم</h2>
<div class="p-2">
    <table id="myTable" class="table table-striped w-150">
        <thead>
        <tr dir="rtl" align="right">
            <td>شناسه</td>
            <td>نام و نام خانوادگی</td>
            <td>نام کاربری</td>
            <td>آی پی</td>
            <td>زمان ورود</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $id =1 ;
        foreach ($userslogs as $userslog) :
            ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $userslog['fullname']; ?></td>
            <td><?php echo $userslog['username']; ?></td>
            <td><?php echo $userslog['ip']; ?></td>
            <td><?php echo $userslog['datetime']; ?></td>
            <td>
               <span style="color: red">|</span>
                 <a href="?c=userslog&a=delete&id=<?php echo $userslog['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-danger">حذف</a>
             </td>
        </tr>
        <?php $id++ ;
        endforeach; ?>
        </tbody>
    </table>
    <a href="view/userslog/export.php?m=<?php echo $manager; ?>" class="" ><img src="images/pic/excel.jpg" style="width:80px;hight:80px;margin-bottom: 5px;"></a><br>

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