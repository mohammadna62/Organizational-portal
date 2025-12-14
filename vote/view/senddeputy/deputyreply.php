<?php
if (!isset($_COOKIE['username'])){
    header('location:../../loginvote.php');
}
$date = date('H:i');
$jalali = gregorian_to_jalali(date('Y'), date('m'), date('d'), '/');
$datetime = $jalali . "    " . $date;

?>
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<h2 style="color: #ff981a">لیست پیام های ارسالی :</h2>
<div class="p-2">
    <table id="myTable" class="table table-striped w-150">
        <thead>
        <tr dir="rtl" align="right">
            <td>شناسه</td>
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
        foreach ( $deputyreplies as  $deputyreply ) : ?>
            <tr style="font">

                <td><b><?php echo $id; ?></b></td>
                <td><?php  echo $deputyreply['codepersoneli'];  ?></td>
                <td><?php  echo $deputyreply['codemeli'];  ?></td>
                <td><?php  echo $deputyreply['datetime'];  ?></td>
                <td>
                    <a href="?c=senddeputy&a=showreply&id=<?php echo $deputyreply['id'];?>"class="btn btn-sm btn-primary">نمایش</a>
                </td>
            </tr>
            <?php $id++ ; endforeach; ?>
        </tbody>
    </table>
</div>
