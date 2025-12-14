<?php
class uploader{
   public function __construct()
   {
       global $db;
       $this->db= $db;
   }
   public function uploadsgeneral($data)
    {
        //uploader($_FILES);
        $folder = "alluploads/uploadsgeneral/";
        $img_name = rand().basename($data['name']);
        $path = $folder . $img_name;
        //echo ": The file upload name is ". basename($data['name']);
        //echo "<br>";
        $upload_ok = 1;

        $temp=$data['tmp_name'];
         $fileType = mime_content_type($temp);
        //echo "The file uplaod format is   :".$fileType;
        //echo "<br>";
        $extensions = array('image/jpg', 'image/png', 'image/gif','image/jpeg','image/bmp','image/vnd.microsoft.icon','image/tiff','image/webp');
// check file extension
        if (!in_array($fileType, $extensions)) {
            echo 'فرمت این فایل مجاز نیست  ' . $fileType;
            $upload_ok = 0;
        }
// check if file already exist
        if (file_exists($path)) {
            echo 'متاسفانه فایل از قبل موجود می باشد ';
            $upload_ok = 0;
        }
//check file size
        if ($data['size'] > 50000000) {
            echo 'حجم فایل زیاد می باشد';
            $upload_ok = 0;
        }

        if ($upload_ok == 0) {
            echo 'متاسفانه فایل بارگذاری نشد';
        } else {
            if (move_uploaded_file($data['tmp_name'], $path)) {
               // echo 'the file ' .htmlspecialchars($data['name']) . ' has been uploaded';
                return $path;
            } else {
                echo '<br>';
                echo 'sorry . there was an uploading file ';
            }
        }
    }


    public function uploadsdeputy($data)
    {
        //uploader($_FILES);
        $folder = "alluploads/uploadsdeputy/";
        $img_name = rand().basename($data['name']);
        $path = $folder . $img_name;
        //echo ": The file upload name is ". basename($data['name']);
        //echo "<br>";
        $upload_ok = 1;

        $temp=$data['tmp_name'];
        $fileType = mime_content_type($temp);
        //echo "The file uplaod format is   :".$fileType;
        //echo "<br>";
        $extensions = array('image/jpg', 'image/png', 'image/gif','image/jpeg','image/bmp','image/vnd.microsoft.icon','image/tiff','image/webp');
// check file extension
        if (!in_array($fileType, $extensions)) {
            echo 'فرمت این فایل مجاز نیست  ' . $fileType;
            $upload_ok = 0;
        }
// check if file already exist
        if (file_exists($path)) {
            echo 'متاسفانه فایل از قبل موجود می باشد ';
            $upload_ok = 0;
        }
//check file size
        if ($data['size'] > 50000000) {
            echo 'حجم فایل زیاد می باشد';
            $upload_ok = 0;
        }

        if ($upload_ok == 0) {
            echo 'متاسفانه فایل بارگذاری نشد';
        } else {
            if (move_uploaded_file($data['tmp_name'], $path)) {
                // echo 'the file ' .htmlspecialchars($data['name']) . ' has been uploaded';
                return $path;
            } else {
                echo '<br>';
                echo 'sorry . there was an uploading file ';
            }
        }
    }




}
