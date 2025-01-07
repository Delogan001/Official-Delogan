<?php 
require_once('includes/db.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){



       



    if(isset($_FILES['img']) && !empty($_FILES['img']['tmp_name'])){
        $img = $_FILES['img'];
$text = $_POST['text'];
$link = $_POST['link'];
date_default_timezone_set('Africa/Lagos');
$tm=date('y-m-d h:ia');
        // Orginal uploaded images directory
        $original_dir = "originals/";
        //Creating Directory if not exists
        if(!is_dir($original_dir))
            mkdir($original_dir);
            
        // uploaded images thumbnail directory
        $thumbnail_dir = "thumbnails/";
        //Creating Directory if not exists
        if(!is_dir($thumbnail_dir))
            mkdir($thumbnail_dir);

        //FileName
        $fname = $img['name'];

        // Checking Duplicate Filename
        $i = 0;
        while(true){
            if($i == 0){
                if(!is_file($original_dir.$fname) && !is_file($thumbnail_dir.$fname)){
                    break;
                }
            }else{
                if(!is_file($original_dir.$i."_".$fname) && !is_file($thumbnail_dir.$i."_".$fname)){
                    $fname = $i."_".$fname;
                    break;
                }
            }
            $i++;
        }
        // Image File Type
        $file_type = mime_content_type($img['tmp_name']);
        $oupload = false;
        $thumb_upload = false;

        if($file_type=='image/png'){
            // For PNG Files
            $gdimg= imagecreatefrompng($img['tmp_name']);
            if($gdimg){
                $oupload = imagepng($gdimg,$original_dir.$fname,9);
                list($width, $height) =getimagesize($img['tmp_name']);
                if($width > 640 || $height > 480){
                    if($width > $height){
                        $perc = ($width - 640) / $width;
                        $width = 640;
                        $height = $height - ($height * $perc);
                    }else{
                        $perc = ($height - 480) / $height;
                        $height = 480;
                        $width = $width - ($width * $perc);
                    }
                }
                $gdimg = imagescale($gdimg, $width, $height);
                $thumb_upload = imagepng($gdimg,$thumbnail_dir.$fname,6);
                imagedestroy($gdimg);
            }else{
                echo '<script>alert("Invalid PNG File.")</script>';
            }
        }else if($file_type == 'image/jpeg'){
            // For JPEG Files
            $gdimg= imagecreatefromjpeg($img['tmp_name']);
            if($gdimg){
                $oupload = imagejpeg($gdimg,$original_dir.$fname,100);
                list($width, $height) =getimagesize($img['tmp_name']);
                if($width > 640 || $height > 480){
                    if($width > $height){
                        $perc = ($width - 640) / $width;
                        $width = 640;
                        $height = $height - ($height * $perc);
                    }else{
                        $perc = ($height - 480) / $height;
                        $height = 480;
                        $width = $width - ($width * $perc);
                    }
                }
                $gdimg = imagescale($gdimg, $width, $height);
                $thumb_upload = imagejpeg($gdimg,$thumbnail_dir.$fname,50);
                imagedestroy($gdimg);
            }else{
                echo '<script>alert("Invalid JPEG File.")</script>';
            }
        }else{
            echo '<script>alert("Invalid Image type.")</script>';
        }
        if($oupload && $thumb_upload){
            $sql = "INSERT INTO `quote` (`original_path`, `thumbnail_path`,`text`,`link`,`tm`) VALUES ('{$original_dir}{$fname}', '{$thumbnail_dir}{$fname}','$text','$link','$tm') ";
            $save = $conn->query($sql);
            if($save){
                header('location: qadmin.php');
            }else{
                if(is_file($original_dir.$fname))
                    unlink($original_dir.$fname);
                if(is_file($thumbnail_dir.$fname))
                    unlink($thumbnail_dir.$fname);
                echo 'Uploading Image Failed <br>';
                echo 'Error: '. $conn->error;
                exit;
            }
        }else{
            echo 'Uploading Image Failed <br>';
            exit;
        }

    }else{
        echo '<script>alert("No Image file has been sent.")</script>';
    }
}else{
    echo '<script>alert("No Data has been sent.")</script>';
}

$conn->close();

?>