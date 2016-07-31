<?php
session_start();
include_once '../../dbConnection.php';
 $title = $_POST['title'];
$email= $_SESSION['email'];
$uname=$_SESSION['name'];
 $filename   = $_FILES['fileToUpload']['name'];
    $extension  = pathinfo($filename, PATHINFO_EXTENSION);
   echo $new        = uniqid();
    $newfilename=$new.'.'.$extension;
$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
	 $uploadOk = 1;
	// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
     header("location:index.php?w=Sorry, your file is too large.");
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx" ) {
  header("location:index.php?w=Sorry,only pdf,doc/docs are allowed.");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  header("location:index.php?w=Sorry, your file was not uploaded.");
   
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "notice/$newfilename")) {
        $msg= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		date_default_timezone_set('Asia/Calcutta');
		echo $url="notice/".$newfilename;
		$flag=1;
	$q=mysqli_query($con,"INSERT INTO notice VALUES ('$new','$title','$url','$email','$uname','$flag',NOW())") or die ("Error");
		  header("location:index.php?w=$msg");
    } else {
	  header("location:index.php?w=Sorry, there was an error uploading your file.");
     
    }
}
?>