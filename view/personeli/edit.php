<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$id = $_GET['id'];
?>
<h2 style="color: #ff981a">ویرایش اطلاعات پرسنل</h2>
<div class="p-2">

    <form action="?c=personeli&a=update&id=<?php echo $_GET['id']; ?>&m=<?php echo $manager; ?>" method="post"enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" readonly value="<?php echo $_GET['id'];?>" >
                </div>
                <div class="form-group">
                    <label for="firstname">نام :</label>
                    <input type="text" class="form-control" name="firstname"  value="<?php echo $personeli['firstname'];?>" style="width: fit-content" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="lasttname">نام خانوادگی :</label>
                    <input type="text" class="form-control" name="lastname"  value="<?php echo $personeli['lastname'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">وضعیت رای :</label>
                    <select disabled name="voteStatus" onchange="ChangeCarList()">
                        <option value="0" <?php  if($personeli['voteStatus']=='0'){echo 'selected';}?>>رای نداده</option>
                        <option value="1" <?php  if($personeli['voteStatus']=='1'){echo 'selected';}?> >رای داده</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">شماره تلفن همراه :</label>
                    <input type="text" class="form-control"name="mobile" id="exampleFormControlInput1"  value="<?php echo $personeli['mobile'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">کد ملی :</label>
                    <input type="text" class="form-control"name="codemeli" id="exampleFormControlInput1"  value="<?php echo $personeli['codemeli'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">کد پرسنلی :</label>
                    <input type="text" class="form-control"name="codepersoneli" id="exampleFormControlInput1"  value="<?php echo $personeli['codepersoneli'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">وضعیت عضویت صندوق :</label><br>
                    <select  name="voteability" onchange="ChangeCarList()">
                        <option value="1" <?php  if($personeli['voteability']=='1'){echo 'selected';}?>>عضو</option>
                        <option value="0" <?php  if($personeli['voteability']=='0'){echo 'selected';}?> >عدم عضویت</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">وضعیت ارسال پیام به مدیرکل :</label><br>
                    <select  name="sendgeneralstatus" onchange="ChangeCarList()">
                        <option value="1" <?php  if($personeli['sendgeneralstatus']=='1'){echo 'selected';}?>>اجازه دارد</option>
                        <option value="0" <?php  if($personeli['sendgeneralstatus']=='0'){echo 'selected';}?> >اجازه ندارد</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">وضعیت ارسال پیام به معاون توسعه :</label><br>
                    <select  name="senddeputystatus" onchange="ChangeCarList()">
                        <option value="1" <?php  if($personeli['senddeputystatus']=='1'){echo 'selected';}?>>اجازه دارد</option>
                        <option value="0" <?php  if($personeli['senddeputystatus']=='0'){echo 'selected';}?> >اجازه ندارد</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">محل خدمت :</label>
                    <input type="text" class="form-control"name="zone" id="exampleFormControlInput1"  value="<?php echo $personeli['zone'];?>" style="width: fit-content">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">توضیحات :</label>
                    <textarea type="text" class="form-control"name="description" id="exampleFormControlInput1" style="width: 300px;"><?php echo $personeli['description'];?></textarea>
                </div>
            </div>

        </div>
        <input type="submit"  value="بروزرسانی" class="btn btn-primary">
        <a href="?c=personeli&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
    </form>
</div>
