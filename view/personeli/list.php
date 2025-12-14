<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<h2 style="color: #ff981a">لیست پرسنل</h2>
<div class="p-2">
    <table id="myTable" class="table table-striped w-150">
        <thead>
        <tr dir="rtl" align="right">
            <td>شناسه</td>
            <td>نام و نام خانوادگی</td>
            <td>تلفن همراه</td>
            <td>کد پرسنلی</td>
            <td>منطقه محل خدمت</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $id =1 ;
        $count = 0;
        foreach ($personelis as $personeli) :
            ?>

            <tr>

                <td><?php echo $id; ?></td>
                <td><?php echo $personeli['firstname'].' '.$personeli['lastname']; ?></td>
                <td><?php echo $personeli['mobile']; ?></td>
                <td><?php echo $personeli['codepersoneli']; ?></td>
                <td><?php echo $personeli['zone']; ?></td>

                <td>
                    <a href="?c=personeli&a=show&id=<?php echo $personeli['id'];?>&m=<?php echo $manager;  ?>"class="btn btn-sm btn-primary">نمایش</a>
                    <span style="color: red">|</span>
                    <a href="?c=personeli&a=edit&id=<?php echo $personeli['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-warning">ویرایش</a>
                    <span style="color: red">|</span>
                    <a href="?c=personeli&a=delete&id=<?php echo $personeli['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-danger">حذف</a>
                </td>

            </tr>

            <?php $id++ ;
        endforeach; ?>
        </tbody>
    </table>

    <a href="view/personeli/export.php?m=<?php echo $manager; ?>" class="" ><img src="images/pic/excel.jpg" style="width:80px;hight:80px;margin-bottom: 5px;"></a><br>
    <a href="?c=personeli&a=add&m=<?php echo $manager;  ?>" class="btn btn-primary" >عضو جدید</a>
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