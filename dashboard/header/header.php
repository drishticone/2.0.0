<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Drishticone || Header</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
<link rel="stylesheet" href="../css/main.css"/>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script> 
</head>
<body>

<header>
<div class="row">
<div class="col-md-6">
<?php
date_default_timezone_set('Asia/Calcutta');
echo '<p style="margin:20px; margin-left:60px;">'.date('l jS \of F Y').'</p>';?>
</div>
<div class="col-md-6">
<!--login /logout-->
</div></div>
<div class="row">
<div class="col-md-6">
<img style="margin-top:-60px;" src="image/logo1.gif" height="90" />
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
      <li> <a  href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Home</a></li>
       <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Articles</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;&nbsp;News</a></li>
         <li><a href="#"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;&nbsp;Events</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Gallery</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Tech&nbsp;Blog</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>&nbsp;&nbsp;Download</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;&nbsp;About&nbsp;Us</a>
        </li>
       
      </ul>
        
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Login/Sign in<span class="caret"></span></a>
          <ul class="dropdown-menu">
         <li><a href="#">&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;&nbsp;Login</a></li>
         <li><a href="#">&nbsp;&nbsp;<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;&nbsp;Signup</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
  <!--nav bar closed-->

</header>
</body>
</html>