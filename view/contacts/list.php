<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<h2 style="color: #ff981a">لیست کارمندان</h2>
<div class="p-2">
    <table id="myTable" class="table table-striped w-150">
        <thead>
        <tr dir="rtl" align="right">
            <td>شناسه</td>
            <td>تصویر</td>
            <td>نام و نام خانوادگی</td>
            <td>عنوان پست</td>
            <td>کد پرسنلی</td>
            <td>منطقه محل خدمت</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $id =1 ;
        foreach ($contacts as $contact) :
            ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td>
                <img src="<?php echo $contact['pic'];?>" width="60">
            </td>
            <td><?php echo $contact['firstname'].' '.$contact['lastname']; ?></td>
            <td><?php echo $contact['post']; ?></td>
            <td><?php echo $contact['codepersoneli']; ?></td>
            <td><?php echo $contact['zone']; ?></td>
            <td>
                 <a href="?c=contacts&a=show&id=<?php echo $contact['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-primary">نمایش</a>
                <span style="color: red">|</span>
                 <a href="?c=contacts&a=edit&id=<?php echo $contact['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-warning">ویرایش</a>
                <span style="color: red">|</span>
                 <a href="?c=contacts&a=delete&id=<?php echo $contact['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-danger">حذف</a>
             </td>
        </tr>
        <?php $id++ ;
        endforeach; ?>
        </tbody>
    </table>
    <a href="view/contacts/export.php?m=<?php echo $manager; ?>" class="" ><img src="images/pic/excel.jpg" style="width:80px;hight:80px;margin-bottom: 5px;"></a><br>
    <a href="?c=contacts&a=add&m=<?php echo $manager;  ?>" class="btn btn-primary" >کارمند جدید</a>
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