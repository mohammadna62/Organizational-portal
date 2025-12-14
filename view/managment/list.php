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
<h2 style="color: #ff981a">لیست حساب های ادمین</h2>
<div class="p-2">
    <table id="myTable" class="table table-striped w-150" style="text-align: right; width: fit-content">
        <thead>
        <tr>
            <td >شناسه</td>
            <td >نام و نام خانوادگی</td>
            <td >عنوان پست</td>
            <td >محل خدمت</td>
            <td >سطح دسترسی</td>
            <td >ایجاد کننده</td>
            <td >نام کاربری</td>
            <td >عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $id =1 ;
        foreach ($users as $user) :
            ?>
        <tr>
            <td ><?php echo $id; ?></td>
            <td ><?php echo $user['firstname'].' '.$user['lastname']; ?></td>
            <td ><?php echo $user['post']; ?></td>
            <td ><?php echo $user['zone']; ?></td>
            <td ><?php if($user['admin']=='admin') echo "مدیر - "; if($user['general']=='general') echo "مدیرکل - ";if($user['deputy']=='deputy') echo "معاون توسعه - "; if($user['it']=='it') echo "IT  - "; if($user['hr']=='hr') echo "امور کارکنان - ";  if($user['support']=='support') echo "پشتیبانی"; ?></td>
            <td ><?php echo $user['creator']; ?></td>
            <td ><?php echo $user['email']; ?></td>
            <td>

                 <a href="?c=managment&a=edit&id=<?php echo $user['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-warning" >ویرایش</a>
                <span style="color: red ">|</span>
                 <a href="?c=managment&a=delete&id=<?php echo $user['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-danger" >حذف</a>
             </td>
        </tr>
        <?php $id++ ;
        endforeach; ?>
        </tbody>
    </table>
    <a href="?c=managment&a=add&m=<?php echo $manager;  ?>" class="btn btn-primary" >ادمین جدید</a>
    <span style="color: red ">|</span>
    <a href="?c=userslog&a=list&m=<?php echo $manager;  ?>" class="btn btn-primary" >لیست ورودها</a>
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