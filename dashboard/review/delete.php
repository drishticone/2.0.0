<?php
session_start();
if($_SESSION['post']!='admin' || $_SESSION['power']!=2)
{ 
header("location:http://drishticone.org/error.php");
}
include('../../dbConnection.php');
$aid=@$_GET['aid'];
$q= mysqli_query($con,"DELETE FROM article WHERE flag='0' AND aid='$aid' ") or die ("Error");
if($q)
header('location:index.php?w=article deleted successfully');
else
header('location:index.php?w=Something went wrong,contact our webteam');
?>

