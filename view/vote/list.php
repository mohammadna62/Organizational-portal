<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>

<?php if (($_SERVER['REMOTE_ADDR'] == $serverip || $_SERVER['REMOTE_ADDR'] == $privateip) && ($user['admin'] == "admin")) {
    echo "";
} else {
    die("<span style='color: red;font-family: B Nazanin'; size='30px'>"."این صفحه غیر قابل نمایش می باشد"."</span>");
} ?>
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<h2 style="color: #ff981a">لیست رای دهندگان</h2>
<div class="p-2">
    <table id="myTable" class="table table-striped w-150">
        <thead>
        <tr dir="rtl" align="right">
            <td>شناسه</td>
            <td>نام و نام خانوادگی</td>
            <td>تلفن همراه</td>
            <td>کد پرسنلی</td>
            <td>منطقه محل خدمت</td>
            <td>رای صندوق</td>
            <td>رای بازرسی</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $id =1 ;
        $count = 0;
        $count1 = 0;
        foreach ($votes as $vote) :
            ?>
            <?php if ($vote['voteability']==1):  ?>
        <tr>

            <td><?php echo $id; ?></td>
            <td><?php echo $vote['firstname'].' '.$vote['lastname']; ?></td>
            <td><?php echo $vote['mobile']; ?></td>
            <td><?php echo $vote['codepersoneli']; ?></td>
            <td><?php echo $vote['zone']; ?></td>
            <td><?php echo $vote['votes']; if(!empty($vote['votes'])){$count++;} ?></td>
            <td><?php echo $vote['inspectionvote']; if(!empty($vote['inspectionvote'])){$count1++;} ?></td>
            <td>
                 <a href="?c=vote&a=show&id=<?php echo $vote['id'];?>&m=<?php echo $manager;  ?>"class="btn btn-sm btn-primary">نمایش</a>
                <span style="color: red">|</span>
                 <a href="?c=vote&a=edit&id=<?php echo $vote['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-warning">ویرایش</a>
<!--                <span style="color: red">|</span>-->
<!--                 <a href="?c=vote&a=delete&id=--><?php //echo $vote['id'];?><!--&m=--><?php //echo $manager;  ?><!--" class="btn btn-sm btn-danger">حذف</a>-->
             </td>

        </tr>
        <?php endif; ?>
        <?php $id++ ;
        endforeach; ?>
        </tbody>
    </table>
    <div> تعداد شرکت کنندگان مجمع عمومی تاکنون :<span style="color: red;font-size: 30px"><?php echo $count?></span>نفر </div>
    <div> تعداد شرکت کنندگان بازرسی تاکنون :<span style="color: red;font-size: 30px"><?php echo $count1?></span>نفر </div>
    <a href="view/vote/export.php?m=<?php echo $manager; ?>" class="" ><img src="images/pic/excel.jpg" style="width:80px;hight:80px;margin-bottom: 5px;"></a><br>

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
