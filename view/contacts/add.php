<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$jalali = gregorian_to_jalali(date('Y'),date('m'),date('d') , '/');
?>
<h2 style="color: #ff981a"> کارمند جدید</h2>
<div class="p-2" align="right" style="background-image: url('images/pic/user_add.png');background-repeat: no-repeat;background-size:60% 60%" >
    <form action="?c=contacts&a=create&m=<?php echo $manager; ?>" method="post" enctype="multipart/form-data" class="w-100">
        <div class="form-group" >
            <label for="firstname" dir="rtl">نام:</label>
            <input type="text" class="form-control" name="firstname"  style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="lasttname">نام خانوادگی :</label>
            <input type="text" class="form-control" name="lastname"  style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">جنسیت :</label>
            <select name="gender" onchange="ChangeCarList()">
                <option value="آقا" >آقا</option>
                <option value="خانم"  >خانم</option>
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
            <label for="exampleFormControlInput1">آدرس :</label>
            <input type="text" class="form-control"name="address" id="exampleFormControlInput1" placeholder="ایران ، تهران ..." style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">منطقه محل خدمت :</label>
            <input type="text" class="form-control"name="zone" id="exampleFormControlInput1" placeholder="" style="width: fit-content">
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">نوع قراداد :</label><br>
        <select name="contract" onchange="ChangeCarList()">
            <option value="نامشخص">نامشخص</option>
            <option value="رسمی">رسمی</option>
            <option value="پیمانی">پیمانی</option>
            <option value="قرارداد معین">قرارداد معین</option>
            <option value="قرارداد کارگری">قرارداد کارگری</option>
            <option value="شرکتی">شرکتی</option>
        </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">تاریخ تولد :</label>
            <input type="text" name="birthday" id="datetime2" value=""  style="font-family: 'B Nazanin'">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">تاریخ ایجاد :</label><br>
            <input type="text" name="created_at" id="datetime2" value="<?php   echo $jalali;  ?>"  style="font-family: 'B Nazanin'">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">تاریخ استخدام :</label><br>
            <input type="text" name="contract_date" id="datetime" value="<?php   echo $jalali;  ?>"  style="font-family: 'B Nazanin'">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">عنوان سمت :</label><br>
            <input type="text" name="post" id=""  style="font-family: 'B Nazanin'">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">وضعیت همکاری :</label><br>
            <select name="contStatus" onchange="ChangeCarList()">
                <option value="آقا" >فعال</option>
                <option value="خانم"  >انتقالی</option>
                <option value="خانم"  >بازنشسته</option>
                <option value="خانم" >خارج از بنیاد</option>
            </select>
        </div>
        <div class="form-group">
            <label  for="exampleFormControlInput1">ضمیمه کردن تصویر : </label>
            <input type="file" name="pic" class="form-control-file" id="customFile" style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">توضیحات :</label>
            <textarea type="text" class="form-control"name="description" id="exampleFormControlInput1" style="width: 300px;"></textarea>
        </div>
       <input type="submit" value="ایجاد کن !" class="btn btn-primary" style="width: fit-content">
        <a href="?c=contacts&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>

    </form>
</div>
