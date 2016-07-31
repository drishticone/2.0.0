<?php
session_start();
include_once '../../dbConnection.php';
$title = $_POST['title'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue=$_POST['venue'];
$desc=$_POST['desc'];
$id= uniqid();
$title = stripslashes($title);
$title = addslashes($title);

$date = stripslashes($date);
$date = addslashes($date);

$time = stripslashes($time);
$time = addslashes($time);

$venue = stripslashes($venue);
$venue = addslashes($venue);

$desc = stripslashes($desc);
$desc = addslashes($desc);

$q= mysqli_query($con,"INSERT INTO events VALUES ('$id','$title','$date','$time','$venue','$desc')") or die ("Error 25");
if($q)
 header("location:index.php?w=Congrats !! Event was successfully created.");
 else
  header("location:index.php?w=Sorry,Something went wrong. contact webteam .");
?>