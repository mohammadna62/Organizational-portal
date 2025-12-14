<?php
if (!isset($_COOKIE['username'])){
    header('location:../../loginvote.php');
}
$date=date('H:i');
$jalali = gregorian_to_jalali(date('Y'),date('m'),date('d') , '/');

?>

<meta http-equiv="refresh" content="180">

<!--<div style="background-color: #eaeae8;">-->
<!--            <fieldset-->
<!--                    style="border: solid;border-color:#39ACF7;border-radius: 5px;height:80%;padding: 2px">-->
<!--                --><?php //if($voteStatus['voteStatus']==1){echo '<span style="color: red">رای شما ثبت  گردیده است</span>';   } ?>
<!--            </fieldset>-->
<!--</div>-->



<!-- موقتا غیر فعال
<footer>

    <fieldset    style="display:inline-block;
                        margin-inline-start: 2px;
                        margin-inline-end: 20px;
                        padding-block-start: 0.35em;
                        padding-inline-start: 0.75em;
                        padding-inline-end: 0.75em;
                        padding-block-end: 0.625em;
                        border-width: 2px;
                        border-radius:5px; color:black;direction: rtl;text-align: right;width: fit-content" dir="rtl" align="right">
        <legend>مشخصات سیستم  :</legend>
        <span>آی پی شبکه :</span><span> <?php $ip = $_SERVER['REMOTE_ADDR'];  echo $ip; ?></span><br>
        <span>مرورگر :</span><span> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></span><br>
        <span>آی پی سرور  :</span><span> <?php echo $_SERVER['SERVER_NAME']; ?></span><br>
        <span>نام کامپیوتر :</span><span> <?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?></span><br>

    </fieldset>
</footer>
-->