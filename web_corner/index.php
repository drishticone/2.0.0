<?php
$nav=6;
include '../fblogin.php';
include '../header.php';
 include('../dbConnection.php');
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Drishticone || Web corner</title>

</head>
<body>
<div style="margin-left:30px; margin-right:30px;">
<div class="row">
<div class="col-md-3">
<div class="panel panel-default ">
  <div class="panel-body">
 <center><p class="title2" style="font-size:25px; line-height:35px;"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>&nbsp;&nbsp;Share&nbsp;link</p></center>
   <p><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;Share useful links from the internet here.</p>
<hr>
<?php
if(!isset($_SESSION['id']))
{
echo '
   <p style="color:green"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp;&nbsp;Please first login with facebook to Share. Thank you!!</p>
   ';
   }
else
{
 if(@$_GET['w'])
   {
   echo '<p style="color:green"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp;&nbsp;'.@$_GET['w'].'</p>';
   }
echo '<form method="post" action="update.php">
<div class="form-group">
    <label for="title">Title of page :</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title of page" required>
  </div>

<div class="form-group">
    <label for="url">URL :</label>
    <input type="text" class="form-control" name="url" id="url" placeholder="Enter url of page" required>
  </div>
  
  
<center><button type="submit" class="btn btn-primary sub" style="background:#1d9d74; border-radius:0px;">Submit&nbsp;&nbsp;<span class="glyphicon glyphicon-send" aria-hidden="true"></span></button></center>
</form>
';
  }
  ?>


</div></div><!--share panel closed-->

</div><!--col-md-3 closed-->
<div class="col-md-9">
<?php 
$q=mysqli_query($con ,"SELECT * FROM web  where flag='1' ORDER BY time DESC ") or die ("Error");
while($row=mysqli_fetch_array($q))
{
$aid=$row['aid'];
$title=$row['title'];
$sid=$row['sid'];
$sname=$row['sname'];
$url=$row['url'];
$photo=$row['photo'];
$time=$row['time'];

echo '
<a title ="on '.$time.'" href="'.$url.'" target="_blank"><div class="col-md-4">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div style="height:150px; overflow:hidden; margin:0px; padding:0px;"><img height="150" class="img-responsive" width="100%" src="'.$photo.'" /></div>
 <div  id="fitin" >'.$title.'</div>
<hr />

<span style="float:right"><a style="float:right" target="_blank" href="https://facebook.com/'.$sid.'"><span style="color:#1d9d74;">By&nbsp;:&nbsp;</span>'.$sname.'</a></span>
</div></div>

</div></a>
<!--panel end-->';}
?>





</div>
</div>
</div><!--row and container closed-->

</body>
</html>
<?php
include '../footer.php';
?>
