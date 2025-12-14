<?php
  require_once 'includes/config.php';
  require_once 'method/migration.php';
  if($database){
      header('location:login.php');
  }
  $migrate= new migration();
  if (isset($_POST['submit'])){
      $dbname = $_POST['dbname'];
      if($migrate->creat_db($dbname)){
        $migrate->creat_tbl($dbname);
      }
  }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>بنیاد شهید و امور ایثارگران | Migration</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
   <div class="container bg-white w-50 text-center shadow mt-5 p-2 border-">
       <h3>ایجاد پایگاه داده</h3>
       <p>
         پروژه بنیاد شهید منطقه 10و11
       </p>
       <form method="post">
           <label for="">DB Name : </label>
           <input type="text" name="dbname" placeholder="نام پایگاه داده" required>
           <br>
           <input type="submit" value="Create" name="submit" class="btn btn-primary">

       </form>
   </div>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
