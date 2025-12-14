<?php
if (isset($_COOKIE['username'])){
    header('location:index.php?c=vote&a=dashboard');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>بنیاد شهید و امور ایثارگران |ورود</title>
    <link rel="icon" href="bonyadlogo/favicon.ico"/>
	<link type="text/css" href="css/bootstrap-rtl.min.css" rel="stylesheet">
	<link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
	<link type="text/css" href="css/style.css" rel="stylesheet" />
</head>
<body dir="rtl">
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
                    <div class="login-wrap" >
                        <img src="../images/pic/bonyad.png"  style="width:150px; float: right;" >
                    </div><br>
					<h3> کارتابل شخصی </h3>
                    <span style="color: red">بنیاد شهید و امور ایثارگران </span>
					<div class="d-flex justify-content-end social_icon">
					</div>
				</div>
				<div class="card-body">
                   <form action="index.php?c=vote&a=login" method="post">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text input-icon"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="codemeli" class="form-control" id="txt-username" placeholder="کد ملی">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text input-icon"><i class="fas fa-key"></i></span>
							</div>
							<input name="codepersoneli" type="password" class="form-control" id="txt-password" placeholder="رمز عبور  : کد پرسنلی">
						</div>

						<div class="form-group">
							<input type="submit" value="ورود" class="btn float-right login_btn">
						</div>
					</form>
				</div>
                <div style="border: solid 3px black;border-radius: 3px;padding: 2px;color: black;background-color: white">
                    <span style="color: red">توجه :</span>همکار گرامی  خواهشمند است کد پرسنلی خود را به طور کامل وارد کنید و همچنین در صورت عدم موفقیت در ورود به سیستم برای هر دو گزینه نام کاربری و رمز عبور کد ملی خود را وارد نمائید.
                </div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body><!-- This template has been downloaded from Webrubik.com -->
</html>
