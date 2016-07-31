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
<title>Drishticone || Write article</title>
<script src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"></script>
 
</head>
<body>
<div style="margin-left:30px; margin-right:30px;">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<?php
if(!isset($_SESSION['id']))
{
echo '<div class="panel panel-default" style="height:200px">
 <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;Write News</p></center>
 <hr>
   
   <p style="color:green"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp;&nbsp;Please first login with facebook to continue. Thank you!!</p>
 </div></div>';
   }
else
{
echo '<div class="panel panel-default">
 <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;Write News</p></center>
 <hr>';
 if(@$_GET['w'])
   {
   echo '<p style="color:green"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp;&nbsp;'.@$_GET['w'].'</p>';
   }
echo '<form method="post" action="update.php">
<div class="form-group">
    <label for="title">Title of News :</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title of News" required>
  </div>


<div class="form-group">
     <label for="editor">Write article :</label>
<textarea class="form-control ckeditor" id="editor" name="article" required></textarea>
<script type="text/javascript">
       
	   CKEDITOR.replace( "editor",
    {
	    removeButtons: "Source,About",
       
	   });
 </script>
</div>
<center><button type="submit" class="btn btn-primary sub" style="background:#1d9d74; border-radius:0px;">Submit&nbsp;&nbsp;<span class="glyphicon glyphicon-send" aria-hidden="true"></span></button></center>
</form>


<!------------------------------------------------------------------------------------------------->
</div>
  </div><!--panel end-->';
  }
  ?>
  
  
  
  
</div></div>
</div>
</body>
<?php
include('../footer.php')
?>
</html>