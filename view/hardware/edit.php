<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}

?>
<h2 style="color: #ff981a">ویرایش اطلاعات سخت افزار</h2>
<div class="p-2"style="padding: 5px;border-color: #1d2124; border-style: groove; border-radius: 15px;background-color: #DEF6F6" >

    <form action="?c=hardware&a=update&m=<?php echo $manager; ?>" method="post"enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label for="firstname">نام :</label>
                    <input type="text" class="form-control" name="firstname"  value="<?php echo $hardware['firstname'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="lasttname">نام خانوادگی :</label>
                    <input type="text" class="form-control" name="lastname"  value="<?php echo $hardware['lastname'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">تلفن همراه :</label>
                    <input type="text" class="form-control"name="mobile" id="exampleFormControlInput1"  value="<?php echo $hardware['mobile'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">کد ملی :</label>
                    <input type="text" class="form-control"name="codemeli" id="exampleFormControlInput1"  value="<?php echo $hardware['codemeli'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">کد پرسنلی :</label>
                    <input type="text" class="form-control"name="codepersoneli" id="exampleFormControlInput1"  value="<?php echo $hardware['codepersoneli'];?>" style="width: fit-content">
                </div>
                <label for="exampleFormControlInput1">طبقه :</label>
                <select name="floor" onchange="ChangeCarList()" >
                    <option value="0" <?php  if($hardware['floor']=='0'){echo 'selected';}?>>0</option>
                    <option value="1"<?php  if($hardware['floor']=='1'){echo 'selected';}?>>1</option>
                    <option value="2"<?php  if($hardware['floor']=='2'){echo 'selected';}?>>2</option>
                    <option value="3"<?php  if($hardware['floor']=='3'){echo 'selected';}?>>3</option>
                    <option value="4"<?php  if($hardware['floor']=='4'){echo 'selected';}?>>4</option>
                    <option value="5"<?php  if($hardware['floor']=='5'){echo 'selected';}?>>5</option>
                </select>
                <div class="form-group">
                    <label for="exampleFormControlInput1">نود شبکه :</label>
                    <input type="text" class="form-control"name="node" id="exampleFormControlInput1"  value="<?php echo $hardware['node'];?>">
                </div>
                <div class="form-group">
                    <label for="firstname">اتاق :</label>
                    <input type="text" class="form-control" name="room"  value="<?php echo $hardware['room'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="lasttname">نام کاربری :</label>
                    <input type="text" class="form-control" name="username"  value="<?php echo $hardware['username'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">رمز عبور :</label>
                    <input type="text" class="form-control"name="password" id="exampleFormControlInput1"  value="<?php echo $hardware['password'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">ای پی :</label>
                    <input type="text" class="form-control"name="ip" id="exampleFormControlInput1"  value="<?php echo $hardware['ip'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">نام کامپیوتر :</label>
                    <input type="text" class="form-control"name="computer_name" id="exampleFormControlInput1"  value="<?php echo $hardware['computer_name'];?>" style="width: fit-content">
                </div>

            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">نسخه گوگل کروم :</label>
                    <input type="text" class="form-control"name="chrome_ver" id="exampleFormControlInput1"  value="<?php echo $hardware['chrome_ver'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">مشخصات مادربورد :</label>
                    <input type="text" class="form-control"name="motherbord_detail" id="exampleFormControlInput1" value="<?php echo $hardware['motherbord_detail'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">مشخصات پردازشگر :</label>
                    <input type="text" class="form-control"name="cpu_detail" id="exampleFormControlInput1"  value="<?php echo $hardware['cpu_detail'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">مشخصات حافظه موقت :</label>
                    <input type="text" class="form-control"name="ram_detail" id="exampleFormControlInput1"  value="<?php echo $hardware['ram_detail'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">مشخصات حافظه دائم :</label>
                    <input type="text" class="form-control"name="hdd_detail" id="exampleFormControlInput1"  value="<?php echo $hardware['hdd_detail'];?>" style="width: fit-content">
                </div>
                <label for="exampleFormControlInput1">سیستم عامل</label><br>
                <select name="os_detail" onchange="ChangeCarList()">
                    <option value="none"<?php  if($hardware['os_detail']==''){echo 'selected';}?>>none</option>
                    <option value="Win 7"<?php  if($hardware['os_detail']=='Win 7'){echo 'selected';}?>>Win 7</option>
                    <option value="Win 10"<?php  if($hardware['os_detail']=='Win 10'){echo 'selected';}?>>Win 10</option>
                    <option value="Win Ser 2012"<?php  if($hardware['os_detail']=='Win Ser 2012'){echo 'selected';}?>>Win Ser 2012</option>
                    <option value="Win 11"<?php  if($hardware['os_detail']=='Win 11'){echo 'selected';}?>>Win 11</option>
                </select><br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">مشخصات نمایشگر :</label>
                    <input type="text" class="form-control"name="monitor_name" id="exampleFormControlInput1"  value="<?php echo $hardware['monitor_name'];?>" style="width: fit-content">
                </div>
                <label for="exampleFormControlInput1">وضعیت :</label>
                <select name="status" onchange="ChangeCarList()">
                    <option value="فعال"<?php  if($hardware['status']=='فعال'){echo 'selected';}?>> فعال</option>
                    <option value="غیر فعال"<?php  if($hardware['status']=='غیر فعال'){echo 'selected';}?>>غیر فعال</option>
                </select>
                <div class="form-group">
                    <label for="exampleFormControlInput1">شماره اموال کیس  :</label>
                    <input type="text" class="form-control"name="case_amval" id="exampleFormControlInput1"  value="<?php echo $hardware['case_amval'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">شماره اموال نمایشگر  :</label>
                    <input type="text" class="form-control"name="monitor_amval" id="exampleFormControlInput1"  value="<?php echo $hardware['monitor_amval'];?>" style="width: fit-content">
                </div>
                <textarea name="description" placeholder="توضیحات" style="width: 300px"><?php echo $hardware['description'];?></textarea><br>
                <label for="exampleFormControlInput1">تاریخ اصلاح :</label>
                <input type="text" name="created_at" id="datetime2" value="<?php echo $hardware['created_at'];?>" style="font-family: 'B Nazanin'">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" readonly value="<?php echo $_GET['id'];?>"style="width: fit-content">
                </div>
            </div>

        </div>
        <input type="submit"  value="بروز رسانی" class="btn btn-primary">
    </form>
</div>
