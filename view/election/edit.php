<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$id = $_GET['id'];
?>
<h2 style="color: #ff981a">ویرایش اطلاعات داوطلبان انتخابات</h2>
<div class="p-2">

    <form action="?c=election&a=update&id=<?php echo $_GET['id']; ?>&m=<?php echo $manager; ?>" method="post"enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" readonly value="<?php echo $_GET['id'];?>" >
                </div>
                <div class="form-group">
                    <label for="firstname">نام :</label>
                    <input type="text" class="form-control" name="firstname"  value="<?php echo $volunteer['firstname'];?>" style="width: fit-content" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="lasttname">نام خانوادگی :</label>
                    <input type="text" class="form-control" name="lastname"  value="<?php echo $volunteer['lastname'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">جنسیت :</label>
                    <select name="gender" onchange="ChangeCarList()">
                        <option value="آقا" <?php  if($volunteer['gender']=='آقا'){echo 'selected';}?>>آقا</option>
                        <option value="خانم" <?php  if($volunteer['gender']=='خانم'){echo 'selected';}?> >خانم</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">شماره تلفن همراه :</label>
                    <input type="text" class="form-control"name="mobile" id="exampleFormControlInput1"  value="<?php echo $volunteer['mobile'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">کد پرسنلی :</label>
                    <input type="text" class="form-control"name="codepersoneli" id="exampleFormControlInput1"  value="<?php echo $volunteer['codepersoneli'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">کد ملی :</label>
                    <input type="text" class="form-control"name="codemeli" id="exampleFormControlInput1"  value="<?php echo $volunteer['codemeli'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">عنوان سمت :</label>
                    <input type="text" class="form-control"name="post" id="exampleFormControlInput1"  value="<?php echo $volunteer['post'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">شعار انتخاباتی :</label>
                    <input type="text" class="form-control" value="<?php echo $volunteer['slogan'];?>" name="slogan" id=""  style="font-family: 'B Nazanin';width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">توضیحات :</label>
                    <textarea type="text" class="form-control"name="description" id="exampleFormControlInput1" style="width: 300px;"><?php echo $volunteer['description'];?></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo $volunteer['pic']; ?>" alt="" class="w-100">
                <div class="form-group">
                    <label  for="exampleFormControlInput1">نمونه تصویر وارد شده :</label>
                    <input type="file" name="pic" class="form-control-file" id="customFile">
                </div>
            </div>
        </div>
        <input type="submit"  value="بروزرسانی" class="btn btn-primary">
        <a href="?c=election&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
    </form>
</div>
