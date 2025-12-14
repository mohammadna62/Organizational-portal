<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$jalali = gregorian_to_jalali(date('Y'),date('m'),date('d') , '/');

?>
<h2 style="color: #ff981a">ثبت نام پنل مدیریت</h2>
<div class="p-2" align="right" style="background-image: url('images/manager.png');background-repeat: no-repeat;background-size:60% 60%" >
    <form action="?c=managment&a=create&m=<?php echo $manager; ?>" method="post"  class="w-100">
        <div class="form-group" >
            <label for="firstname" dir="rtl">نام:</label>
            <input type="text" class="form-control" name="firstname"  style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="lasttname">نام خانوادگی :</label>
            <input type="text" class="form-control" name="lastname"  style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">سطح دسترسی :</label><br/>
            <input type="checkbox" value="admin" name="admin">
            <label for="exampleFormControlInput1">مدیریت </label><br/>
            <input type="checkbox" value="it" name="it">
            <label for="exampleFormControlInput1">مدیرکل </label><br/>
            <input type="checkbox" value="it" name="general">
            <label for="exampleFormControlInput1">معاون توسعه مدیریت </label><br/>
            <input type="checkbox" value="it" name="deputy">
            <label for="exampleFormControlInput1">فن آوری اطلاعات </label><br/>
            <input type="checkbox" value="hr" name="hr">
            <label for="exampleFormControlInput1">امور کارکنان </label><br/>
            <input type="checkbox" value="support" name="support">
            <label for="exampleFormControlInput1">پشتیبانی </label><br/>

        </div>
        <div class="form-group">
            <label for="lasttname">نام کاربری :</label>
            <input type="text" class="form-control" name="email"  style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">کلمه عبور :</label>
            <input type="text" name="password" style="width: fit-content" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">شماره تلفن همراه :</label>
            <input type="text" class="form-control"name="mobile" id="exampleFormControlInput1" style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">عنوان سمت :</label>
            <input type="text" class="form-control"name="post" id="exampleFormControlInput1" placeholder="جایگاه شغلی فعلی" style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">منطقه محل خدمت :</label>
            <input type="text" class="form-control"name="zone" id="exampleFormControlInput1" placeholder="" style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">تاریخ ایجاد :</label><br>
            <input type="text" name="created_at" id="datetime2" value="<?php   echo $jalali;  ?>"  style="width: fit-content" >
        </div>
       <input type="submit" value="ایجاد کن !" class="btn btn-primary" style="width: fit-content">
        <a href="?c=managment&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>

    </form>
</div>
