<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Drishticone || Review link</title>
<link  rel="stylesheet" href="../css/bootstrap.min.css"/>
<link  rel="stylesheet" href="../css/bootstrap-theme.min.css"/>
<link rel="stylesheet" href="../../css/main.css"/>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="js/bootstrap.min.js"  type="../text/javascript"></script> 
<script src="//cdn.ckeditor.com/4.5.2/full/ckeditor.js"></script>
<style>
.title1
{
color:#1d9d74;
font-size:25px;
font-weight:300;
}</style>

<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
</head>
<body>

<header>
<div class="row">
<div class="col-md-6">
<?php
session_start();
date_default_timezone_set('Asia/Calcutta');
echo '<p style="margin:20px; margin-left:60px;">'.date('l jS \of F Y').'</p>';?>
</div>
<div class="col-md-6">
<!--login /logout-->
</div></div>
<div class="row">
<div class="col-md-6">
<img style="margin-top:-60px;" src="../image/logo1.gif" height="90" />
	<p style="color:#1d9d74;margin-top:-5px;font-size:15px;margin-left:60px;">Student Media body of KNIT Sultanpur</p>
    </div>
    <div class="col-md-6">
    <!--subscribe-->
    </div>
    
    </div>
  <!--nav bar start-->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin&nbsp;Panel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li> <a  href="#"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>&nbsp;&nbsp;Review&nbsp;Article</a></li>
       
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
  <!--nav bar closed-->

</header>
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
  <div class="panel-body">
   <center><p class="title1"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>&nbsp;&nbsp;Review&nbsp;link</p></center>
   <hr />
    <?php if(@$_GET['w'])
   {
   echo '<p style="color:green"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp;&nbsp;'.@$_GET['w'].'</p>';
   }?>
 <?php
 include('../../dbConnection.php');
$aid=@$_GET['aid'];
 $q= mysqli_query($con,"SELECT * FROM web WHERE aid='$aid'") or die("Error");
 while($row=mysqli_fetch_array($q))
 {
 $title=$row['title'];
 $url=$row['url'];
 $time=$row['time'];
 $sname =$row['snane'];
 $sid=$row['sid'];
 }
 echo' 

<form method="post" action="wupload.php?aid='.$aid.'" enctype="multipart/form-data">
<div class="form-group">
    <label for="title">Title of article :</label>
    <input type="text" class="form-control" value="'.$title.'" name="title" id="title" placeholder="Enter title of article">
  </div>



 <div class="form-group">
    <label for="file">Upload&nbsp;Photo related to topic<span style="color:red">*(Its Required)</span></label>
    <input type="file" id="file" name="fileToUpload" style="color:#1d9d72;" required><br />
    <p class="help-block"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;Only .jpg ,.jpeg,.png or .gif format is allowed.<br/><span style="color:red">File size is must be less than 200Kb</span></p>
  </div>




<center><a href="'.$url.'" class="btn btn-primary sub hoverable"  style="background:#1d9d74; border-radius:0px;" target=_blank >Visit page</a>&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn btn-primary sub hoverable" style="background:#1d9d74; border-radius:0px;">Post&nbsp;to&nbsp;Website&nbsp;&nbsp;<span class="glyphicon glyphicon-flag" aria-hidden="true"></span></button></center>
</form>';
?>











</div></div><!--panel end-->
</div></div>
<footer class="page-footer" >
         <div style="background:#202020; height:100px;"></div>
          <div class="footer-copyright" style="background:#1d9d72; color:#fff; height:45px;">
            <div class="container">
            <div class="row">
            <div class="col-md-6" style="margin-top:12px">
            ? 2014 Copyright Drishticone Web Development Team
             </div>
            <div class="col-md-6">
             <a style="float:right; color:#fff; margin-top:12px" class="footerleft right" href="#!">Developer</a>
            </div></div>
          </div></div>
        </footer>
</body>
</html>