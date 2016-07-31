<?php
session_start();
include('../dbConnection.php');
$roll_no=$_POST['roll'];
$branch=$_POST['branch'];
$college=$_POST['college'];
$id=$_SESSION['id'];

$q=mysqli_query($con,"INSERT INTO workshop VALUES ('$id','$roll_no','$branch','$college')") or die ('error 15');

header("location:http://drishticone.org/dicon-workshop/");
?>