<?php
include('../fblogin.php');
include('../header.php');
include('../dbConnection.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Drishticone || Feedback</title>
<style type="text/css">
</style>
</head>
<body>
<div style="margin-left:30px; margin-right:30px;">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="panel panel-default">
 <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Feedback</p></center>
 <hr>
 <?php if(@$_GET['q']) 
 {
 	echo '<div style="font-size:18px;height:150px;color:red;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</div>';}
else
{
	echo ' 
  <form method="post" action="feed.php?q=http://drishticone.org/feedback/">
 <b>Name&nbsp;</b><span style="color:red;">(optional)</span>:';
 if(isset($_SESSION['name']))
 {
 	$xy=$_SESSION['name'];
 	echo '
 <div class="form-group">    
<input id="name" name="subject" placeholder="Enter your name" value="'.$xy.'" class="form-control input-md" type="text" disabled>    
</div>';
}
else {
 	echo '
 <div class="form-group">    
<input id="name" name="subject" placeholder="Enter your name" class="form-control input-md" type="text" >    
</div>';
}	
echo '
  <b>Subject:&nbsp;</b><span style="color:red;">*</span>
 <div class="form-group">    
<input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text" required />    
</div>
<b>Description:&nbsp;</b><span style="color:red;">*</span>
 <div class="form-group"> 
<textarea rows="8" cols="8" name="feedback" class="form-control" placeholder="Write Your Feedback here..." required></textarea>
</div>
<div class="form-group" align="center">
 <button type="submit" class="btn btn-primary sub" style="background:#1d9d74; border-radius:0px;">Submit&nbsp;&nbsp;<span class="glyphicon glyphicon-send" aria-hidden="true"></span></button></div>
</form>
<span style="color:red;">Fields marked as * are mandatory.</span>
 ';}
 ?>
 </div>
 </div>
 </div>
</div>
<div class="col-md-3"></div>
</div><!--End of row -->
</div><!--container closed-->
<?php
include('../footer.php');
?>
</body>
</html>