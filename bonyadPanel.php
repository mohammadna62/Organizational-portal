<?php
//header("location:comingsoon.php");die();
include_once 'ajax.php';
include_once 'ajaxGet.php';
include_once 'method/bonyadPanel.php';
include_once 'method/contacts.php';
require_once("lib/jdf.php");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
$websiteStatus=$portal_obj->show();
$tabpic=$portal_obj->show();
$new_tab_url = "tabpic.php";

$message = "در حال انتقال به صفحه جدید...";
//if ($tabpic['tabpicstatus']==1){
//    echo <<<HTML
//<script>
//    window.open("$redirect_url", "_blank"); // باز کردن در تب جدید
//    // window.close(); // اگر می‌خواهید تب فعلی بسته شود (معمولاً مرورگرها اجازه نمی‌دهند)
//</script>
//HTML;
//}
if ($websiteStatus['websiteStatus']=='غیرفعال'){
    header("location:comingsoon.php");die();
}
date_default_timezone_set("Asia/Tehran");
$contats_obj = new contacts();
$spip = $portal_obj->show();
$data = $portal_obj->set();
$voteStatus = $portal_obj->voteStatus();
if (!empty($data['refreshclient'])) {
    $second = $data['refreshclient'];
} else {
    $second = 900;
}

$date = date('H:i');
$jalali = gregorian_to_jalali(date('Y'), date('m'), date('d'), '/');
$datetime = $jalali . "    " . $date;
$year = substr($jalali, 4);
$persones = $contats_obj->birthday($year);
$bonyadPanel_obj = new bonyadPanel();
$bonyadPanel_obj->create($datetime);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="<?php echo $second; ?>">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->
    <title>بنیاد شهید و امور ایثارگران تهران بزرگ | لینک داخل سازمان </title>
    <link rel="icon" href="images/bonyadlogo/favicon.ico"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="assets/calendar/kamadatepicker.min.css">
    <link rel="stylesheet" href="assets/cssPortal/reset.css" media="screen">
    <link rel="stylesheet" href="assets/cssPortal/colorbox.css" media="screen">
    <link rel="stylesheet" href="assets/cssPortal/nobTip.css" media="screen">
    <link rel="stylesheet" href="assets/cssPortal/style.css" media="screen">
    <link rel="stylesheet" href="assets/cssPortal/responsive.css" media="screen">
    </script>
    <script>
        let lastMessage = localStorage.getItem('shownMessage') || "";

        function checkForNewMessage() {
            const url = 'message.txt?nocache=' + new Date().getTime();

            fetch(url)
                .then(response => {
                    if (!response.ok) throw new Error("خطا در دریافت فایل");
                    return response.text();
                })
                .then(message => {
                    message = message.trim();
                    if (message && message !== lastMessage) {
                        alert("📢" + message);
                        lastMessage = message;
                        localStorage.setItem('shownMessage', message);
                    }
                })
                .catch(error => {
                    console.error("❌ خطا:", error);
                });
        }

        window.onload = function() {
            checkForNewMessage();
            setInterval(checkForNewMessage, 5000);
        };
    </script>
<!--    <script>-->
<!--        $.ajax({-->
<!--            url: 'ajaxGet.php',-->
<!--            type: 'GET',-->
<!--            dataType: 'json',-->
<!--            success: function (data) {-->
<!--                alert(data);-->
<!--            }-->
<!--        })-->
<!--    </script>-->
</head>
<body>
<?php if ($tabpic['tabpicstatus']==1): ?>
    <div class="loader"></div>
    <p class="message"><?php echo htmlspecialchars($message); ?></p>
    <script>
        // باز کردن تب جدید با شرط
        try {
            const newTab = window.open("<?php echo $new_tab_url; ?>", "_blank");

            if (!newTab) {
                alert("پاپ‌آپ مسدود شده است! در همین تب انتقال داده می‌شوید.");
                window.location.href = "<?php echo $new_tab_url; ?>";
            }
        } catch (e) {
            console.error("خطا در باز کردن تب جدید:", e);
            window.location.href = "<?php echo $new_tab_url; ?>";
        }
    </script>
<?php else: ?>
    <!-- محتوای جایگزین وقتی شرط false است -->
