<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$date=date('H:i');
$jalali = gregorian_to_jalali(date('Y'),date('m'),date('d') , '/').'-'.$date;
?>

<h2 style="color: #ff981a">اضافه کردن سخت افزار</h2>
<div class="p-2" dir="rtl" align="right" >
    <h3>ایجاد : </h3>

    <form action="?c=hardware&a=create&m=<?php echo $manager; ?>" method="POST" class="w-100" >
        <div class="form-group" align="right" style="background-image: url('pic/user.jpg');background-size: contain;background-repeat: no-repeat;padding: 5px;border-color: #1d2124; border-style: groove; border-radius: 15px;background-color: #DEF6F6" >
            <label for="firstname">نام :</label><br>
            <input type="text" id="exampleFormControlInput1" name="firstname" placeholder="محمد" style="width: fit-content" autofocus ><br>

            <label for="lasttname">نام خانوادگی :</label><br>
            <input type="text" id="exampleFormControlInput1" name="lastname" placeholder="نقوی" style="width: fit-content"><br>
            <label for="exampleFormControlInput1">موبایل :</label><br>
            <input type="text" name="mobile" id="exampleFormControlInput1" placeholder="09xxxxxxxxx" style="width: fit-content"><br>
            <label for="exampleFormControlInput1">کد ملی :</label><br>
            <input type="text" name="codemeli" id="exampleFormControlInput1"><br>
            <label for="exampleFormControlInput1">کد پرسنلی :</label><br>
            <input type="text" name="codepersoneli" id="exampleFormControlInput1" style="margin-bottom: 5px" ><br>
        </div>
        <div class="form-group" align="right" style="background-image: url('pic/goods.png');background-size:contain ;background-repeat: no-repeat ;padding: 5px;border-color: #1d2124; border-style: groove; border-radius: 15px;background-color:  #DEF6E2;color: #1d2124">
            <label for="exampleFormControlInput1">طبقه :</label>
        <select name="floor" onchange="ChangeCarList()">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
            <label for="exampleFormControlInput1">نود شبکه :</label><br>
            <input type="text" name="node" id="exampleFormControlInput1" ><br>
            <label for="exampleFormControlInput1">شماره اتاق :</label><br>
            <input type="text" name="room" id="exampleFormControlInput1" ><br>
            <label for="exampleFormControlInput1">نام کاربری ویندوز :</label><br>
            <input type="text" name="username" id="exampleFormControlInput1" placeholder=""><br>
            <label for="exampleFormControlInput1">رمز عبور ویندوز :</label><br>
            <input type="text" name="password" id="exampleFormControlInput1" placeholder=""><br>
            <label for="exampleFormControlInput1">ای پی :</label><br>
            <input type="text" name="ip" id="exampleFormControlInput1" placeholder="10.02.00.00"><br>
            <label for="exampleFormControlInput1" style="padding-left: 300px">نام کامپیوتر :</label>
            <label for="exampleFormControlInput1">نسخه مرورگر کروم :</label><br>
            <input type="text" name="computer_name" id="exampleFormControlInput1" style="margin-left: 180px">
            <input type="text" name="chrome_ver" id="exampleFormControlInput1" ><br>
            <label for="exampleFormControlInput1" style="padding-left: 320px"> مادربورد :</label>
            <label for="exampleFormControlInput1"> پردازشگر:</label><br>
            <input type="text" name="motherbord_detail" id="exampleFormControlInput1" style="margin-left: 180px">
            <input type="text" name="cpu_detail" id="exampleFormControlInput1" ><br>

            <label for="exampleFormControlInput1" style="padding-left: 290px"> حافظه موقت :</label>
            <label for="exampleFormControlInput1"> حافظه دائم :</label><br>
            <input type="text" name="ram_detail" id="exampleFormControlInput1" style="margin-left: 180px" >
            <input type="text" name="hdd_detail" id="exampleFormControlInput1" ><br>


            <label for="exampleFormControlInput1"> سیستم عامل :</label><br>
            <select name="os_detail" onchange="ChangeCarList()">
                <option value="none">none</option>
                <option value="Win 7">Win 7</option>
                <option value="Win 10">Win 10</option>
                <option value="Win Ser 2012">Win Ser 2012</option>
                <option value="Win 11">Win 11</option>
            </select><br>
            <label for="exampleFormControlInput1">مدل نمایشگر :</label><br>
            <input type="text" name="monitor_name" id="exampleFormControlInput1" ><br><br>
            <textarea name="description" placeholder="توضیحات" style="width: 500px"></textarea><br>
            <label for="exampleFormControlInput1">وضعیت :</label>
            <select name="status" onchange="ChangeCarList()">
                <option value="فعال"> فعال</option>
                <option value="غیر فعال">غیر فعال</option>
            </select><br>
            <label for="exampleFormControlInput1">تاریخ ایجاد :</label>
            <input type="text" name="created_at" id="datetime2" value="<?php   echo $jalali;  ?>" style="font-family: 'B Nazanin'">
        </div>
            <div class="form-group" align="right" style="padding: 5px;border-color: #1d2124; border-style: groove; border-radius: 15px;background-color: #F6F4AF"><br>
            <label for="exampleFormControlInput1"> شماره اموال کیس :</label>
            <input type="text" name="case_amval" id="exampleFormControlInput1">
            <label for="exampleFormControlInput1">شماره اموال نمایشگر :</label>
            <input type="text" name="monitor_amval" id="exampleFormControlInput1" >
        </div>
        <input type="submit" value="ایجاد !" class="btn btn-primary">
        <a href="?c=hardware&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
    </form>
</div>


