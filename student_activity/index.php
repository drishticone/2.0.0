<?php
$nav=3;
include '../fblogin.php';
include '../header.php';
 include('../dbConnection.php');
?>





<body>
<title>Drishticone || News</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<style>
.title2
{
color:#1d9d74;
font-size:20px;
font-weight:200;
}

</style>
<script>
$(function() {
    while( $('#fitin div').height() > $('#fitin').height() ) {
        $('#fitin div').css('font-size', (parseInt($('#fitin div').css('font-size')) - 1) + "px" );
    }
});
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=900138460052258";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div style="margin-left:30px; margin-right:30px;">
<div class="row">
<div class="col-md-3">
<div class="panel panel-default">
  <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;Councils</p></center>
 </div></div>
<a href="lit">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="lit/image/lit.png" width="90" height="108"></div></br></br>
<center><p class="title2"> Literary Council</p></center>

</div></div></a>
<a href="pfac">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="pfac/image/pfac.png" width="90" height="108"></div></br></br>
<center><p class="title2" aling="right">PFAC</p></center>

</div></div></a>
<a href="cult">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="cult/image/cult.jpg" width="90" height="108"></div></br></br>
<center><p class="title2">Cultural Council</p></center>

</div></div></a>
<a href="sports"><div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="sports/image/sports.jpg" width="90" height="108"></div></br></br>
<center><p class="title2">Sports Council</p></center>

</div></div></a>
<a href="hobbyclub"><div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="hobbyclub/image/hobbyclub.jpg" width="90" height="108"></div></br></br>
<center><p class="title2">Hobby Council</p></center>

</div></div></a>


</div>
<!-- column end-->
<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;News</p></center>
 <hr>
<div class="row">

<?php
$q=mysqli_query($con ,"SELECT * FROM article  where flag='1' ORDER BY time DESC ") or die ("Error");
while($row=mysqli_fetch_array($q))
{
$aid=$row['aid'];
$title=$row['title'];
$writer_id=$row['writer_id'];
$writer_name=$row['writer_name'];
$type=$row['type'];
$photo=$row['photo'];
$article=$row['article'];

echo '
<a href="'.$article.'"><div class="col-md-12">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="row">
  <div class="col-md-6  col-sm-12">
  <div style="height:260px; overflow:hidden; margin:0px; padding:0px;"><img height="260" width="100%"  src="'.$photo.'" img-responsive /></div>
  </div>
  <div class="col-md-6  col-sm-12">
 <div  id="fitin" >'.$title.'</div>
<hr />

<span style="float:left;color:#1d9d74;">'.$type.'</span>
<span style="float:right"><a style="float:right" target="_blank" href="https://facebook.com/'.$writer_id.'"><span style="color:#1d9d74;">By&nbsp;:&nbsp;</span>'.$writer_name.'</a></span>
</div></div></div></div>

</div></a>
<!--panel end-->';}
?>










</div><!--row end-->
</div></div>
</div>

<!----------------------------------------------------------------------------------------------------------------------------->


<div class="col-md-3">
<div class="panel panel-default">
  <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;Forums</p></center>
</div></div>
<a href="iste">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="iste/image/iste.png"></div></br></br>
<center><p class="title2"> ISTE</p></center>

</div></div></a><a href="iei">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="iei/image/iei.png" a="left"></div></br></br>
<center><p class="title2"> IEI</p></center>

</div></div></a><a href="csi">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="csi/image/csi.jpg"></div></br></br>
<center><p class="title2"> CSI</p></center>

</div></div></a><a href="electrum">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="electrum/image/ELECTRUM.jpg" width="130" height="110"></div></br></br>
<center><p class="title2">Electrum</p></center>

</div></div></a><a href="mef">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="mef/image/mef.jpg" width="130" height="130"></div></br></br>
<center><p class="title2"> MEF</p></center>

</div></div></a>


</div>
<!-- column end--></div>











</div></div><!--container closed-->

 </body>

<?php
include '../footer.php';
?>
