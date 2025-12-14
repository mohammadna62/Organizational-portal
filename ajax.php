
<script src="assets/js/jquery-1.8.3.min.js"></script>


<?php
require_once("lib/jdf.php");
date_default_timezone_set("Asia/Tehran");
$ip = $_SERVER['REMOTE_ADDR'];
$devicename=gethostbyaddr($_SERVER['REMOTE_ADDR']);
$serverip=$_SERVER['HTTP_USER_AGENT'];
?>

<script>
    $.ajax({
        type: 'POST',
        url: 'bonyadPanel.php',
        data: {
            'ip': "<?php  echo $ip; ?>",
            'serverip': "<?php echo $_SERVER['SERVER_NAME']; ?>",
            'devicename': "<?php echo $devicename  ?>",
            'browser': "<?php echo $serverip; ?>",

        }
    });
</script>
