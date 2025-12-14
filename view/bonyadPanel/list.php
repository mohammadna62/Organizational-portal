<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$second= 60;
if(isset($_GET['t'])){
    $second=$_GET['t'];
}
$secondclient=900;
if(isset($_GET['tclient'])){
    $secondclient=$_GET['tclient'];
}

?>
<meta http-equiv="refresh" content="<?php  echo $second; ?>">
<link rel="stylesheet" href="assets/DataTables/datatables.min.css">
<h2 style="color: #ff981a"> رایانه های متصل به شبکه</h2>
<div class="p-2">
    <table id="myTable" class="table table-striped w-150">
        <thead>
        <tr dir="rtl" align="right">
            <td>ID</td>
            <td>IP</td>
            <td>Server IP</td>
            <td>Device Name</td>
            <td>Date And Time</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $id =1 ;
        foreach ($devices as $device) :
            ?>
        <tr>
            <td><?php echo $id; ?></td>

            <td><?php echo $device['ip']; ?></td>
            <td><?php echo $device['serverip']; ?></td>
            <td><?php echo $device['devicename']; ?></td>
            <td><?php echo $device['datetime']; ?></td>
            <td>
                 <a href="?c=bonyadPanel&a=show&id=<?php echo $device['id'];?>&m=<?php echo $manager;  ?>"class="btn btn-sm btn-primary">نمایش</a>
                <span style="color: red">|</span>
                 <a href="?c=bonyadPanel&a=delete&id=<?php echo $device['id'];?>&m=<?php echo $manager;  ?>" class="btn btn-sm btn-danger">حذف</a>
             </td>
        </tr>
        <?php $id++ ;
        endforeach; ?>
        </tbody>
    </table>
    <a href="view/bonyadPanel/export.php?m=<?php echo $manager; ?>" class="" ><img src="images/pic/excel.jpg" style="width:80px;hight:80px"></a>
    <form action="?c=bonyadPanel&a=set&m=<?php echo $manager;  ?>" method="post" >
        <label for="exampleFormControlInput1">زمان بروز رسانی صفحه مدیریت :</label>
        <select name="refresh" onchange="ChangeCarList()">
            <option value="10" <?php  if($second=='10'){echo 'selected';}?>>10 ثانیه</option>
            <option value="15" <?php  if($second=='15'){echo 'selected';}?>>15 ثانیه</option>
            <option value="20" <?php  if($second=='20'){echo 'selected';}?>>20 ثانیه</option>
            <option value="25" <?php  if($second=='25'){echo 'selected';}?>>25 ثانیه</option>
            <option value="30" <?php  if($second=='30'){echo 'selected';}?>>30 ثانیه</option>
            <option value="60" <?php  if($second=='60'){echo 'selected';}?>>60 ثانیه</option>
            <option value="300" <?php  if($second=='300'){echo 'selected';}?>>5 دقیقه</option>
        </select>

        <input type="submit" value="اعمال !" class="btn btn-primary">
    </form>
    <form action="?c=portal&a=set&m=<?php echo $manager;  ?>" method="post" >
        <label for="exampleFormControlInput1">زمان بروز رسانی صفحه کاربران  :</label>
        <select name="refreshclient" onchange="ChangeCarList()">
            <option value="10" <?php  if($secondclient=='10'){echo 'selected';}?>> 10 ثانیه</option>
            <option value="15"<?php  if($secondclient=='15'){echo 'selected';}?>>15 ثانیه</option>
            <option value="20"<?php  if($secondclient=='20'){echo 'selected';}?>>20 ثانیه</option>
            <option value="25"<?php  if($secondclient=='25'){echo 'selected';}?>>25 ثانیه</option>
            <option value="30"<?php  if($secondclient=='30'){echo 'selected';}?>>30 ثانیه</option>
            <option value="60"<?php  if($secondclient=='60'){echo 'selected';}?>>60 ثانیه</option>
            <option value="300"<?php  if($secondclient=='300'){echo 'selected';}?>>5 دقیقه</option>
            <option value="900"<?php  if($secondclient=='900'){echo 'selected';}?>>15 دقیقه</option>
            <option value="3600"<?php  if($secondclient=='3600'){echo 'selected';}?>>60 دقیقه</option>
        </select>
        <input type="submit" value="اعمال !" class="btn btn-primary">
    </form>
    <form action="?c=bonyadPanel&a=deleteall&m=<?php echo $manager;  ?>" method="post" >
        <label for="exampleFormControlInput1">پاک کردن آرشیو اطلاعات:</label><br>
        <input type="username" name="username" id="exampleFormControlInput1" placeholder="نام کاربری را وارد کنید" style="margin-bottom: 5px" >
        <input type="password" name="password" id="exampleFormControlInput1" placeholder="******" style="margin-bottom: 5px" >
        <input type="submit" value="پاک کن !" class="btn btn-primary">
    </form>

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