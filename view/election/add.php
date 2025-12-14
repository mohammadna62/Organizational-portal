<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$jalali = gregorian_to_jalali(date('Y'),date('m'),date('d') , '/');
?>
<h2 style="color: #ff981a">اضافه کردن داوطلب</h2>
<div class="p-2" align="right" style="border-radius: 3px;background-image: url('images/volunteer.jpg');background-repeat: no-repeat;background-size:70% 50%;-moz-box-shadow:inset 0px 0px 3px 1px rgba(0,0,0,1);
        -webkit-box-shadow:inset 0px 0px 3px 1px rgba(0,0,0,1);
        box-shadow:inset 0px 0px 3px 1px rgba(0,0,0,1);" >
    <form action="?c=election&a=create&m=<?php echo $manager; ?>" method="post" enctype="multipart/form-data" class="w-100">
        <div class="form-group" >
            <label for="firstname" dir="rtl">نام:</label>
            <input type="text" class="form-control" name="firstname"  style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="lasttname">نام خانوادگی :</label>
            <input type="text" class="form-control" name="lastname"  style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">جنسیت :</label><br>
        <select name="gender" onchange="ChangeCarList()">
            <option value="آقا">آقا</option>
            <option value="خانم">خانم</option>
        </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">شماره تلفن همراه :</label>
            <input type="text" class="form-control"name="mobile" id="exampleFormControlInput1" placeholder="09xxxxxxxxx" style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">کد ملی :</label>
            <input type="text" class="form-control"name="codemeli" id="exampleFormControlInput1"  style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">کد پرسنلی :</label>
            <input type="text" class="form-control"name="codepersoneli" id="exampleFormControlInput1"  style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">عنوان سمت :</label><br>
            <input type="text" name="post" id=""  style="font-family: 'B Nazanin'">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">شعار انتخاباتی :</label><br>
            <input type="text" name="slogan" id=""  style="font-family: 'B Nazanin'">
        </div>
       <div class="form-group">
            <label  for="exampleFormControlInput1">ضمیمه کردن تصویر : </label>
            <input type="file" name="pic" class="form-control-file" id="customFile" style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">توضیحات :</label>
            <textarea type="text" class="form-control"name="description" id="exampleFormControlInput1" style="width: 300px;"></textarea>
        </div>
        <div class="form-group">
            <input type="text" name="created_at"  value="<?php   echo $jalali;  ?>"  style="font-family: 'B Nazanin';visibility: hidden">
        </div>
       <input type="submit" value="ایجاد کن !" class="btn btn-primary" style="width: fit-content">
        <a href="?c=election&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>

    </form>
</div>
