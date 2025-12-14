<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
if (($user['admin'] == "admin" && $_SERVER['REMOTE_ADDR'] = '10.2.15.34') || ($user['general'] == "general" && $_SERVER['REMOTE_ADDR'] = '10.2.15.34')) {
    echo "";
} else {
    echo "شما اجازه دسترسی به این قسمت را ندارید";die();
}
$date = date('H:i');
$jalali = gregorian_to_jalali(date('Y'), date('m'), date('d'), '/');
$datetime = $jalali . "    " . $date;

?>
<meta http-equiv="refresh" content="300">
<div class="div_client" style="background-color: #eaeae8;">
    <div class="div_1_2_last" style="height:fit-content">
        <div class="div_client_padding">
            <fieldset
                style="border: solid;border-color:#39ACF7;border-radius: 5px;height:80%;padding-right: 3px;">
                <form  method="post" name="sendgeneral" onsubmit="return checkFormValidation('sendgeneral', 'text');"
                       enctype="multipart/form-data" action="?c=general&a=sendreply" style="padding-right: 8px">
                    <div class="div_370">
                        <label>موضوع پیام درخواست کننده  :</label><br>
                        <label style="color:red" ><?php echo $replymsg['title']; ?></label><br>
                        <label>
                            پاسخ پیام :
                            <span style="color: red;font-size: 25px;">*</span>
                        </label>
                        <div>
                            <textarea name="text"  rows="10" cols="100" style="margin-left:6px;border-radius: 5px;"></textarea><br>
                        </div>
                    </div>
                    <span style="color: red;font-size: 15px;margin: 5px">شما در حال ارسال پاسخ پیام به کارمندی با مشخصات زیر هستید</span><br>
                    <div class="div_240">
<!--                        <input type="file" name="pic">-->
                        <div>
                            <div class="div_captcha right"></div>
<!--                            <input name="ip" value="--><?php //echo $_SERVER['REMOTE_ADDR']; ?><!--" style="visibility: hidden">-->

<!--                            <input name="devicename" value="--><?php //echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?><!--"-->
<!--                                   style="visibility: hidden"><br>-->
                            <input name="fullname" value="<?php echo $replymsg['fullname']; ?>" style="padding-bottom: 5px"><br>
                            <label style="padding-top: 5px">کد پرسنلی :</label>
                            <input name="codepersoneli" value="<?php echo $replymsg['codepersoneli']; ?>"   style="width:100px;margin: 3px;border: none;color: black;font-family: 'B Nazanin';font-size: 20px;">
                            <label>کد ملی :</label>
                            <input name="codemeli" value="<?php echo $replymsg['codemeli']; ?>"  style="width:100px;margin: 3px;border: none;color: black;font-family: 'B Nazanin';font-size: 20px;">
                            <label>محل خدمت :</label>
                            <input name="zone" value="<?php echo $replymsg['zone']; ?>"  style="width:100px;margin: 3px;border: none;color: black;font-family: 'B Nazanin';font-size: 20px;">
                            <input type="text" name="datetime" value="<?php echo $datetime; ?>" style="width:50px;margin: 3px;border: none;color: black;font-family: 'B Nazanin';font-size: 20px;visibility: hidden;">
                            <input type="text" name="id" value="<?php echo $replymsg['id']; ?>"
                                   style="width:50px;margin: 3px;border: none;color: black;font-family: 'B Nazanin';font-size: 20px;visibility: hidden;">
                            <div class="right">
                                <input  type="submit" value="ارسال " style="margin-bottom: 5px;margin-right: 5px;margin-top: 5px"/>
                                <!-- <button type="submit" onclick="ShowMessage();"
                                         style="margin-bottom: 5px;margin-right: 5px;border-radius: 5px;background-color:lightgrey">ارسال</button>-->
                            </div>
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


<script>



    function checkFormValidation(sendgeneral,text) {
        //var input1 = document.forms[sendgeneral][title].value;
        var input2 = document.forms[sendgeneral][text].value;


        // if (input1 === null || input1 === "") {
        //     alert("فیلد موضوع را پر کنید!");
        //     return false;
        // }
        if (input2 === null || input2 === "") {
            alert("متن پیام نباید خالی باشد!");
            return false;
        }

        alert("پیام ارسال شد");
        return true;
    }
</script>