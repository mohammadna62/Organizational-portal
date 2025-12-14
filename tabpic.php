<?php
include_once 'ajaxGet.php';

$tabpic=$portal_obj->show();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> :: بنیاد شهید و امورایثارگران</title>
    <link rel="icon" href="images/bonyadlogo/favicon.ico"/>
    <link rel="stylesheet" href="assets/comingsooncss/reset.min.css">
    <link rel="stylesheet" type="text/css" href="assets/comingsooncss/util.css">
    <!--    <link type="text/css" href="assets/comingsooncss/font-awesome.min.css" rel="stylesheet" />-->
    <link type="text/css" href="assets/comingsooncss/style.css" rel="stylesheet"/>

</head>
<body>
<div class="bg-img1 size1 flex-w flex-c-m p-b-55 p-l-15 p-r-15"
     style="background-image: url('images/comingsoonpics/bg01.jpg');">
    <div class="wsize1 bor1 bg1  p-l-15 p-r-15 respon1">
        <!-- start logo -->
        <div class="wrappic1">
            <img src="<?php echo $tabpic['tabpic'] ?>" alt="LOGO" width="1200" style="margin-top: 25px">
        </div>

        <div class="wsize2 flex-w flex-c hsize1 cd100" style="font-family: 'Tahoma'">

        </div>

    </div>
</div>


</body><!-- This template has been downloaded from Webrubik.com -->
</html>
