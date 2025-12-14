<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$id = $_GET['id'];
?>
<h2 style="color: #ff981a">ویرایش اطلاعات ادمین</h2>
<div class="p-2">

    <form action="?c=managment&a=update&id=<?php echo $_GET['id']; ?>&m=<?php echo $manager; ?>" method="post"enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" readonly value="<?php echo $_GET['id'];?>" >
                </div>
                <div class="form-group">
                    <label for="firstname">نام :</label>
                    <input type="text" class="form-control" name="firstname"  value="<?php echo $user['firstname'];?>" style="width: fit-content" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="lasttname">نام خانوادگی :</label>
                    <input type="text" class="form-control" name="lastname"  value="<?php echo $user['lastname'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">سطح دسترسی :</label><br/>
                    <input type="checkbox" value="admin" name="admin" <?php if ($user['admin'] == "admin" )echo "checked";?> >
                    <label for="exampleFormControlInput1">مدیریت </label><br/>
                    <input type="checkbox" value="general" name="general" <?php if ($user['general'] == "general" )echo "checked";?> >
                    <label for="exampleFormControlInput1">مدیرکل </label><br/>
                    <input type="checkbox" value="deputy" name="deputy" <?php if ($user['deputy'] == "deputy" )echo "checked";?> >
                    <label for="exampleFormControlInput1">معاون توسعه و مدیریت </label><br/>
                    <input type="checkbox" value="it" name="it" <?php if ($user['it'] == "it")echo "checked";?>>
                    <label for="exampleFormControlInput1">فن آوری اطلاعات </label><br/>
                    <input type="checkbox" value="hr" name="hr" <?php if ($user['hr'] == "hr" )echo "checked";?>>
                    <label for="exampleFormControlInput1">امور کارکنان </label><br/>
                    <input type="checkbox" value="support" name="support" <?php if ($user['support'] == "support")echo "checked";?>>
                    <label for="exampleFormControlInput1">پشتیبانی </label><br/>

                </div>
                </div>
                <div class="form-group">
                    <label for="lasttname">نام کاربری :</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $user['email'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">کلمه عبور :</label>
                    <input type="password" class="form-control" name="password" style="width: fit-content" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">شماره تلفن همراه :</label>
                    <input type="text" class="form-control"name="mobile" id="exampleFormControlInput1"  value="<?php echo $user['mobile'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">عنوان سمت :</label>
                    <input type="text" class="form-control"name="post" id="exampleFormControlInput1" value="<?php echo $user['post'];?>"  style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">محل خدمت :</label>
                    <input type="text" class="form-control"name="zone" id="exampleFormControlInput1"  value="<?php echo $user['zone'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">تاریخ ایجاد :</label><br>
                    <input type="text" name="created_at"  value="<?php echo $user['create_at'];?>"  style="width: fit-content" disabled >
                </div>
            </div>
        </div>
        <input type="submit"  value="بروزرسانی" class="btn btn-primary">
        <a href="?c=managment&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
    </form>
</div>
