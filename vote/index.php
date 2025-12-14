<?php
require_once 'includes/config.php';
require_once 'method/vote.php';
require_once 'method/sendgeneral.php';
require_once 'method/senddeputy.php';
require_once("lib/jdf.php");
date_default_timezone_set("Asia/Tehran");
if (!isset($_COOKIE['username'])){
    header('location:loginvote.php');
}
$jalali = gregorian_to_jalali(date('Y'),date('m'),date('d') , '/');
$vote_obj= new vote();
$inspectvote_obj= new vote();

if(isset($_GET['m'])){
    $user = $_GET['m'];
}
else{
    $user=$_COOKIE['username'];
    $vote = $vote_obj->login($user);
    $user= $vote['firstname'].' '.$vote['lastname'];
}
if (isset($_COOKIE['username'])){
    $vote= $vote_obj->login($_COOKIE['username']);
    $voteID=$vote['id'];
}
$controller = (!empty($_GET['c'])? $_GET['c'] : 'index') ;
$action = (!empty($_GET['a'])? $_GET['a'] : 'index') ;
if(file_exists( "controller/$controller.php")){
require_once "controller/$controller.php";
}
////$path= "D:\\Downloads";//\\10.2.1.33\share\kakonan    echo exec("EXPLORER /E,$path");
$codemeli=$_COOKIE['username'];;
$voteStatus=$vote_obj->voteStatus($codemeli);
$inspectvoteStatus=$vote_obj->inspectionvotestatus($codemeli);
$sendgeneralstatus=$vote_obj->sendgeneralStatus($codemeli);
$senddeputystatus=$vote_obj->senddeputyStatus($codemeli);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="refresh" content="3600">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>پنل کاربر | پیشخوان </title>
    <link rel="icon" href="../images/bonyadlogo/favicon.ico"/>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/calendar/kamadatepicker.min.css">
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="dist/css/custom-style.css">
<style>
    #election:hover{
        background-color: red;
    }

     body{
         background-image: url('images/sajaya.jpg');
         background-repeat: no-repeat;
         background-size: cover;
         background-color: #eaeae8;
     }

</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" style="height: fit-content">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">پنل کاربری</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
<!--          <div class="image">-->
<!--            <img src="#" class="img-circle elevation-2" alt="User Image">-->
<!--          </div>-->
          <div class="info">
            <a href="#" class="d-block"><?php echo $user;  ?></a>
          </div>
        </div>
          <a class="btn btn-primary" href="?c=vote&a=exit" style="margin-bottom: 5px">خروج</a>
        <!-- Sidebar Menu -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class=" has-treeview menu-open">
                  <a href="index.php?c=vote&a=dashboard" class="nav-link active">
                      <i class="nav-icon fa fa-dashboard" ></i>
                      <p>
                          پیشخوان
                          <i class="right fa fa-angle-left"></i>
                      </p>
                  </a>
              </li>
          </ul>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                      <i class="nav-icon fa fa-dashboard" ></i>
                      <p>
                          ارسال و دریافت  پیام
                          <i class="right fa fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <?php if($sendgeneralstatus['sendgeneralstatus']==0){echo '<!--';   } ?>
<!--                      <li class="nav-item" id='election'>-->
<!--                          <a href="?c=sendgeneral&a=sendgeneral" class="nav-link active">-->
<!--                              <i class="fa fa-circle-o nav-icon" style="color: black"></i>-->
<!--                              <p  style="color: black;">مدیر کل تهران بزرگ</p>-->
<!--                          </a>-->
<!--                      </li>-->
                      <?php if($sendgeneralstatus['sendgeneralstatus']==0){echo '-->';   } ?>
<!--                      <li class="nav-item" id='election'>-->
<!--                          <a href="?c=sendgeneral&a=generalreply" class="nav-link active">-->
<!--                              <i class="fa fa-arrow-circle-left nav-icon" style="color: red"></i>-->
<!--                              <p  style="color: red;">پاسخ مدیرکل</p>-->
<!--                          </a>-->
<!--                      </li>-->
                      <?php if($senddeputystatus['senddeputystatus']==0){echo '<!--';   } ?>
