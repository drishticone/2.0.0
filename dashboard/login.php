<?php
session_start();
include_once '../dbConnection.php';
$email =$_SESSION['email'];
$pass = $_POST['pass'];
$power = $_POST['power'];

$email = stripslashes($email);
$email = addslashes($email);
$pass = stripslashes($pass); 
$pass = addslashes($pass);
$power = stripslashes($power); 
$power = addslashes($power);

$result = mysqli_query($con,"SELECT name FROM admin WHERE email = '$email' and password = '$pass'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1)
{
$r= mysqli_query($con,"SELECT power FROM admin_power WHERE email= '$email' ") or die ('Error');
$flag=0;
while($row=mysqli_fetch_array($r))
{
if($row['power']==$power)
{
$flag=1;
break;
}
}
if($flag==1)
{
$_SESSION['power']=$power;
$_SESSION['post']='admin';
switch($power)
{
case 1:
header("location:managment/");
break;

case 2:
header("location:review/");
break;

case 3:
header("location:event_upload/");
break;

case 4:
header("location:notice_upload/");
break;

case 5:
header("location:vok_ans/");
break;

case 5:
header("location:gallery/");
break;
}

}
else
header("location:index.php?w=access Denied !! not allow for this pupose");

}
else
header("location:index.php?w=Wrong Username or Password");
?>