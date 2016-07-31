<?php
$nav=3;
include '../../fblogin.php';
include '../../header.php';
 include('../../dbConnection.php');
?>

<!doctype html>
<html>
<head>
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
</head>

<body>
<div style="margin-left:30px; margin-right:30px;">
<div class="row">
<div class="col-md-3">
<div class="panel panel-default">
  <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;Councils</p></center>
 </div></div>
<a href="#">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="../electrum/image/ELECTRUM.jpg" width="108" height="108"></div></br></br>
<center><p class="title2"> Electrum</p></center>
 </a>
</div></div>

<!--event start-->
<div class="panel panel-default">
  <div class="panel-body">
<center> <p class="title2"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;&nbsp;Upcoming Events</p></center>
 <hr>
<div class="mCustomScrollbar events" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; line-height:35px;padding:5px;">
 
<a href="http://drishticone.org/events/"><div class="panel panel-default event hoverable" style="padding:0px;">
  <div class="panel-body" style="line-height:10px;">
  <p style="color:red;"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;&nbsp;Kavi-Sammelan</p>
  <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;2016-04-02</p><p><span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;15:30:00</p>
  <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;&nbsp;CSA</p>
  </div></div></a></div>
<hr>
</div></div>
<!--event end-->


</div>
<!-- column end-->


<div class="col-md-9">
 
<div class="panel-body">
<div class="panel panel-default">
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="active"><a href="#about" role="tab" data-toggle="tab">About</a></li>
  <li><a href="#activity" role="tab" data-toggle="tab">Sign Up</a></li>
  </ul>
  
 <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;Electrum</p></center>
 <hr>


  <div id="about" style="padding:10px"><p>
Dedicated to electrical engineering disciples, this forum basically invokes and assists students in realizing their passion. Robotics is one among those of the spell binding events organized by the council. It keeps the college rapt when the hand crafted robots act and decide on their own in the arena. </br>
 </br><b> Convener-Prof. Ajay Shekhar Pandey
</b>
</p>

<!-- Admin -->

<div class="row">
<div class="col-md-12">
 <center><p class="title2">Administration</p></center></div></div><br>

<div class="row">
<div class="col-md-2 mid"></div>
<div class="col-md-4 mid">
<center><a href="http://www.raghuraj.info/"><img src="http://drishticone.org/image/aboutus/rj.jpg" height="110" width="110" alt="Prof. Raghuraj Singh" class="img-circle"></a>
<br>
<a href="http://www.raghuraj.info/"><p><center>Prof. Raghuraj Singh<br /></a>
<span class="green">Patron</span></p>
</div>

<div class="col-md-4 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/Ajay.jpg"  height="110" width="110" alt="Prof. Ajay Shekhar Pandey" class="img-circle">
<br>
<p><center>Prof. Ajay Shekhar Pandey<br />
<span class="green">Convener</span></p>
</div>
<div class="col-md-2 mid"></div>
</div><br><br>

<!-- Team Members -->

<div class="row">
<div class="col-md-12">
 <center><p class="title2">Final Year Team Members</p></center></div></div><br>

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Chair person</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Vice chairperson</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 3 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Chief executive</span></p>
</div>
</div><br><br>

<!-- Third year Team Members -->

<div class="row">
<div class="col-md-12">
 <center><p class="title2">Third Year Team Members</p></center></div></div><br>

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Secretary</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Joint Secretary</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Event co-ordinator</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Treasurer</span></p>
</div>
</div><br>

<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Senior Executive</span></p>
</div>

</div>

<div class="row">

<div class="col-md-12" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Senior Executive</span></p>
</div>
</div><br><br>

<!-- Second Year Team Member -->

<div class="row">
<div class="col-md-12">
 <center><p class="title2">Second Year Team Members</p></center></div></div><br>

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive</span></p>
</div>
</div><br>

<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive</span></p>
</div>
</div><br>

<!-- row 3 -->

<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p><center><br />
<span class="green">Executive</span></p>
</div>
</div>

<div class="row">

<div class="col-md-12" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive</span></p>
</div>
</div><br><br>

<!-- First Year Team Member -->

<div class="row">
<div class="col-md-12">
 <center><p class="title2">First Year Team Members</p></center></div></div><br>
 
<!-- row 1 -->
<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p><center> <br />
<span class="green">Co-Executive</span></p>
</div>


<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>
<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>

<!-- ROW 3 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>

<!-- row 4 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>

<div class="row">

<div class="col-md-12" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
</div>
 


</div></div></div>

</div>
<!--panel end-->



<!----------------------------------------------------------------------------------------------------------------------------->





</div>
<!-- column end--></div>











</div></div><!--container closed-->
<?php
include '../../footer.php';
?>
 </body>
</html>
