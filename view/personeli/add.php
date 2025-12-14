<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$jalali = gregorian_to_jalali(date('Y'),date('m'),date('d') , '/');
?>
<h2 style="color: #ff981a"> عضو جدید پرتال اداری</h2>
<div class="p-2" align="right" style="background-image: url('images/pic/user_add.png');background-repeat: no-repeat;background-size:60% 60%" >
    <form action="?c=personeli&a=create&m=<?php echo $manager; ?>" method="post" enctype="multipart/form-data" class="w-100">
        <div class="form-group" >
            <label for="firstname" dir="rtl">نام:</label>
            <input type="text" class="form-control" name="firstname"  style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="lasttname">نام خانوادگی :</label>
            <input type="text" class="form-control" name="lastname"  style="width: fit-content">
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
            <label for="exampleFormControlInput1">وضعیت عضویت صندوق :</label><br>
            <select name="voteability" onchange="ChangeCarList()">
                <option value="0"  >عدم عضویت</option>
                <option value="1" >عضو</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">منطقه محل خدمت :</label>
            <input type="text" class="form-control"name="zone" id="exampleFormControlInput1" placeholder="" style="width: fit-content">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">تاریخ ایجاد :</label><br>
            <input type="text" name="created_at" id="datetime2" value="<?php   echo $jalali;  ?>"  style="font-family: 'B Nazanin'">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">توضیحات :</label>
            <textarea type="text" class="form-control"name="description" id="exampleFormControlInput1" style="width: 300px;"></textarea>
        </div>
        <input type="submit" value="ایجاد کن !" class="btn btn-primary" style="width: fit-content">
        <a href="?c=vote&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>

    </form>
</div>
