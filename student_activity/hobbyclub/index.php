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
  <img src="../hobbyclub/image/hobbyclub.jpg" width="108" height="108"></div></br></br>
<center><p class="title2"> Hobby Club</p></center>
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

 <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;Hobby Club</p></center>
 <hr>


  <div id="about"><p>
If a man has a talent and learns somehow to use the whole of it, he has gloriously succeeded, and won a satisfaction and a triumph few men ever know.' Hobby Club in KNIT proves this adage. Basically related with Electronics, this club now invites students from all branches to unleash and explore the potential of their underlying talents. </br>
 </br><b>Convener- Prof. Anil Kumar, Mechanical Engineering Department
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
<center><img src="../iste/image/default.jpg"  height="110" width="110" alt="Prof. Anil Kumar" class="img-circle">
<br>
<p><center>Prof. Anil Kumar<br />
<span class="green">Convenor</span></p>
</div>
<div class="col-md-2 mid"></div>
</div><br><br>

<!-- Team Members -->

<div class="row">
<div class="col-md-12">
 <center><p class="title2">Final Year Team Members</p></center></div></div><br>

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/final yr/pavan.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Pavan<br>Secretary</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/final yr/ayush seth.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Ayush Seth<br>Chief Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/final yr/avinash singh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Avinash Singh<br>Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/final yr/kajal katiyar.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Kajal Katiyar<br>Chief executive</span></p>
</div>
</div>
<br>
<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/final yr/vishakha tomar.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><br />
<span class="green">Vishakha Tomar<br>Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/final yr/ratnesh kesari.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><br />
<span class="green">Ratnesh Keshari<br>Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/final yr/pavan kumar giri.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><br />
<span class="green">Pavan Kumar Giri<br>Chief executive</span></p>
</div><br>
<!--
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 3 -->
<!--
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
</div>-->
</div><br><br>

<!-- Third year Team Members -->

<div class="row">
<div class="col-md-12">
 <center><p class="title2">Third Year Team Members</p></center></div></div><br>

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/3rd yr/ravi.png"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Ravi Narayan Mishra<br>Joint Secretary</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/3rd yr/manoj jaiswal.png"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Manoj Jaiswal<br>Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/3rd yr/pankaj kesharvani.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Pankaj Kesharvani<br>Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/3rd yr/raghav singh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Raghav Singh<br>Senior Executive</span></p>
</div>
</div><br>

<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/3rd yr/shashank singhal.png"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Shashank Singhal<br>Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/3rd yr/tejasvi kumar.png"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Tejasvi Kumar<br>Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../hobbyclub/image/3rd yr/yash gupta.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Yash Gupta<br>Senior Executive</span></p>
</div>
<!--
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
</div>-->
</div><br><br>

<!-- Second Year Team Member -->
<!--
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
<!--
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
<!--
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
<!--
<div class="row">
<div class="col-md-12">
 <center><p class="title2">First Year Team Members</p></center></div></div><br>

<!-- row 1 --><!--
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
<!--
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
<!--
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
<!--
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





</div></div></div>-->

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