<?php endif; ?>
<div class="big_container">

    <!-- start HEADER -->
    <div id="header">
        <div class="container_940">
            <div class="grid_300">
                <div id="logo">
                    <a href="#id_home" title=""><h1 style="font-size: large; color: red">پرتال سازمانی</h1></a>
                   <!-- <h2 style="color: black">لینک های سازمانی</h2> -->
                    <div style="margin-top: 3px">
                        <span dir="rtl">برای مشاهده تقویم کلیک کنید</span>
                        <input type="text" name="input_name" id="datetime" value="<?php echo $jalali; ?>"
                               style="width: 80px;margin: 3px;border: none;color: #F1781A;font-family: 'B Titr';cursor: pointer"/>
                    </div>
                </div>
            </div>
            <div class="grid_640">
                <!-- start main menu -->
                <div id="main_menu" class="left">
                    <ul id="ul_menu" class="left">
                        <?php if ($voteStatus['voteStatus'] == 'غیرفعال') {
                            echo "<!--";
                        } ?>
                        <li><a class="icon_blog" href="vote/loginvote.php" target="_blank" title=""><span
                                        style="color: black"> کارتابل شخصی</span></a>
                        </li><?php if ($voteStatus['voteStatus'] == 'غیرفعال') {
                            echo "-->";
                        } ?>
<!--                        <li><a class="icon_resume" href="https://login.isaar.ir/login" target="_blank" title=""><span-->
<!--                                        style="color: black">ایثار من</span></a></li>-->
                        <li><a class="icon_resume" href="https://tehran.fylad.isaar.ir/#/list" target="_blank" title=""><span
                                        style="color: black">سامانه فایلاد</span></a></li>
                        <li><a class="icon_resume" href="saerp://open" target="_blank" title=""><span
                                        style="color: black">سامانه سجایا</span></a></li>
                        <li class=""><a class="icon_resume active hide"
                                        href="https://pargar.isaar.ir/fonix/Mailbox/#/incomemessage" target="_blank"
                                        title=""><span>اتوماسیون اداری (پرگار)</span></a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <!-- ends main menu -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- ends HEADER -->

    <!-- start header bottom -->


    <div class="border_header">&nbsp;</div>
    <div class="border_header_mb" style="float: right">&nbsp;
    </div>
    <!-- ends header bottom-->
    <div id="main_content">

