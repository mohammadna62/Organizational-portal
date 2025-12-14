<?php
class uploader{
   public function __construct()
   {
       global $db;
       $this->db= $db;
   }
   public function uploader($data)
    {
        //uploader($_FILES);
        $folder = "alluploads/uploads/";
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
    public function uploadertabpic($data)
    {
        //uploader($_FILES);
        $folder = "alluploads/tabpic/";
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
    public function fileuploader($data)
    {
        //uploader($_FILES);
        $folder = "alluploads/upload_file/";
        $file_name = rand().basename($data['name']);
        $path = $folder . $file_name;
        //echo ": The file upload name is ". basename($data['name']);
        //echo "<br>";
        $upload_ok = 1;

        $temp=$data['tmp_name'];
        $fileType = mime_content_type($temp);
        //echo "The file uplaod format is   :".$fileType;
        //echo "<br>";
        $extensions = array('application/pdf', 'application/msword', 'application/vnd.ms-excel','application/vnd.ms-powerpoint','application/zip','application/x-rar-compressed','application/x-msdownload','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/vnd.rar','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','application/x-7z-compressed');
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
        if ($data['size'] > 50000000000) {
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
    public function spfileuploader($data)
    {
        //uploader($_FILES);
        $folder = "alluploads/upload_sp/";
        $file_name = rand().basename($data['name']);
        $path = $folder . $file_name;
        //echo ": The file upload name is ". basename($data['name']);
        //echo "<br>";
        $upload_ok = 1;

        $temp=$data['tmp_name'];
        $fileType = mime_content_type($temp);
        //echo "The file uplaod format is   :".$fileType;
        //echo "<br>";
        $extensions = array('application/pdf', 'application/msword', 'application/vnd.ms-excel','application/vnd.ms-powerpoint','application/zip','application/x-rar-compressed','application/x-msdownload','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/vnd.rar','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','application/x-7z-compressed','image/jpg', 'image/png', 'image/gif','image/jpeg','image/bmp','image/vnd.microsoft.icon','image/tiff','image/webp','video/x-flv', 'audio/mpeg', 'video/quicktime','video/quicktime','video/mp4','audio/mp4','application/mp4','video/mpeg','audio/mpeg','video/x-msvideo','video/mp2t','video/webm','video/3gpp', 'audio/3gpp');
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
        if ($data['size'] > 50000000000) {
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
    public function videouploader($data)
    {
        //uploader($_FILES);
        $folder = "alluploads/upload_video/";
        $video_name = rand().basename($data['name']);
        $path = $folder . $video_name;
        //echo ": The file upload name is ". basename($data['name']);
        //echo "<br>";
        $upload_ok = 1;

        $temp=$data['tmp_name'];
        $fileType = mime_content_type($temp);
        //echo "The file uplaod format is   :".$fileType;
        //echo "<br>";
        $extensions = array('video/x-flv', 'audio/mpeg', 'video/quicktime','video/quicktime','video/mp4','audio/mp4','application/mp4','video/mpeg','audio/mpeg','video/x-msvideo','video/mp2t','video/webm','video/3gpp', 'audio/3gpp');
// check file extension
        if (!in_array($fileType, $extensions)) {
            echo 'فرمت این فایل مجاز نیست  ' . $fileType;
            $upload_ok = 0;
        }
 //check if file already exist
        if (file_exists($path)) {
            echo 'متاسفانه فایل از قبل موجود می باشد ';
            $upload_ok = 0;
        }
//check file size
        if ($data['size'] > 500000000000) {
            echo 'حجم فایل زیاد می باشد';
            $upload_ok = 0;
        }

        if ($upload_ok == 0) {
            echo 'متاسفانه فایل بارگذاری نشد';
        } else {
            if (move_uploaded_file($data['tmp_name'], $path)) {
                // echo 'the file ' .htmlspecialchars($data['name']) . ' has been uploaded';
//
                return $path;
            } else {
                echo '<br>';
                echo 'sorry . there was an uploading file ';
            }
        }
    }

    public function uploaduser($data)
    {
        //uploader($_FILES);
        $folder = "alluploads/uploaduser/";
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
            if (move_uploaded_file($data['tmp_name'], "../".$path)) {
                // echo 'the file ' .htmlspecialchars($data['name']) . ' has been uploaded';
                return $path;
            } else {
                echo '<br>';
                echo 'sorry . there was an uploading file ';
            }
        }
    }
    public function uploaderelection($data)
    {
        //uploader($_FILES);
        $folder = "alluploads/electionPic/";
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
