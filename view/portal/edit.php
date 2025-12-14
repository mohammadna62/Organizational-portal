<?php
if (!isset($_COOKIE['email'])) {
    header('location:../../login.php');
}
?>

<h2 style="color: #ff981a">مدیریت پرتال بنیاد شهید</h2>
<div class="p-2">
    <div class="row">
        <div class="col-sm-6">

            <div class="form-group"
                 style="border: solid;border-radius: 5px; color: #BCBCBC;padding: 5px;float: right;width: fit-content">
                <form action="?c=portal&a=updatetext&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <label for="firstname" style="color: black">شرح پیام:</label>
                    <textarea id="editor1" name="text" rows="10" cols="80"><?php echo $portal['text']; ?></textarea>
                    <input type="submit" value="انتشار" class="btn btn-primary" style="float: right;margin-left: 5px">
                </form>
                <form action="?c=portal&a=deletetext&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <input type="submit" value=" پاک کردن " class="btn btn-primary"><br><br>
                </form>
                <form action="?c=portal&a=updatemessage&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <label for="firstname" style="color: black">شرح پیام فوری:</label>
                    <input type="text" class="form-control" name="message"
                           value="<?php echo $portal['message']; ?>">
                    <input type="submit" value="انتشار" class="btn btn-primary" style="float: right;margin-left: 5px">
                </form>
                <form action="?c=portal&a=deleteMessage&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <input type="submit" value=" پاک کردن " class="btn btn-primary"><br><br>
                </form>
                <form action="?c=portal&a=updatespfile&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <label for="lasttname" style="color: black">توضیح فایل ارسالی اختصاصی:</label>
                    <input type="text" class="form-control" name="spmessage"
                           value="<?php echo $portal['spmessage']; ?>">
                    <input type="file" class="form-control" name="spfile" style="width: fit-content">
                    <label for="exampleFormControlInput1">IP سیستم مورد نظر</label>
                    <input type="text" class="form-control" name="spip"
                           value="<?php echo $portal['spip']; ?>"><br>
                    <input type="submit" value="انتشار" class="btn btn-primary" style="float: right;margin-left: 5px">
                </form>
                <form action="?c=portal&a=deletespfile&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <input type="submit" value=" پاک کردن " class="btn btn-primary"><br><br>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group" style="border-style: solid;border-radius: 5px; color: #BCBCBC;padding: 5px;">
                <form action="?c=portal&a=updatefile&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <label for="lasttname" style="color: black">توضیح فایل ارسالی:</label>
                    <input type="text" class="form-control" name="title_file"
                           value="<?php echo $portal['title_file']; ?>">
                    <input type="file" class="form-control" name="file" style="width: fit-content">
                    <input type="submit" value="انتشار" class="btn btn-primary" style="float: right;margin-left: 5px">
                </form>
                <form action="?c=portal&a=deletefile&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <input type="submit" value=" پاک کردن " class="btn btn-primary"><br><br>
                </form>
                <form action="?c=portal&a=updatepic&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <label for="lasttname" style="color: black">توضیح تصویر ارسالی:</label>
                    <input type="text" class="form-control" name="title_pic"
                           value="<?php echo $portal['title_pic']; ?>">
                    <input type="file" class="form-control" name="pic" style="width: fit-content">
                    <input type="submit" value="انتشار" class="btn btn-primary" style="float: right;margin-left: 5px">
                </form>
                <form action="?c=portal&a=deletepic&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <input type="submit" value=" پاک کردن " class="btn btn-primary"><br><br>
                </form>
                <form action="?c=portal&a=updatevideo&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <label for="lasttname" style="color: black">توضیح فیلم ارسالی:</label>
                    <input type="text" class="form-control" name="title_video"
                           value="<?php echo $portal['title_video']; ?>">
                    <input type="file" class="form-control" name="video" style="width: fit-content">
                    <input type="submit" value="انتشار" class="btn btn-primary" style="float: right;margin-left: 5px">
                </form>
                <form action="?c=portal&a=deletevideo&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <input type="submit" value=" پاک کردن " class="btn btn-primary">
                </form>
                <form action="?c=portal&a=updatetabpic&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <label for="lasttname" style="color: black">ارسال تصویر در تب جدید:</label>
                    <input type="file" class="form-control" name="tabpic" style="width: fit-content">
                    <input type="submit" value="انتشار" class="btn btn-primary" style="float: right;margin-left: 5px">
                </form>
                <form action="?c=portal&a=deletetabpic&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <input type="submit" value=" پاک کردن " class="btn btn-primary"><br><br>
                </form>
                <br>


            </div>
            <div class="col-sm-6" style="width: display:block">
                <form action="?c=portal&a=voteSet&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <label for="lasttname" style="color: black">تعیین وضعیت پرتال شخصی</label>
                    <select name="voteStatus" onchange="ChangeCarList()">
                        <option style="width: fit-content" value="فعال"<?php if ($portal['voteStatus'] == 'فعال') {
                            echo 'selected';
                        } ?>>فعال
                        </option>
                        <option style="width: fit-content"
                                value="غیرفعال" <?php if ($portal['voteStatus'] == 'غیرفعال') {
                            echo 'selected';
                        } ?> >غیرفعال
                        </option>
                    </select><br>
                    <input type="submit" value="اعمال" class="btn btn-primary" style="float: right;">
                </form><br><br>
                <form action="?c=portal&a=setwebsiteStatus&m=<?php echo $manager; ?>" method="post"
                      enctype="multipart/form-data">
                    <label for="lasttname" style="color: black">تعیین وضعیت سایت پرتال</label>
                    <select name="websiteStatus" onchange="ChangeCarList()">
                        <option style="width: fit-content" value="فعال"<?php if ($portal['websiteStatus'] == 'فعال') {
                            echo 'selected';
                        } ?>>فعال
                        </option>
                        <option style="width: fit-content"
                                value="غیرفعال" <?php if ($portal['websiteStatus'] == 'غیرفعال') {
                            echo 'selected';
                        } ?> >غیرفعال
                        </option>
                    </select><br>
                    <input type="submit" value="اعمال" class="btn btn-primary" style="float: right;">
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <a href="?c=survey&a=list&m=<?php echo $manager; ?>" class="btn btn-primary" style="display: inline-block">پیام
                کارمندان</a>
        </div>
    </div>
</div>
<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->

<!-- CK Editor -->
<script src="assets/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<!--<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>-->
<!-- TinyMCE Editor -->
<script src="assets/bower_components/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea#mytextarea',
        plugins: 'advlist autolink link lists preview table code pagebreak',
        menubar: false,
        language: 'fa',
        height: 300,
        relative_urls: false,
        toolbar: 'undo redo | removeformat preview code | fontsizeselect bullist numlist | alignleft aligncenter alignright alignjustify | bold italic | pagebreak table link',
    });
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