<!--        --><?php
//        if ($persones) {
//            echo '<div  align="center" style="border: solid 3px black;border-radius: 3px;padding: 2px;">';
//            foreach ($persones as $persone) {
//                if ($persone['contStatus'] == 'فعال') {
//                    echo '<span>' . 'همکار گرامی :' . '<span style="color: #ff502e;font-size: larger">' . $persone['firstname'] . ' ' . $persone['lastname'] . '</span>' . ' با آرزوی بهترین ها در سالروز تولد شما' . '</span>' . '<br>';
//                }
//            }
//            echo '</div>';
//        }
//        ?>
      <marquee direction="right"><span style="color: #ff502e;font-size: larger;">
              همکار گرامی جهت اجرای سیستم سجایا از داخل پرتال، فقط یکبار فایل مروبطه را از لینک زیر
              دانلود نموده و در رایانه خود اجرا نمائید.سپس بروی سامانه سجایا در بالا کلیک کنید  </span></marquee>


            <a href="alluploads/runregandbatlastver2.bat" download="alluploads/runregandbatlastver2.bat" class="a_download_resume" style="width:max-content;color: white;float: right;background-color: #2abb66;border-radius: 8px;margin-top: 15px;margin-right: 15px;">نصب فایل سجایا</a>

        <?php if ($ip == $spip['spip']) {
        } else {
            echo "<!--";
        } ?>
        <ul class="ul_download_resume" style="float: right ; margin-bottom: 5px;back">
            <label style="color:red;margin-right: 5px;margin-left: 5px">پیام اختصاصی
                :<?php echo $data['spmessage']; ?> </label>
            <li style="visibility: <?php if (strlen($data['spfile']) > 0) {
                echo 'unset';
            } else {
                echo 'hidden';
            } ?>">
                <a class="" href="<?php echo $data['spfile']; ?>" download="<?php echo $data['spfile']; ?>"><img
                            src="images/downloadsign.png" style="width: 25px;"></a>
            </li>

        </ul>
        <?php if ($ip == $spip['spip']) {
        } else {
            echo "-->";
        } ?>
        <!-- start HOME -->
        <div id="id_home">
            <div class="border_full bg_home">&nbsp;</div>
            <div class="container_940 widget">
                <div class="grid_940 home_info_mb">
                    <div class="div_210">
                        <div id="photo_slider_div">

                            <div id="photo_slider_bg">
                                <ul id="photo_slider">
                                    li>
                                    <img src="images/home/1.png" alt=""/>
                                    </li>
                                    <li>
                                        <img src="images/home/2.jpg" alt=""/>
                                    </li>
                         
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="div_client">

                        <div class="div_1_2_last" style="height:250px">
                            <div class="div_client_padding">
                                <div class="icon_resume_4 resume_line right"></div>
                                <fieldset dir="rtl"
                                          style="border: groove;border-color:#39ACF7;border-radius: 5px;height:80%;padding: 8px;color: #ff460e;font-family: 'B Nazanin';font-size:20px;">
                                    <legend style="color: black">پیام روز :</legend>
                                    <br>
                                    <?php echo $data['text'] ?></fieldset>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="grid_940">
                    <div class="one_third">
                        <ul class="ul_info">
                            <li>
                                <div class="label" dir="rtl" align="right" style="width: fit-content"><a
                                            href="http://mali.isaar.ir/" target="_blank">مالی و بودجه و اعتبارات</a>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="label" dir="rtl" align="right"><a
                                            href="http://asnad.isaar.ir/ui/forms/index.aspx" target="_blank"
                                            style="color: #0000EE">اسناد افتخار</a></div>
                                <div class="span"><a href="http://asnad.isaar.ir/ui/forms/index.aspx" target="_blank"
                                                     style="color: #0000EE">asnad.isaar.ir</a></div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="label" dir="rtl" align="right"><a
                                            href="https://jam.isaar.ir/" target="_blank"
                                            style="color: red">سامانه ویانا</a></div>
                                <div class="span"><a
                                            href="https://jam.isaar.ir/" target="_blank"
                                            style="color: red">سامانه آموزش(جام)</a></div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="one_third">
                        <ul class="ul_info">
                            <li>
                                <div class="label" style="width: fit-content" dir="rtl" align="right"><a
                                            href="https://192.168.200.29/Login.aspx" target="_blank">ارزیابی عملکرد
                                        کارکنان</a></div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="label" dir="rtl" align="right"><a
                                            href="http://chargoon.isaar.ir/UserLogin.aspx" target="_blank">چارگون</a>
                                </div>
                                <div class="span"><a href="http://chargoon.isaar.ir/UserLogin.aspx" target="_blank">chargoon.isaar.ir</a>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="label" dir="rtl" align="right" style="width: fit-content"><a
                                            class="icon_blog" href="http://192.168.200.47/Lego.Web" target="_blank" title="">سامانه حضور و غیاب کسری</a></div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="one_third_last">
                        <ul class="ul_info">
                            <li>
                                <div class="label" dir="rtl" align="right">
                                    <a href="https://login.isaar.ir/login" target="_blank" style="color: #0000EE">   فیش حقوقی</a>
                                </div>
                                <div class="span"><a href="https://www.isaar.ir/fa/tehran" target="_blank"
                                                     style="color: #0000EE"></a></div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="label" dir="rtl" align="right" style="width: fit-content"><a target="_blank"
                                                                                                         href="http://192.168.200.48/#/login">سیستم
                                        جامع حقوق و دستمزد</a></div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="label" dir="rtl" align="right" style="width: fit-content"><a
                                            href="http://mali.isaar.ir/system/mainpage.php?width=1366&height=768"
                                            target="_blank">سامانه اموال کارکنان</a></div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="home_info_footer_mb"></div>
            </div>
        </div>
        <!-- ends HOME -->

        <!-- start Multimedia -->
        <?php if (strlen($data['video']) > 0 || strlen($data['pic']) > 0) {
        } else {
            echo "<!--";
        } ?>
        <div id="id_resume">
            <div id="id_resume" dir="rtl" align="right"
                 style="border: groove;border-color:#39ACF7;border-radius: 5px;width:40%;height:50%;padding: 2px;float: right;margin-right: 15px;visibility: <?php if (strlen($data['video']) > 0) {
                     echo 'unset';
                 } else {
                     echo 'hidden';
                 } ?>">

                <div class="border_full bg_resume">&nbsp;
                    <div><?php echo $data['title_video']; ?></div>
                    <i class="icon_blog_video_post"></i>
                    <video src="<?php echo $data['video'] ?>" controls="controls"
                           style="max-width: 80%;float:left;border-radius: 8px;margin-left: 5px;margin-bottom: 5px"></video>
                    <div id="id_resume"></div>
                </div>
            </div>
            <div id="id_resume" dir="rtl" align="right"
                 style="border: groove;border-color:#39ACF7;border-radius: 5px;max-width:40%;height:50%;padding: 2px;margin-left: 15px; visibility: <?php if (strlen($data['pic']) > 0) {
                     echo 'unset';
                 } else {
                     echo 'hidden';
                 } ?>">

                <div class="border_full bg_resume">&nbsp;
                    <div><?php echo $data['title_pic']; ?></div>
                    <i class="icon_blog_image_post"></i>
                    <a href="<?php echo $data['pic']; ?>" target="_blank"><img src="<?php echo $data['pic']; ?>" alt=""
                                                                               style="max-width: 80%;float:left;border-radius: 8px;margin-left: 5px;margin-bottom: 5px"></a>

                </div>
            </div>
            <br>
        </div>
        <?php if (strlen($data['video']) > 0 || strlen($data['pic']) > 0) {
        } else {
            echo "-->";
        } ?>
        <!-- ends Multimedia -->
        <ul class="ul_download_resume" style="float: right ; margin-bottom: 5px">
            <li style="visibility: <?php if (strlen($data['file']) > 0) {
                echo 'unset';
            } else {
                echo 'hidden';
            } ?>">
                <a class="a_download_resume_icon" href="<?php echo $data['file']; ?>"
                   download="<?php echo $data['file']; ?>"></a>
            </li>
            <li>
                <a class="a_download_resume" style="width: fit-content;color: red"><span style="color: white">دانلود فایل  :</span><?php echo $data['title_file']; ?>
                </a>
            </li>
        </ul>
        <div class="grid_940">
            <div class="one_third">
                <ul class="ul_info">
                    <li>
                        <div class="label" dir="rtl" align="right" style="width: fit-content"><a
                                    href="http://mali.isaar.ir/system/mainpage.php?width=1366&height=768"
                                    target="_blank">سامانه اموال کارکنان</a></div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="label" dir="rtl" align="right"><a href="http://asnad.isaar.ir/ui/forms/index.aspx"
                                                                      target="_blank" style="color: #0000EE">اسناد
                                ایثار</a></div>
                        <div class="span"><a href="http://asnad.isaar.ir/ui/forms/index.aspx" target="_blank"
                                             style="color: #0000EE">asnad.isaar.ir</a></div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="label" dir="rtl" align="right" style="color: darkblue">تلفن</div>
                        <div class="span" style="color: darkblue">021-88302992-3</div>
                        <div class="clear"></div>
                    </li>

                </ul>
            </div>
            <div class="one_third">
                <ul class="ul_info">
                    <li>
                        <div class="label" style="width: fit-content" dir="rtl" align="right"><a
                                    href="http://hrm.isaar.ir/" target="_blank">سامانه ثبت اطلاعات پرسنلی</a></div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="label" dir="rtl" align="right"><a href="http://chargoon.isaar.ir/UserLogin.aspx"
                                                                      target="_blank">چارگون</a></div>
                        <div class="span"><a href="http://chargoon.isaar.ir/UserLogin.aspx" target="_blank">chargoon.isaar.ir</a>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="label" dir="rtl" align="right" style="color: darkblue">فکس</div>
                        <div class="span" style="color: darkblue"></div>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
            <div class="one_third_last">
                <ul class="ul_info">
                    <li>
                        <div class="label" dir="rtl" align="right"><a href="https://www.isaar.ir/fa/tehran"
                                                                      target="_blank"> ایثار تهران</a></div>
                        <div class="span"><a href="https://www.isaar.ir/fa/tehran" target="_blank">www.isaar.ir/fa/tehran</a>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="label" dir="rtl" align="right">ایمیل</div>
                        <div class="span"></div>
                        <div class="clear"></div>
                    </li>
                    <li>
                        <div class="label" dir="rtl" align="right">آدرس</div>
                        <div class="span">تهران، میدان هفت تیر ،روبروی مسجد الجواد</div>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- start pdf map -->
        <div class="container_940">
            <div class="grid_940">
                <iframe class="google_map_iframe" src="images/tehranmap.pdf"></iframe>
            </div>
            <div class="clear"></div>
        </div>
        <!-- end pdf map -->

        <!-- start survey -->
        <div class="h3_heading_l"style="background-color:lightgrey">
            <div class="icon_resume_3 right"></div>
            <div class="h3_desc_container right" >
                <div class="h3_desc_div" >
                    <div class="h3_desc">توضیح :</div>
                    <div class="h3_title cf_resume" style="color:palevioletred" >ارتباط با ادمین سایت</div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="div_client">
            <div class="div_1_2_last" style="height:fit-content">
                <div class="div_client_padding">
                    <fieldset dir="rtl"
                              style="border: groove;border-color:#39ACF7;border-radius: 5px;height:80%;padding: 2px">
                        <legend>شرایط ارسال :</legend>
                        <br>
                        <form class="form_survey" method="post" name="survey"
                              onsubmit="return checkFormValidation('survey', 'familyname', 'codemeli', 'codepersoneli');"
                              enctype="multipart/form-data" action="controller/survey2.php?a=create">
                            <div class="div_240">
                                <label> نام و نام خانوادگی :<span style="color: red;font-size: 25px;">*</span></label>
                                <div>
                                    <input class="full" id="familyname" type="text" name="familyname"
                                           style="width: fit-content"/>
                                    <div class="clear"></div>
                                </div>
                                <label>کد ملی :<span style="color: red;font-size: 25px;">*</span></label>
                                <div>
                                    <input class="full" type="text" name="codemeli" style="width: fit-content"/>
                                    <div class="clear"></div>
                                </div>
                                <label>کد پرسنلی :<span style="color: red;font-size: 25px;">*</span></label>
                                <div>
                                    <input class="full" type="text" name="codepersoneli" style="width: fit-content"/>
                                    <div class="clear"></div>
                                </div>
                                                                       
                            </div>
                            <div class="div_370">
                                <label>توضیحات :</label>
                                <div>
                                    <textarea name="description" class="full">لطفا شماره تلفن اداره و داخلی خود ،همچنین شرح مختصری از درخواست را درج نمائید </textarea><br>
                                    <span style="color: red;font-size: 15px;margin: 5px">فقط امکان ارسال تصویر موجود می باشد</span>
                                    <input class="full" type="file" name="pic" style="width: fit-content"/>
                                </div>
                            </div>

                            <div class="clear"></div>
                            <div class="div_240">
                                <span style="color: red;font-size: 15px;">* موارد ستاره دار حتما باید تکمیل گردد.</span>
                                <div>
                                    <div class="div_captcha right"></div>
                                    <input name="ip" value="<?php echo $ip; ?>" style="visibility: hidden">
                                    <input type="text" name="datetime" value="<?php echo $datetime; ?>"
                                           style="width: fit-content;margin: 3px;border: none;color: black;font-family: 'B Nazanin';font-size: 20px;visibility: hidden">
                                    <input type="text" name="datetime" value="<?php echo $datetime; ?>" disabled
                                           style="width: fit-content;margin: 3px;border: none;color: black;font-family: 'B Nazanin';font-size: 20px;">
                                    <input name="devicename" value="<?php echo $devicename; ?>"
                                           style="visibility: hidden">
                                    <div class="right"><input class="left btn_submit" type="submit" value="ارسال نظر"
                                                              style="margin-bottom: 5px;margin-right: 5px;"/></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </form>
                    </fieldset>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- ends survey -->
    <!-- start FOOTER -->
    <div id="footer">

        <div class="container_940">
            <div class="border_footer">&nbsp;</div>
            <div class="h3_heading_l">
                <div class="icon_contact_1 right"></div>
                <div class="h3_desc_container right">
                    <div class="h3_desc_div">
                        <div class="h3_desc">کد پستی </div>
                        <div class="h3_title cf_contact"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="h3_heading_l">
                <div class="icon_contact_2 right"></div>
                <div class="h3_desc_container right">
                    <div class="h3_desc_div">
                        <div class="h3_desc" style="">شماره تماس های اداره کل :</div>
                        <div class="h3_title cf_contact">
                            <a   href="alluploads/uploaddiff/tel.xls"
                               download="tel.xls" style="size">دریافت فایل اکسل شماره تلفن ها</a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="h3_heading_l">
                <div class="icon_contact_2 right"></div>
                <div class="h3_desc_container right">
                    <div class="h3_desc_div">
                        <div class="h3_desc">پشتیبانی تلفنی:</div>
                        <div class="h3_title cf_contact"> اداره کل تهران  داخلی 1410 - منطقه 10و11 داخلی 3046</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="h3_heading_l">
                <div class="icon_contact_2 right"></div>
                <div class="h3_desc_container right">
                    <div class="h3_desc_div">
                        <div class="h3_title cf_contact"><span>آی پی :</span><?php echo $ip; ?></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="h3_heading_l">
                <div class="icon_contact_2 right"></div>
                <div class="h3_desc_container right">
                    <div class="h3_desc_div">
                        <div class="h3_desc">اطلاعات رایانه شما</div>
                        <a href="alluploads/Systemdetails.bat" download="alluploads/Systemdetails.bat"  >برای مشاهده مشخصات رایانه خود کلیک کنید</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- ends FOOTER -->
