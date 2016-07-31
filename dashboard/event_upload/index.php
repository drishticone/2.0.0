<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Drishticone || Create Event</title>
<link  rel="stylesheet" href="../css/bootstrap.min.css"/>
<link  rel="stylesheet" href="../css/bootstrap-theme.min.css"/>
<link rel="stylesheet" href="../css/main.css"/>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="js/bootstrap.min.js"  type="../text/javascript"></script> 
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
      <li> <a  href="#"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;&nbsp;Create&nbsp;Events</a></li>
       
      </ul>
        
      <!--<ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Login/Sign in<span class="caret"></span></a>
          <ul class="dropdown-menu">
         <li><a href="#">&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;&nbsp;Login</a></li>
         <li><a href="#">&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;&nbsp;Signup</a></li>
          </ul>
        </li>
      </ul>-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
  <!--nav bar closed-->

</header>

<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
  <div class="panel-body">
   <center><p class="title1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;&nbsp;Create&nbsp;event</p></center>
    <?php if(@$_GET['w'])
   {
   echo '<p style="color:green"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp;&nbsp;'.@$_GET['w'].'</p>';
   }?>
   <form method="post" action="update.php">
  <div class="form-group">
    <label for="title">Enter title </label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title of event">
  </div>
   <div class="form-group">
    <label for="date">Enter date </label>
    <input type="date" name="date" class="form-control" id="date" placeholder="Enter date of event">
  </div>
   <div class="form-group">
    <label for="time">Enter time </label>
    <input type="time" name="time" class="form-control" id="time" placeholder="Enter time of event">
  </div>
   <div class="form-group">
    <label for="date">Enter venue </label>
    <input type="text" name="venue" class="form-control" id="venue" placeholder="Enter venue of event">
  </div>
   <div class="form-group">
    <label for="desc">Enter description </label>
	<textarea class="form-control"  type="desc" name="desc" id="desc" placeholder="Enter description of event..." rows="3"></textarea>
    
  </div>
  <center><button type="submit" class="btn btn-primary sub" style="background:#1d9d74; border-radius:0px;">Submit&nbsp;&nbsp;<span class="glyphicon glyphicon-send" aria-hidden="true"></span></button><center>
</form>
  </div>
</div>

</div>
</div>









<footer class="page-footer" >
         <div style="background:#202020; height:100px;"></div>
          <div class="footer-copyright" style="background:#1d9d72; color:#fff; height:45px;">
            <div class="container">
            <div class="row">
            <div class="col-md-6" style="margin-top:12px">
            © 2014 Copyright Drishticone Web Development Team
             </div>
            <div class="col-md-6">
             <a style="float:right; color:#fff; margin-top:12px" class="footerleft right" href="#!">Developer</a>
            </div></div>
          </div></div>
        </footer>
</body>
</html>