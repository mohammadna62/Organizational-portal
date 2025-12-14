<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
$date=date('H:i');
$jalali = gregorian_to_jalali(date('Y'),date('m'),date('d') , '/').'-'.$date;
?>
<h2 style="color: #ff981a">اضافه کردن کالا</h2>
<div class="p-2" dir="rtl" align="right" >
    <h3>ورود کالای جدید به انبار</h3>

    <form action="?c=inventory&a=create&m=<?php echo $manager; ?>" method="POST" class="w-100" >
        <div class="form-group" align="right" style="background-image: url('pic/kala.jpg');background-size:contain;background-repeat: no-repeat;padding: 5px;border-color: #1d2124; border-style: groove; border-radius: 15px;background-color: #DEF6F6;color:black" >
            <label for="goodsname">نام کالا :</label><br>
            <input type="text" id="exampleFormControlInput1" name="goodsname"   autofocus ><br>
            <label for="goodstype">برند یا نوع کالا :</label><br>
            <input type="text" id="exampleFormControlInput1" name="goodstype" ><br>
            <label for="exampleFormControlInput1">تعداد :</label><br>
            <input type="text" name="number" id="exampleFormControlInput1" ><br>
            <label for="exampleFormControlInput1">تاریخ ورود به انبار :</label><br>
            <input type="text" name="datetime" id="datetime" value="<?php   echo $jalali;  ?>" style="font-family: 'B Nazanin'">
        </div>
        <input type="submit" value="ایجاد !" class="btn btn-primary">
        <a href="?c=inventory&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
    </form>
</div>

<script>

</script>


