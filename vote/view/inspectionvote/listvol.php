<?php
if (!isset($_COOKIE['username'])){
    header('location:../../loginvote.php');
}
$date = date('H:i');
$jalali = gregorian_to_jalali(date('Y'), date('m'), date('d'), '/');
$datetime = $jalali . "    " . $date;
?>
<meta http-equiv="refresh" content="300">

<?php if($inspectvoteStatus['inspectionvotestatus']==1){echo '<span style="color: red;font-size: 25px">شما قبلا در انتخابات بازرسی صندوق شرکت کرده اید</span>';   } ?>
<?php if($inspectvoteStatus['inspectionvotestatus']==1){echo '<!--';   } ?>
<h2 style="color: #ff981a;font-family: B Nazanin">  لیست کاندیدای بازرسی صندوق به ترتیب حروف الفبا</h2>
<marquee direction="right">
<h5 style="color: #1c00cf;font-family: B Nazanin"">همکار گرامی، از بین 4 کاندیدای بازرسی 1 مورد را انتخاب بفرمائید و در انتهای لیست دکمه <span style="color: red">ارسال</span> را بزنید.</h5>
</marquee>
<div class="p-2" id="checkboxgroup">
    <form action="?c=inspectionvote&a=votes" method="post">
    <table id="myTable" class="table table-striped w-150" >
        <thead>
        <tr dir="rtl" align="right">
            <td>شناسه</td>
            <td>تصویر</td>
            <td>نام و نام خانوادگی</td>
            <td>داوطلب عنوان</td>
            <td>عملیات</td>
        </tr>
        </thead>
        <tbody>
        <fieldset >
        <?php
        $id =1 ;
        foreach ($volunteers as $volunteer) :
            ?>

            <div>
            <tr>

                <td><?php echo $id; ?></td>
                <td>
                    <img src="../<?php echo $volunteer['pic'];?>" width="60">
                </td>
                <td><?php echo $volunteer['firstname'].' '.$volunteer['lastname']; ?></td>
                <td><?php echo $volunteer['post']; ?></td>
                <td>
                    <span style="color: red">انتخاب</span>
                    <span style="color: blue">|</span>
                    <input type="checkbox" value="<?php echo $volunteer['id'];?>" name="selected[]">
                </td>
            </tr>
            </div>

            <?php $id++ ;
        endforeach; ?>
        </fieldset>
        </tbody>
    </table>
        <input name="inspectvoteip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" style="visibility:hidden ">
        <input type="text" name="inspectvotetime" value="<?php echo $datetime; ?>"
               style="width: fit-content;margin: 3px;border: none;color: black;font-family: 'B Nazanin';font-size: 20px;visibility:hidden ">
        <input  type="submit" value="ارسال" class="btn btn-info float-right">
    </form>
</div>
<?php if($inspectvoteStatus['inspectionvotestatus']==1){echo '-->';   } ?>

<script>
    function onlyOneCheckBox() {
        var checkboxgroup = document.getElementById('checkboxgroup').getElementsByTagName("input");

        //Note #2 Change max limit here as necessary
        var limit = 1;

        for (var i = 0; i < checkboxgroup.length; i++) {
            checkboxgroup[i].onclick = function() {
                var checkedcount = 0;
                for (var i = 0; i < checkboxgroup.length; i++) {
                    checkedcount += (checkboxgroup[i].checked) ? 1 : 0;
                }
                if (checkedcount > limit) {
                    console.log("You can select maximum of " + limit + " checkbox.");
                    alert("شما فقط  " + limit + "  حق انتخاب دارید.");
                    this.checked = false;
                }
            }
        }
    }
</script>

<script type="text/javascript">
    onlyOneCheckBox()
</script>