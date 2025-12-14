<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$id = $_GET['id'];
?>
<h2 style="color: #ff981a">ویرایش اطلاعات داوطلبان انتخابات</h2>
<div class="p-2">

    <form action="?c=inspectionelection&a=update&id=<?php echo $_GET['id']; ?>&m=<?php echo $manager; ?>" method="post"enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" readonly value="<?php echo $_GET['id'];?>" >
                </div>
                <div class="form-group">
                    <label for="firstname">نام :</label>
                    <input type="text" class="form-control" name="firstname"  value="<?php echo $inspectionvol['firstname'];?>" style="width: fit-content" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="lasttname">نام خانوادگی :</label>
                    <input type="text" class="form-control" name="lastname"  value="<?php echo $inspectionvol['lastname'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">جنسیت :</label>
                    <select name="gender" onchange="ChangeCarList()">
                        <option value="آقا" <?php  if($inspectionvol['gender']=='آقا'){echo 'selected';}?>>آقا</option>
                        <option value="خانم" <?php  if($inspectionvol['gender']=='خانم'){echo 'selected';}?> >خانم</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">شماره تلفن همراه :</label>
                    <input type="text" class="form-control"name="mobile" id="exampleFormControlInput1"  value="<?php echo $inspectionvol['mobile'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">کد پرسنلی :</label>
                    <input type="text" class="form-control"name="codepersoneli" id="exampleFormControlInput1"  value="<?php echo $inspectionvol['codepersoneli'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">کد ملی :</label>
                    <input type="text" class="form-control"name="codemeli" id="exampleFormControlInput1"  value="<?php echo $inspectionvol['codemeli'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">عنوان سمت :</label>
                    <input type="text" class="form-control"name="post" id="exampleFormControlInput1"  value="<?php echo $inspectionvol['post'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">شعار انتخاباتی :</label>
                    <input type="text" class="form-control" value="<?php echo $inspectionvol['slogan'];?>" name="slogan" id=""  style="font-family: 'B Nazanin';width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">توضیحات :</label>
                    <textarea type="text" class="form-control"name="description" id="exampleFormControlInput1" style="width: 300px;"><?php echo $inspectionvol['description'];?></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo $inspectionvol['pic']; ?>" alt="" class="w-100">
                <div class="form-group">
                    <label  for="exampleFormControlInput1">نمونه تصویر وارد شده :</label>
                    <input type="file" name="pic" class="form-control-file" id="customFile">
                </div>
            </div>
        </div>
        <input type="submit"  value="بروزرسانی" class="btn btn-primary">
        <a href="?c=inspectionelection&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
    </form>
</div>
