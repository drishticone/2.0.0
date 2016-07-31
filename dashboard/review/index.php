<?php
session_start();
if($_SESSION['post']!='admin' || $_SESSION['power']!=2)
{ 
header("location:http://drishticone.org/error.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Drishticone || Review Article</title>
<link  rel="stylesheet" href="../css/bootstrap.min.css"/>
<link  rel="stylesheet" href="../css/bootstrap-theme.min.css"/>
<link rel="stylesheet" href="../../css/main.css"/>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"  type="text/javascript"></script> 
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
<?php if(@$_GET['w1'])
{echo'<script>alert("'.@$_GET['w1'].'");</script>';}
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
	   <li> <a  href="http://drishticone.org/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Home</a></li>
      <li> <a  href="#"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>&nbsp;&nbsp;Review&nbsp;Article</a></li>
       
      </ul>
<?php
  $name=$_SESSION['name'];
	   $id=$_SESSION['id'];
	  echo ' <ul class="nav navbar-nav navbar-right"><li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img  height="30" width="30" style="margin:-10px;" src="https://graph.facebook.com/'.$id.'/picture"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$name.'<span class="caret"></span></a>
          <ul class="dropdown-menu">
         <li><a href="http://drishticone.org/logout.php">&nbsp;&nbsp;<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;Logout</a></li>
        </ul>
     
        </li></ul>
	   ';
	   ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
  <!--nav bar closed-->

</header>


<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
  <div class="panel-body">
   <center><p class="title1"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>&nbsp;&nbsp;Review&nbsp;Article</p></center>

    <?php if(@$_GET['w'])
   {
   echo '<p style="color:green"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp;&nbsp;'.@$_GET['w'].'</p>';
   }?>


<?php
include('../../dbConnection.php');
$q=mysqli_query($con,"SELECT * FROM article where flag ='0' ") or die ("Error 89");
$count= mysqli_num_rows($q);
if($count==0)
{
echo '<div ><p style="color:green"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;&nbsp;Ooppss !! No article is for review.Thank you for visit.</p></div>';
}
else
{
echo '<table class="table table-striped ">
<tr><td><b>S.N.</b></td><td><b>Title</b></td><td></td><td></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q))
{
$aid=$row['aid'];
$title=$row['title'];
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td><a href="review.php?aid='.$aid.'" target="_blank" class="btn btn-primary sub hoverable" style="background:#1d9d74; border-radius:0px;">Review&nbsp;&nbsp;<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
<td><a href="delete.php?aid='.$aid.'" class="btn btn-primary sub hoverable" style="background:#1d9d74; border-radius:0px;">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
</tr>';

}
echo '</table>';

}
?>
<hr>



</div></div><!--panel end-->

<!--web corner review start-->

<div class="panel panel-default">
  <div class="panel-body">
   <center><p class="title1"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>&nbsp;&nbsp;Review&nbsp;Web&nbsp;Corner</p></center>

    <?php if(@$_GET['w1'])
   {
   echo '<p style="color:green"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp;&nbsp;'.@$_GET['w1'].'</p>';
   }?>


<?php
include('../../dbConnection.php');
$q=mysqli_query($con,"SELECT * FROM web where flag ='0' ") or die ("Error 158");
$count= mysqli_num_rows($q);
if($count==0)
{
echo '<div ><p style="color:green"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;&nbsp;Ooppss !! No web corner link is for review.Thank you for visit.</p></div>';
}
else
{
echo '<table class="table table-striped ">
<tr><td><b>S.N.</b></td><td><b>Title</b></td><td></td><td></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q))
{
$aid=$row['aid'];
$title=$row['title'];
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td><a href="wreview.php?aid='.$aid.'" target="_blank" class="btn btn-primary sub hoverable" style="background:#1d9d74; border-radius:0px;">Review&nbsp;&nbsp;<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
<td><a href="wdelete.php?aid='.$aid.'" class="btn btn-primary sub hoverable" style="background:#1d9d74; border-radius:0px;">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
</tr>';

}
echo '</table>';

}
?>
<hr>



</div></div><!--panel end-->










<!--web corner reviw end-->












</div></div>
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