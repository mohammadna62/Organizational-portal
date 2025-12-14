<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$id = $_GET['id'];
?>
<h2 style="color: #ff981a">ویرایش اطلاعات کارمند</h2>
<div class="p-2">

    <form action="?c=contacts&a=update&id=<?php echo $_GET['id']; ?>&m=<?php echo $manager; ?>" method="post"enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" readonly value="<?php echo $_GET['id'];?>" >
                </div>
                <div class="form-group">
                    <label for="firstname">نام :</label>
                    <input type="text" class="form-control" name="firstname"  value="<?php echo $contact['firstname'];?>" style="width: fit-content" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="lasttname">نام خانوادگی :</label>
                    <input type="text" class="form-control" name="lastname"  value="<?php echo $contact['lastname'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">جنسیت :</label>
                    <select name="gender" onchange="ChangeCarList()">
                        <option value="آقا" <?php  if($contact['gender']=='آقا'){echo 'selected';}?>>آقا</option>
                        <option value="خانم" <?php  if($contact['gender']=='خانم'){echo 'selected';}?> >خانم</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">شماره تلفن همراه :</label>
                    <input type="text" class="form-control"name="mobile" id="exampleFormControlInput1"  value="<?php echo $contact['mobile'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">کد ملی :</label>
                    <input type="text" class="form-control"name="codemeli" id="exampleFormControlInput1"  value="<?php echo $contact['codemeli'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">کد پرسنلی :</label>
                    <input type="text" class="form-control"name="codepersoneli" id="exampleFormControlInput1"  value="<?php echo $contact['codepersoneli'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">آدرس :</label>
                    <input type="text" class="form-control"name="address" id="exampleFormControlInput1"  value="<?php echo $contact['address'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">محل خدمت :</label>
                    <input type="text" class="form-control"name="zone" id="exampleFormControlInput1"  value="<?php echo $contact['zone'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">نوع همکاری :</label><br>
                    <select name="contract" onchange="ChangeCarList()" >
                        <option value="نامشخص" <?php  if($contact['contract']=='نامشخص'){echo 'selected';}?>>نامشخص</option>
                        <option value="رسمی" <?php  if($contact['contract']=='رسمی'){echo 'selected';}?>>رسمی</option>
                        <option value="پیمانی" <?php  if($contact['contract']=='پیمانی'){echo 'selected';}?>>پیمانی</option>
                        <option value="قرارداد معین" <?php  if($contact['contract']=='قرارداد معین'){echo 'selected';}?>>قرارداد معین</option>
                        <option value="قرارداد کارگری" <?php  if($contact['contract']=='قرارداد کارگری'){echo 'selected';}?> >قرارداد کارگری</option>
                        <option value="شرکتی" <?php  if($contact['contract']=='شرکتی'){echo 'selected';}?> >شرکتی</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">تاریخ تولد :</label>
                    <input type="text" name="birthday" id="datetime2"  value="<?php echo $contact['birthday'];?>"  style="font-family: 'B Nazanin'">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">تاریخ استخدام :</label>
                    <input type="text" class="form-control" name="contract_date" id="datetime"  value="<?php echo $contact['contract_date'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">عنوان سمت :</label>
                    <input type="text" class="form-control"name="post" id="exampleFormControlInput1"  value="<?php echo $contact['post'];?>" style="width: fit-content">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">وضعیت همکاری :</label><br>
                    <select name="contStatus" onchange="ChangeCarList()">
                        <option value="فعال" <?php  if($contact['contStatus']=='فعال'){echo 'selected';}?>>فعال</option>
                        <option value="انتقالی" <?php  if($contact['contStatus']=='انتقالی'){echo 'selected';}?> >انتقالی</option>
                        <option value="بازنشسته" <?php  if($contact['contStatus']=='بازنشسته'){echo 'selected';}?> >بازنشسته</option>
                        <option value="خارج از بنیاد" <?php  if($contact['contStatus']=='خارج از بنیاد'){echo 'selected';}?> >خارج از بنیاد</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">توضیحات :</label>
                    <textarea type="text" class="form-control"name="description" id="exampleFormControlInput1" style="width: 300px;"><?php echo $contact['description'];?></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo $contact['pic']; ?>" alt="" class="w-100">
                <div class="form-group">
                    <label  for="exampleFormControlInput1">نمونه تصویر وارد شده :</label>
                    <input type="file" name="pic" class="form-control-file" id="customFile">
                </div>
            </div>
        </div>
        <input type="submit"  value="بروزرسانی" class="btn btn-primary">
        <a href="?c=contacts&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
    </form>
</div>
