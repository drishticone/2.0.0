<?php
ob_start();
session_start();
include '../dbConnection.php';
$aid=uniqid();
$title=$_POST['title'];
$article=$_POST['article'];
$type='News';
$writer_id=$_SESSION['id'];
$writer_name=$_SESSION['name'];
$flag='0';



if($title != NULL && $article != NULL)
{
$xyz=mysqli_query($con,"INSERT INTO article VALUES('$aid','$title','$article','$writer_id','$writer_name',NOW(),'$flag','$type',0)") or die("Error");
echo $xyz;
if ($xyz)
    {
 header('Location:index.php?w=Congratulations!! News submitted successfully.It is under the review process and will be posted on the website very shortly. Thank you.');
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
