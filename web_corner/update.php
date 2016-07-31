<?php
ob_start();
session_start();
include '../dbConnection.php';
$aid=uniqid();
echo $title=$_POST['title'];
echo $url=$_POST['url'];
echo $sid=$_SESSION['id'];
echo $sname=$_SESSION['name'];
$flag=0;


if($title != NULL && $url != NULL)
{
$xyz=mysqli_query($con,"INSERT INTO web VALUES('$aid','$title','$url','$sid','$sname',NOW(),0,'$flag')") or die("Error");

if ($xyz)
    {
 header('Location:index.php?w=Congratulations!! your link submitted successfully.It is under the review process and will be posted on the website very shortly. Thank you.');
 exit();
    }
 else
    {
  header('Location:index.php?w=Sorry,Something went wrong. contact our webteam .');
  exit();
    }
}
  else
{
    header('Location:index.php?w=please fill all the detail.');
	exit();
}
ob_end_flush();
?>
