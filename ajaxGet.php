

<?php
include_once 'includes/config.php';
include_once 'method/portal.php';
$portal_obj=new portal();
$getData = $portal_obj->getData();
//$EMGmessage=$getData['message'];
$json_arry= array();
$json_arry[0]=$getData['message'];
$length = strlen($json_arry[0]);
if ($length>0) {
    file_put_contents('message.txt', $json_arry[0]);

}
//if ($length>0){
//    echo json_encode($json_arry[0]);
//}

////////////////////////////////////////// JSON
// $servername='localhost';
//$username='root';
//$password='faslezibayebahar@st';
//$database='';
//$database ="bonyadm1011";
//$conect = mysqli_connect($servername,$username,$password,$database);
//$sql="select * from portal";
//$results= mysqli_query($conect,$sql);
//
//$json_arry= array();
//while ($data =mysqli_fetch_assoc($results))
//{
//    $json_arry[]=$data;
//}
//$text=$json_arry[0]["message"];
//$length = strlen($text);
//if ($length>0){
//    echo json_encode($json_arry[0]["message"]);
//}



?>
