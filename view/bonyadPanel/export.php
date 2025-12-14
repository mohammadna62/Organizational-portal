<?php
include_once '../../lib/jdf.php';
$manager = $_GET['m'];
date_default_timezone_set("Asia/Tehran");
$jalali = gregorian_to_jalali(date('Y'),date('m'),date('d') , '/');
$conn = new mysqli('localhost', 'root', 'faslezibayebahar@st');
mysqli_select_db($conn, 'bonyadtehran');

$setSql = "SELECT * FROM `devices`";
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
$columnHeader = "ID" . "\t" . "IP" . "\t" . "Server IP" . "\t"."Device Name" . "\t" .
    "Browser Version" . "\t" . "Date And Time" . "\t";

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=devices-Login-list$jalali-$date.xls");
header('Content-Transfer-Encoding: binary');
header("Pragma: no-cache");
header("Expires: 0");

echo chr(255).chr(254).iconv("UTF-8", "UTF-16LE//IGNORE", $columnHeader . "\n" . $setData . "\n");

exit();
header("location:?c=bonyadPanel&a=list&m=$manager");
?>