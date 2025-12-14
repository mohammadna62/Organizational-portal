<?php
//if (!isset($_COOKIE['email'])) {
//    header('location:../../login.php');
//}
//?>
<h2 style="color: #ff981a"> پاسخ دفتر مدیرکل بدین شرح است :</h2>
<div class="p-2">
    <div class='row'>
        <div class="col-md-6">
            <div class="row">تاریخ ارسال</div>
            <div class="row">متن پیام</div>
        </div>
        <div class="col-md-6">
            <div class="row"> <?php echo $showreply['datetime'];?></div>
            <div class="row"> <?php echo $showreply['text']; ?></div>

    </div>
</div>
