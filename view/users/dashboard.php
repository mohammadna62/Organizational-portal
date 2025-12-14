<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$date=date('H:i');
$jalali = gregorian_to_jalali(date('Y'),date('m'),date('d') , '/');

?>
<meta http-equiv="refresh" content="180">
<h2 style="color: #ff981a">پیشخوان</h2><br>
<div class="row">
      <div class="col-sm-6" >
        <h4 style="padding: 10px">آخرین دستگاه های اضافه شده : </h4>
        <table id="myTable" class="table table-striped w-100">
            <thead>
            <tr>
                <td>ردیف</td>
                <td>آی پی دستگاه</td>
                <td>آی پی سرور</td>
                <td>نام کاربر</td>
                <td>تاریخ و زمان اتصال</td>
            </tr>
            </thead>
            <tbody>
            <?php
            $id = 1;
            foreach ($devices as $device) :
                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $device['ip'] ; ?></td>
                    <td><?php echo $device['serverip'] ; ?></td>
                    <td><?php echo $device['devicename']; ?></td>
                    <td><?php echo $device['datetime']; ?></td>
                </tr>
                <?php ;
                $id++;
            endforeach; ?>
            </tbody>

        </table>
    </div>
    <div class="col-sm-6.5">
    </div>
    <label for="">برای مشاهده تقویم کلیک کنید:</label>
    <input type="text" name="datetime2" id="datetime2" value="<?php echo $jalali;   ?>" style="width: fit-content;margin: 3px;border: none;color: #ed7314;font-family: 'B Nazanin';font-size: 20px;">
    <fieldset    style="display:inline-block;
                        margin-inline-start: 2px;
                        margin-inline-end: 20px;
                        padding-block-start: 0.35em;
                        padding-inline-start: 0.75em;
                        padding-inline-end: 0.75em;
                        padding-block-end: 0.625em;
                        border-width: 2px;
                        border-radius:5px; color:black;direction: rtl;text-align: right;width: fit-content" dir="rtl" align="right">
        <legend>مشخصات سیستم  :</legend>
        <span>آی پی شبکه :</span><span> <?php $ip = $_SERVER['REMOTE_ADDR'];
            echo $ip; ?></span><br>
        <span>مرورگر :</span><span> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></span><br>
        <span>آی پی سرور  :</span><span> <?php echo $_SERVER['SERVER_NAME']; ?></span><br>
        <span>نام کامپیوتر :</span><span> <?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?></span><br>

    </fieldset>
</div>
