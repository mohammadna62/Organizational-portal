<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<h2 style="color: #ff981a">نمایش اطلاعات کالا</h2>
<div class="p-2" style="border-color: #1d2124;border-radius: 7px;border-style: groove">
    <div class='row' style="margin-right: 5px">
        <div class="col-md-6" >
            <div class="row"> نام کالا </div>
            <div class="row">برند یا نوع کالا</div>
            <div class="row"> تعداد موجود در انبار</div>
            <div class="row">تاریخ ورود به انبار</div>
            <div class="row"> کد مدیرایجاد کننده</div>


        </div>
        <div class="col-md-6">
            <div class="row"> <?php echo $inventory['goodsname'] ?></div>
            <div class="row"> <?php echo $inventory['goodstype'] ?></div>
            <div class="row"> <?php echo $inventory['number'] ?></div>
            <div class="row"> <?php echo $inventory['datetime'] ?></div>
            <div class="row"> <?php echo $inventory['creator'] ?></div>



        </div>
    </div>
    <a href="?c=inventory&a=list&m=<?php echo $manager; ?>" class="btn btn-primary">بازگشت به لیست</a>
</div>

