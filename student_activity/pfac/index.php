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
  <img src="../pfac/image/pfac.png"></div></br></br>
<center><p class="title2"> PFAC</p></center>
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
  
 <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;PFAC</p></center>
 <hr>


  <div id="about"><p>
Photography and Fine Arts Club, is a forum dedicated to encourage all aspects of ﬁne arts including visual arts and graphic design. The PFAC represents arts related activities throughout the academic year. It is the goal of the ﬁne arts Club to bring an active awareness and appreciation of the ﬁne arts on campus. </br>
 <b>Convener- Prof. Aruni Singh Computer Science And Engineering Department.
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
<center><img src="../pfac/image/ARUNI.jpg"  height="110" width="110" alt="Prof. Aruni Singh" class="img-circle">
<br>
<p><center>Prof. Aruni Singh<br />
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
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Navneet Malviya" class="img-circle">
<br>
<p><center>Navneet Malviya<br />
<span class="green">Secretary</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Arunima Swaroop" class="img-circle">
<br>
<p><center>Arunima Swaroop<br />
<span class="green">Secretary</span></p>
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
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Akash Singh Gaur" class="img-circle">
<br>
<p><center>Akash singh Gaur<br />
<span class="green">Joint Secretary</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Smriti Shri" class="img-circle">
<br>
<p><center>Smriti Shri<br />
<span class="green">Joint Secretary</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Shivang Ravat" class="img-circle">
<br>
<p><center>Shivang Ravat<br />
<span class="green">Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Isha Aghinotri" class="img-circle">
<br>
<p><center>Isha Aghinotri<br />
<span class="green">Senior Executive</span></p>
</div>
</div><br>

<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Akshay" class="img-circle">
<br>
<p><center>Akshay<br />
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
<center><img src="../pfac/image/swapnil.jpg"  height="100" width="100" alt="Swapnil Raj" class="img-circle">
<br>
<p><center>Swapnil Raj<br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Siddharth Sharma" class="img-circle">
<br>
<p><center>Siddhrath Sharma<br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Pranesh Diwedi" class="img-circle">
<br>
<p><center>Pranesh Diwedi<br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Adarsh Anand" class="img-circle">
<br>
<p><center>Adarsh Anand<br />
<span class="green">Executive</span></p>
</div>
</div><br>

<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Shakshi Agarwal" class="img-circle">
<br>
<p><center>Shakshi Agarwal<br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Manisha Chaudhary" class="img-circle">
<br>
<p><center>Manisha Chaudhary<br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Ankita" class="img-circle">
<br>
<p><center>Ankita<br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Shagun" class="img-circle">
<br>
<p><center>Shagun<br />
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
