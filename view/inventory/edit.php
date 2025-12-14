<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>
<h2 style="color: #ff981a">ویرایش اطلاعات کالای موجود</h2>
<div class="p-2"style="padding: 5px;border-color: #1d2124; border-style: groove; border-radius: 15px;background-color: #DEF6F6" >

    <form action="?c=inventory&a=update" method="post"enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label for="goodsname">نام کالا :</label><br>
                    <input type="text" class="form-control" name="goodsname"  value="<?php echo $inventory['goodsname'];?>">
                </div>
                <div class="form-group">
                    <label for="goodstype">نوع کالا :</label>
                    <input type="text" class="form-control" name="goodstype"  value="<?php echo  $inventory['goodstype'];?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">تعداد :</label>
                    <input type="text" class="form-control"name="number" id="exampleFormControlInput1"  value="<?php echo  $inventory['number'];?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">تاریخ ورود به انبار :</label>
                    <input type="text" name="datetime" id="datetime"  value="<?php echo  $inventory['datetime'];?>" style="font-family: 'B Nazanin'">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" readonly value="<?php echo $_GET['id'];?>">
                </div>

            </div>

        </div>
        <input type="submit"  value="بروز رسانی" class="btn btn-primary">
    </form>
</div>