<!--                      <li class="nav-item" id='election'>-->
<!--                          <a href="?c=senddeputy&a=senddeputy" class="nav-link active">-->
<!--                              <i class="fa fa-circle-o nav-icon" style="color: black"></i>-->
<!--                              <p  style="color: black;"> معاون توسعه مدیریت</p>-->
<!--                          </a>-->
<!--                      </li>-->
                      <?php if($senddeputystatus['senddeputystatus']==0){echo '-->';   } ?>
<!--                      <li class="nav-item" id='election'>-->
<!--                          <a href="?c=senddeputy&a=deputyreply" class="nav-link active">-->
<!--                              <i class="fa fa-arrow-circle-left nav-icon" style="color: red"></i>-->
<!--                              <p  style="color: red;">پاسخ معاون توسعه مدیریت</p>-->
<!--                          </a>-->
<!--                      </li>-->
                      <!--
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="fa fa-circle-o nav-icon"></i>
                              <p>انتخابات</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="fa fa-circle-o nav-icon"></i>
                              <p>انتخابات</p>
                          </a>
                      </li>
                      -->
                  </ul>
              </li>
              <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                      <i class="nav-icon fa fa-dashboard" ></i>
                      <p>
                          انتخابات
                          <i class="right fa fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <?php if($voteStatus['voteStatus']==1){echo '<!--';   } ?>
                      <li class="nav-item" id='election'>
                          <a href="?c=vote&a=listvol" class="nav-link active">
                              <i class="fa fa-circle-o nav-icon" style="color: black"></i>
                              <p  style="color: black;">انتخابات صندوق</p>
                          </a>
                      </li>
                      <?php if($voteStatus['voteStatus']==1){echo '-->';   } ?>
                      <?php if($inspectvoteStatus['inspectionvotestatus']==1){echo '<!--';   } ?>
                      <li class="nav-item" id='election'>
                          <a href="?c=inspectionvote&a=listvol" class="nav-link active">
                              <i class="fa fa-circle-o nav-icon" style="color: black"></i>
                              <p  style="color: black;">انتخابات بازرسی</p>
                          </a>
                      </li>
                      <?php if($inspectvoteStatus['inspectionvotestatus']==1){echo '-->';   } ?>
                      <!--
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="fa fa-circle-o nav-icon"></i>
                              <p>انتخابات</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="fa fa-circle-o nav-icon"></i>
                              <p>انتخابات</p>
                          </a>
                      </li>
                      -->
                  </ul>
              </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pie-chart"></i>
                <p>
                  در حال بروز رسانی
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>در حال بروز رسانی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>در حال بروز رسانی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>در حال بروز رسانی</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>

        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>
    <div class="" style="width: fit-content;height: fit-content" >

        <?php
        require_once "view/$controller/$action.php";
        ?>
    </div>

</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="../assets/calendar/kamadatepicker.min.js"></script>

<script>
    let option = {
        placeholder : "تاریخ",
        twodigit : true ,// اگر فالس باشد اعداد تک رقمی نمایش داده می شود
        closeAfterSelect : true , //اگر فالس باشد بعد از انتخاب تاریخ صفحه بسته نمی شود
        // nextButtonIcon : import("assets/calendar/timeir_next.png") ,
        // previousButtonIcon : import("assets/calendar/timeir_prev.png") ,
        buttonsColor : "red" ,
        forceFarsiDigits : true ,
        markToday : true ,
        markHolidays : true ,
        highlightSelectedDay : true ,
        gotoToday: true,

    }
    kamaDatepicker('datetime',option);
</script>
<!--<script>-->
<!---->
<!--    // function ShowMessage(){-->
<!--    //     alert("پیام با موفقیت ارسال شد");-->
<!--    // }-->
<!---->
<!--    function checkFormValidation(sendgeneral,title,text) {-->
<!--        var input1 = document.forms[sendgeneral][title].value;-->
<!--        var input2 = document.forms[sendgeneral][text].value;-->
<!---->
<!---->
<!--        if (input1 === null || input1 === "") {-->
<!--            alert("فیلد موضوع را پر کنید!");-->
<!--            return false;-->
<!--        }-->
<!--        if (input2 === null || input2 === "") {-->
<!--            alert("متن نامه نباید خالی باشد!");-->
<!--            return false;-->
<!--        }-->
<!---->
<!--        alert("اطلاعات ارسال شد");-->
<!--        return true;-->
<!--    }-->
<!--</script>-->
</body>
</html>
