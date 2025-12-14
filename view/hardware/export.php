<?php
include_once '../../lib/jdf.php';
$manager = $_GET['m'];
date_default_timezone_set("Asia/Tehran");
$jalali = gregorian_to_jalali(date('Y'),date('m'),date('d') , '/');
$conn = new mysqli('localhost', 'root', 'faslezibayebahar@st');
mysqli_select_db($conn, 'bonyadtehran');

$setSql = "SELECT * FROM `hardware`";
$setRec = mysqli_query($conn,$setSql);
$setData='';
$date=date("H:i");
while($rec = mysqli_fetch_row($setRec))
{
    $rowData = '';
    foreach($rec as $value)
    {
        $value = '"' . $value . '"' . "\t";
        $rowData .= $value;
    }
    $setData .= trim($rowData)."\n";
}
$columnHeader ='';
$columnHeader = "ID" . "\t" . "ایجاد کننده" . "\t" . "نام" . "\t"."نام خانوادگی" . "\t" .
    "تلفن همراه" . "\t" . "کد ملی" . "\t"."کد پرسنلی" . "\t" . "طبقه" . "\t" . "نود" . "\t"."اتاق" .
    "\t" . "نام کاربری" . "\t" . "رمز عبور" . "\t"."IP" . "\t"."اسم کامپیوتر" . "\t"  . "نسخه کروم" . "\t"."شماره اموال کیس" . "\t" .
    "مادربورد" . "\t" . "پردازشگر" . "\t"."RAM" . "\t" . "HDD" . "\t" . "سیستم عامل" . "\t"." نمایشگر" . "\t" . "شماره اموال نمایشگر" .
    "\t" . "وضعیت" . "\t". "تاریخ ایجاد" ."\t" . "توضیحات". "\t";

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=HardwareInfo$jalali-$date.xls");
header('Content-Transfer-Encoding: binary');
header("Pragma: no-cache");
header("Expires: 0");

echo chr(255).chr(254).iconv("UTF-8", "UTF-16LE//IGNORE", $columnHeader . "\n" . $setData . "\n");

exit();
header("location:?c=hardware&a=search&m=$manager");
?>