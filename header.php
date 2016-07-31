<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" href="http://drishticone.org/image/icon.png">
<link  rel="stylesheet" href="http://drishticone.org/css/bootstrap.min.css"/>
<link  rel="stylesheet" href="http://drishticone.org/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" href="http://drishticone.org/css/main.css"/>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://drishticone.org/js/jquery-1.11.3.min.js"></script>
<script src="http://drishticone.org/js/bootstrap.min.js"  type="text/javascript"></script> 
<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
			 $(".navbar").addClass("nav_fix");
			 $(".scroll").addClass("scroll_fix");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
			 $(".navbar").removeClass("nav_fix");
			 $(".scroll").removeClass("scroll_fix");
        }
    });
});</script>
<style>
.scroll_fix
{
padding-top: 70px;
}
.nav_fix
{
padding-left: 15px;
padding-right: 15px;
}
</style>
 </head>
<body class="scroll">
<header>
<div class="logo">
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
<img style="margin-top:-60px;" src="http://drishticone.org/image/logo1.gif" height="90" /><small><span style="color:#fff; background-color:#9B0000; border-radius:4px; font-size:13px; padding:5px;">Beta</span></small>
	<p style="color:#1d9d74;margin-top:-5px;font-size:15px;margin-left:60px;">Student Media body of KNIT Sultanpur</p>
    </div>
    <div class="col-md-6">

    </div>
    
    </div></div>
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
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li <?php if($nav==1) echo 'class="active"'; ?> > <a  href="http://drishticone.org/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Home</a></li>
       <li <?php if($nav==2) echo 'class="active"'; ?> ><a href="http://drishticone.org/article"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Articles</a></li>
               <li  <?php if($nav==3) echo 'class="active"'; ?> ><a href="http://drishticone.org/student_activity"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;&nbsp;Student Activities</a></li>
         <li  <?php if($nav==4) echo 'class="active"'; ?> ><a href="http://drishticone.org/events"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;&nbsp;Events</a></li>
        <li  <?php if($nav==5) echo 'class="active"'; ?> ><a href="http://drishticone.org/gallery"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Gallery</a></li>
        <li  <?php if($nav==6) echo 'class="active"'; ?> ><a href="http://drishticone.org/web_corner"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;&nbsp;Web&nbsp;Corner</a></li>
        <li <?php if($nav==7) echo 'class="active"'; ?> ><a href="http://drishticone.org/download"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;&nbsp;Print&nbsp;Edition</a></li>
        <li  <?php if($nav==8) echo 'class="active"'; ?> ><a href="http://drishticone.org/aboutus"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;&nbsp;About&nbsp;Us</a>
		<!-- <li  <?php if($nav==9) echo 'class="active"'; ?> ><a href="http://drishticone.org/dicon-workshop"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;&nbsp;Workshop&nbsp</a>-->
        </li>
       
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      
   <?php 
   if(!isset($_SESSION['id']))
   {     
       echo '
	   <li><a href="'.$loginUrl.'"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;&nbsp;Log&nbsp;in&nbsp;with&nbsp;facebook</a>
       ';
	   } 
	   else{
	   $name=$_SESSION['name'];
	   $id=$_SESSION['id'];
	  echo ' <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img  height="30" width="30" style="margin:-10px;" src="https://graph.facebook.com/'.$id.'/picture"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$name.'<span class="caret"></span></a>
          <ul class="dropdown-menu">
         <li><a href="http://drishticone.org/logout.php">&nbsp;&nbsp;<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;Logout</a></li>
        </ul>
     
        </li></ul>
	   ';
	   }
	   ?>
	    
     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
  <!--nav bar closed-->
</header>
</body>
</html>