<?php
include('../fblogin.php');
include('../header.php');
include('../dbConnection.php');
?>



<body>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Drishticone || Report Problem</title>
</head>
<body>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Drishticone || Report Problem</title>
<div style="margin-left:30px; margin-right:30px;">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="panel panel-default">
 <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;&nbsp;Report Problem</p></center><br />

 <form method="post" action="">
 <b>Name&nbsp;</b><span style="color:red;">(optional)</span>:
 <div class="form-group">
<input id="name" name="subject" placeholder="Enter your name" class="form-control input-md" type="text" />
</div>
  <b>Subject:&nbsp;</b><span style="color:red;">*</span>
 <div class="form-group">
<input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text" required />
</div>
<b>Description:</b><span style="color:red;">&nbsp;*</span>
 <div class="form-group">
<textarea rows="8" cols="8" name="feedback" class="form-control" placeholder="Report Your Problem here..." required></textarea>
</div>
<div class="form-group" align="center">
 <button type="submit" class="btn btn-primary sub" style="background:#1d9d74; border-radius:0px;">Submit&nbsp;&nbsp;<span class="glyphicon glyphicon-send" aria-hidden="true"></span></button></div>
</form>
<span style="color:red;">Fields marked as * are mandatory.</span>

 </div>
 </div>
</div>
<div class="col-md-3"></div>
</div><!--End of row -->
</div><!--container closed-->

</body>
<?php
include('../footer.php')
?>