</div>
<script src="assets/jsPortal/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="assets/jsPortal/modernizr.js" type="text/javascript"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
<script src="assets/jsPortal/ie9.js" type="text/javascript"></script>
<script src="assets/jsPortal/respond.min.js" type="text/javascript"></script>
<![endif]-->
<!--<script src="js/jquery.hashchange.min.js" type="text/javascript"></script>-->
<script src="assets/jsPortal/jquery.easing.2.1.js" type="text/javascript"></script>
<script src="assets/jsPortal/jquery.easytabs.min.js" type="text/javascript"></script>
<script src="assets/jsPortal/jquery.masonry.min.js" type="text/javascript"></script>
<script src="assets/jsPortal/jquery.timelinr-0.9.53.js"></script>
<script src="assets/jsPortal/jquery.colorbox-min.js" type="text/javascript"></script>
<script src="assets/jsPortal/jquery.nobTip.js" type="text/javascript"></script>
<script src="assets/jsPortal/jquery.cycle.js" type="text/javascript"></script>
<script src="assets/jsPortal/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/jsPortal/custom.js" type="text/javascript"></script>
<script>
    function checkFormValidation(survey, familyname, codemeli, codepersoneli) {
        var input1 = document.forms[survey][familyname].value;
        var input2 = document.forms[survey][codemeli].value;
        var input3 = document.forms[survey][codepersoneli].value;
        //   var pattern = /^([آ-ی])+$/u;  // for English language var pattern = /^([A-Za-z])+$/u;
        var pattern = /^[\u0600-\u06FF\s]+$/;
        var string = document.forms[survey].elements[familyname].value;

        if (input1 === null || input1 === "") {
            alert("فیلد نام و نام خانوادگی را پر کنید!");
            return false;
        }
        if (input2 === null || input2 === "") {
            alert("فیلد  کد ملی را پر کنید!");
            return false;
        }
        if (input3 === null || input3 === "") {
            alert("فیلد کد پرسنلی را پر کنید!");
            return false;
        }
        if (pattern.test(string) === false) {
            alert('مقادیر وارد شده برای نام و نام خانوادگی نامعتبر است');
            return false;
        }
        if (isNaN(input2)) {
            alert("فیلد  کد ملی را فقط با عدد پر کنید!");
            return false;
        }
        if (isNaN(input3)) {
            alert("فیلد  کد پرسنلی را فقط با عدد پر کنید!");
            return false;
        }
        alert("اطلاعات ارسال شد");
        return true;
    }
</script>

</body>
<script src="assets/calendar/kamadatepicker.min.js"></script>
<script>
    let option = {
        placeholder: "تاریخ",
        twodigit: true,// اگر فالس باشد اعداد تک رقمی نمایش داده می شود
        closeAfterSelect: true, //اگر فالس باشد بعد از انتخاب تاریخ صفحه بسته نمی شود
        // nextButtonIcon : import("assets/calendar/timeir_next.png") ,
        // previousButtonIcon : import("assets/calendar/timeir_prev.png") ,
        buttonsColor: "red",
        forceFarsiDigits: true,
        markToday: true,
        markHolidays: true,
        highlightSelectedDay: true,
        gotoToday: true,

    }
    kamaDatepicker('datetime', option);
</script>
</html>