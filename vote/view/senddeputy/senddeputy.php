<?php
if (!isset($_COOKIE['username'])){
    header('location:../../loginvote.php');
}
$date = date('H:i');
$jalali = gregorian_to_jalali(date('Y'), date('m'), date('d'), '/');
$datetime = $jalali . "    " . $date;
$senddeputy_obj= new vote();
$codemeli=$_COOKIE['username'];
$deputypermission = $senddeputy_obj->senddeputyStatus($codemeli);

if($deputypermission[0] == 0){
    die('شمار اجازه ارسال پیام به معاون محترم توسعه مدیریت و منابع انسانی بنیاد شهید و امور ایثارگران تهران بزرگ  را  ندارید');

}
?>

<meta http-equiv="refresh" content="300">
<h2 style="color: #ff981a;background-color: #eaeae8;"> صفحه ارتباط با معاون توسعه مدیریت و منابع انسانی</h2>
<div class="div_client" style="background-color: #eaeae8;">
    <div class="div_1_2_last" style="height:fit-content">
        <div class="div_client_padding">
            <fieldset
                style="border: solid;border-color:#39ACF7;border-radius: 5px;height:80%;padding: 2px">
                <form  method="post" name="senddeputy" onsubmit="return checkFormValidation('senddeputy','title', 'text');"
                       enctype="multipart/form-data" action="?c=senddeputy&a=send">
                    <div class="div_240">
                        <label> موضوع پیام :<span style="color: red;font-size: 25px;">*</span></label>
                        <div>
                            <input class="full" type="text" name="title" style="width:700px" />
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="div_370">
                        <label>
                            متن پیام :
                            <span style="color: red;font-size: 25px;">*</span>
                        </label>
                        <div>
                            <textarea name="text"  rows="10" cols="100" style="margin-left:6px"></textarea><br>
                        </div>
                    </div>
                    <span style="color: red;font-size: 15px;margin: 5px">فقط امکان ارسال تصویر موجود می باشد</span><br>
                    <div class="div_240">
                        <input type="file" name="pic">
                        <div>
                            <div class="div_captcha right"></div>
                            <input name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" style="visibility: hidden">
                            <input type="text" name="datetime" value="<?php echo $datetime; ?>"
                                   style="width: fit-content;margin: 3px;border: none;color: black;font-family: 'B Nazanin';font-size: 20px;visibility: hidden">
                            <input name="devicename" value="<?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?>"
                                   style="visibility: hidden"><br>
                            <input name="fullname" value="<?php echo $vote['firstname'].' '.$vote['lastname']; ?>"
                                   style="visibility:hidden"><br>
                            <input name="codepersoneli" value="<?php echo $vote['codepersoneli']; ?>"
                                   style="width: min-content;visibility:hidden "><br>
                            <input name="codemeli" value="<?php echo $vote['codemeli']; ?>"
                                   style="width: min-content;visibility:hidden ">
                            <input name="zone" value="<?php echo $vote['zone']; ?>"
                                   style="width: min-content;visibility:hidden ">
                            <input name="mobile" value="<?php echo $vote['mobile']; ?>"
                                   style="width: min-content;visibility:hidden ">
                            <div class="right">
                                <input  type="submit" value="ارسال " style="margin-bottom: 5px;margin-right: 5px;"/>
<!--                                <button type="submit" onclick="ShowMessage();"-->
<!--                                        style="margin-bottom: 5px;margin-right: 5px;border-radius: 5px;background-color:lightgrey">ارسال</button>-->
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



    function checkFormValidation(senddeputy,title,text) {
        var input1 = document.forms[senddeputy][title].value;
        var input2 = document.forms[senddeputy][text].value;


        if (input1 === null || input1 === "") {
            alert("فیلد موضوع را پر کنید!");
            return false;
        }
        if (input2 === null || input2 === "") {
            alert("متن پیام نباید خالی باشد!");
            return false;
        }

        alert("پیام ارسال شد");
        return true;
    }
</script>