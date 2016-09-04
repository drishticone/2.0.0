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
  <p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;Councils</p> 
 </div></div>
<a href="#">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div class="col-md-5">
  <img src="../sports/image/sports.jpg" width="108" height="108"></div></br></br>
 <p class="title2">Sports Council</p> 
 </a>
</div></div>




</div>
<!-- column end-->


<div class="col-md-9">
 
<div class="panel-body">
<div class="panel panel-default">
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <!--<li class="active"><a href="#about" role="tab" data-toggle="tab">About</a></li>-->
  <!-- <li><a href="#activity" role="tab" data-toggle="tab">News</a></li> -->
  </ul>
  
  <p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;Sports Council</p> 
 <hr>


  <div id="about"><p>
 This council is an initiative taken by the college for the all round development of the students. This council uplifts the interest of students towards various indoor and outdoor games and athletics. It provides the necessary break from the everyday monotonous life.</br>
 <b>Convener-Prof. B.P. Chaurasiya, Computer Science And Engineering Department.
</b>
</p>

<!-- Admin -->

<div class="row">
<div class="col-md-12">
  <p class="title2">Administration</p> </div></div><br>
<div class="row">
<div class="col-md-2 mid"></div>
<div class="col-md-4 mid">
 <a href="http://www.raghuraj.info/"><img src="http://drishticone.org/image/aboutus/rj.jpg" height="110" width="110" alt="Prof. Raghuraj Singh" class="img-circle"></a>
<br>
<a href="http://www.raghuraj.info/"><p> Prof. Raghuraj Singh<br /></a>
<span class="green">Patron</span></p>
</div>
<div class="col-md-4 mid" style="border-right:1px solid #eee">
 <img src="../csi/image/BP Chaurashiya.jpg"  height="110" width="110" alt="Prof. B.P. Chaurasiya" class="img-circle">
<br>
<p> Prof. B.P. Chaurasiya<br />
<span class="green">Convener</span></p> 
</div>
<div class="col-md-2 mid"></div>
</div><br><br>

<!-- Team Members -->

<div class="row">
<div class="col-md-12">
<center>
  <p class="title2">Team Captains</p> </div></div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/isha.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Isha Saxena(IT)<br />
<span class="green">Seceratory</span></p>
</div
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Sunil Yadav(IT)<br />
<span class="green">seceratory</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/asu.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Asutosh Singh(EE)<br />
<span class="green">joint-seceratory</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/aanchal.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Aanchal Dev Singh(ME)<br />
<span class="green">joint-seceratory</span></p>
</div>
<br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/mohana singh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Mohana Singh(CS)<br />
<span class="green">Basketball</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/pratiima.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Pratiima Singh(IT)<br />
<span class="green">Chess</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/kajal.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p>Kajal katiyar(EL)<br />
<span class="green">Table Tennis</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/devanshi.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Devanshi Shukla(IT)<br />
<span class="green">Carrom</span></p>
</div>
</div>
<br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/shilpa.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p>Shilpa Choowdhary(CS)<br />
<span class="green">Badmintion</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p>Isha Pandey(ME)<br />
<span class="green">Volleyball</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/pankaj.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Pankaj Gond(CSE)<br />
<span class="green">Cricket </span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/anurag sri.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Anurag Srivastava(CE)<br />
<span class="green">Football</span></p>
</div>
</div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/anurag verwa.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Anurag Verma(CSE)<br />
<span class="green">Carrom</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Sehwaz Khan(CSE)<br />
<span class="green">Volleyball</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/saurabh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Saurabh Jaiswal<br />
<span class="green">Table-Tennis</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/tushant.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Tushant Yadav<br />
<span class="green">Chess</span></p>
</div>
</div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/kumar shivam.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Kumar Shivam<br />
<span class="green">Basket-Ball</span></p>
</div>
</div><br>

<!-- row 2 -->
<!--
<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Senior Executive</span></p>
</div>

</div>

<div class="row">

<div class="col-md-12" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Senior Executive</span></p>
</div>
</div><br><br>
-->
<!-- Second Year Team Member -->
<!--
<div class="row">
<div class="col-md-12">
  <p class="title2">Second Year Team Members</p> </div></div><br>

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>
</div><br>
-->
<!-- row 2 -->
<!--
<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>
</div><br>
-->
<!-- row 3 -->
<!--
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>
</div>

<div class="row">

<div class="col-md-12" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>
</div><br><br>
-->
<!-- First Year Team Member -->
<!--
<div class="row">
<div class="col-md-12">
  <p class="title2">First Year Team Members</p> </div></div><br>
 -->
<!-- row 1 -->
<!--
<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p>  <br />
<span class="green">Co-Executive</span></p>
</div>


<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>
-->
<!-- row 2 -->
<!--
<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>
-->
<!-- ROW 3 -->
<!--
<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>
-->

<!-- row 4 -->
<!--
<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>

<div class="row">

<div class="col-md-12" style="border-right:1px solid #eee">
 <img src="../sports/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div>-->
 


</div>
</div>
</div>
</div>
</center>
<!--panel end-->



<!--------------------------------------------------------------------------------------------------------------------------- -->





</div>
<!-- column end-->
</div>











</div></div><!--container closed-->
<?php
include '../../footer.php';
?>
 </body>
</html>
