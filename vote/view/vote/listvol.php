<?php
if (!isset($_COOKIE['username'])){
    header('location:../../loginvote.php');
}
$date = date('H:i');
$jalali = gregorian_to_jalali(date('Y'), date('m'), date('d'), '/');
$datetime = $jalali . "    " . $date;
?>
<meta http-equiv="refresh" content="300">

<?php if($voteStatus['voteStatus']==1){echo '<span style="color: red;font-size: 25px">شما قبلا در انتخابات صندوق شرکت کرده اید</span>';   } ?>
<?php if($voteStatus['voteStatus']==1){echo '<!--';   } ?>
<h8 style="color: #ff981a;font-family: B Nazanin"">لیست کاندیدای هیئت مدیره به ترتیب حروف الفبا</h8>
<marquee direction="right">
<h8 style="color: #1c00cf;font-family: B Nazanin"">همکار گرامی، از بین 12 کاندیدای زیر ، 1 تا  5 نفر را می توانید انتخاب کنید و در انتهای لیست دکمه <span style="color: red">ارسال</span> را بزنید.</h8>
</marquee>
<div class="p-2" id="checkboxgroup">
    <form action="?c=vote&a=votes" method="post">
    <table id="myTable" class="table table-striped w-150" >
        <thead>
        <tr dir="rtl" align="right" style="font-size: small">
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
            <tr style="font-size: smaller">

                <td><?php echo $id; ?></td>
                <td>
                    <img src="../<?php echo $volunteer['pic'];?>" width="45">
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
        <input name="voteip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" style="visibility:hidden ">
        <input type="text" name="votaetime" value="<?php echo $datetime; ?>"
               style="width: fit-content;margin: 3px;border: none;color: black;font-family: 'B Nazanin';font-size: 20px;visibility: hidden">
        <input  type="submit" value="ارسال" class="btn btn-info float-right">
    </form>
</div>
<?php if($voteStatus['voteStatus']==1){echo '-->';   } ?>
<script>
    function onlyOneCheckBox() {
        var checkboxgroup = document.getElementById('checkboxgroup').getElementsByTagName("input");

        //Note #2 Change max limit here as necessary
        var limit = 5;

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