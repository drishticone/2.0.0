<?php
session_start();
include_once '../../dbConnection.php';

$aid=@$_GET['aid'];
 $title = $_POST['title'];


$filename   = $_FILES['fileToUpload']['name'];
    $extension  = pathinfo($filename, PATHINFO_EXTENSION);
 $newfilename=$aid.'.'.$extension;
$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
	 $uploadOk = 1;
	// Check file size
if ($_FILES["fileToUpload"]["size"] > 200000) {
     header("location:review.php?&aid=".$aid."&w=Sorry, your file is too large.");
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  header("location:review.php?aid=".$aid."&w=Sorry, your file was not uploaded.");
   
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '../../web_corner/photo/'.$newfilename)) {
        $msg= " The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		date_default_timezone_set('Asia/Calcutta');
	} else {
	  header("location:review.php?aid=".$aid."&w=Sorry, there was an error uploading your file.");
     
    }
}

$pic_url='http://drishticone.org/web_corner/photo/'.$newfilename;

$q4=mysqli_query($con ,"UPDATE web SET title='$title' ,photo='$pic_url',flag=1 WHERE aid='$aid'") or die ("Error 43");



header("location:index.php?w1=link posted successfully.");
exit();






?>
