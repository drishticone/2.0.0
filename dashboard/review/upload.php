<?php
session_start();
include_once '../../dbConnection.php';
function seoUrl($string) {
   $string = strtolower($string);
   $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
   $string = preg_replace("/[\s-]+/", " ", $string);
   $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}
echo $aid=@$_GET['aid'];
echo  $title = $_POST['title'];
echo $type=$_POST['type'];
echo $article=$_POST['article'];
$title = ucfirst(strtolower($title));
$type=seoUrl($type);
if(!file_exists("../../article/".$type))
{
mkdir("../../article/".$type);
}

$temp=$title;
$temp=seoUrl($temp);
if(!file_exists("../../article/".$type."/".$temp)){
mkdir("../../article/".$type."/".$temp);}


$filename   = $_FILES['fileToUpload']['name'];
    $extension  = pathinfo($filename, PATHINFO_EXTENSION);
  $new        = uniqid();
    $newfilename=$new.'.'.$extension;
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '../../article/'.$type.'/'.$temp.'/'.$newfilename)) {
        $msg= " The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		date_default_timezone_set('Asia/Calcutta');
	} else {
	  header("location:review.php?aid=".$aid."&w=Sorry, there was an error uploading your file.");
     
    }
}

echo $pic_url='http://drishticone.org/article/'.$type.'/'.$temp.'/'.$newfilename;
echo $article_folder_url='http://drishticone.org/article/'.$type.'/'.$temp;

$myfile = fopen("../../article/".$type."/".$temp."/article.txt", "w") or die("Unable to open text file!");
fwrite($myfile, $article);
fclose($myfile);

$txt='
<?php $aid=\''.$aid.'\' ; 
include \'../../temp.php\';?>
';

file_put_contents("../../article/".$type."/".$temp."/index.php", $txt, FILE_APPEND | LOCK_EX);

$rid=$_SESSION['id'];
$rname=$_SESSION['name'];
$q4=mysqli_query($con ,"UPDATE article SET article='$article_folder_url' ,flag='1',type='$type' , photo='$pic_url' WHERE aid='$aid'") or die ("Error 199");
$q5=mysqli_query($con,"INSERT INTO review VALUES('$aid','$rid','$rname',NOW())") or die ("Error 200");


header("location:http://drishticone.org/");







?>
