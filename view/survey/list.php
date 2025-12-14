<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<meta http-equiv="refresh" content="180">
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<h2 style="color: #ff981a">لیست پیام کارمندان</h2>
<div class="p-2">
    <table id="myTable" class="table table-striped w-150">
        <thead>
        <tr dir="rtl" align="right">
            <td>شناسه</td>
            <td>تصویر</td>
            <td>نام و نام خانوادگی</td>
            <td>کد ملی</td>
            <td>کد پرسنلی</td>
            <td>تاریخ ارسال</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $id =1 ;
        foreach ($surveys as $survey) :
            ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td>
                <img src="<?php echo $survey['pic'];?>" width="60">
            </td>
            <td><?php echo $survey['familyname']; ?></td>
            <td><?php echo $survey['codemeli']; ?></td>
            <td><?php echo $survey['codepersoneli']; ?></td>
            <td><?php echo $survey['created_at']; ?></td>
            <td>
                 <a href="?c=survey&a=show&id=<?php echo $survey['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-primary">نمایش</a>
                <span style="color: red">|</span>
                 <a href="?c=survey&a=delete&id=<?php echo $survey['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-danger">حذف</a>
             </td>
        </tr>
        <?php $id++ ;
        endforeach; ?>
        </tbody>
    </table>
    <a href="view/survey/export.php?m=<?php echo $manager; ?>" class="" ><img src="images/pic/excel.jpg" style="width:80px;hight:80px;margin-bottom: 5px;"></a><br>
    <a href="?c=portal&a=edit&m=<?php echo $manager;  ?>" class="btn btn-primary" >بازگشت</a>
</div>
<script src="asstes/DataTables/datatables.min.js"></script>
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