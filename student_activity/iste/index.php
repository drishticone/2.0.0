<?php
$nav=8;
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
 <img src="../iste/image/iste.png"></div></br></br>
<center><p class="title2"> ISTE</p></center>
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


<div class="col-md-6">
 
<div class="panel-body">
<div class="panel panel-default">
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <!-- <li class="active"><a href="#about" role="tab" data-toggle="tab">About</a></li> -->
 <!-- <li><a href="#activity" role="tab" data-toggle="tab">News</a></li> -->
  </ul>
  
 <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;ISTE</p></center>
 <hr>


  <div id="about" style="margin-left:30px; margin-right:30px;"><p>
One of the most ingenious and scientiﬁc councils in KNIT, ISTE encompasses whole-dimensioned potential development of students. Round the year, it organizes numerous technical and non-technical events with loads of fun attached to it. ISTE realizes its sole objective of providing an impetus to the scientiﬁc knowledge of the students. </br>
 <b> Convener - Prof. Ajay Shekhar Pandey </b>
</p>
<div class="row">
<div class="col-md-12">
 <center><p class="title2">Administration</p></center></div></div>

<div class="row">
<div class="col-md-2 mid"></div>
<div class="col-md-3 mid">
<a href="http://www.raghuraj.info/"><img src="http://drishticone.org/image/aboutus/rj.jpg" height="110" width="110" alt="Prof. Raghuraj Singh" class="img-circle"></a>
<br>
<a href="http://www.raghuraj.info/"><p><center>Prof. Raghuraj Singh<br /></a>
<span class="green">Patron</span></p>
</div>
<div class="col-md-2 mid"></div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/Ajay.jpg"  height="110" width="110" alt="Prof. Ajay Shekhar Pandey" class="img-circle">
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
<img src="../iste/image/saumya.jpg"  height="100" width="100" alt="Saumya krishnatrey" class="img-circle">
<br>
<p><center>Saumya krishnatrey<br />
<span class="green">Chair person</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/shweta.jpg"  height="100" width="100" alt="Shweta vishwakarma" class="img-circle">
<br>
<p><center>Shweta vishwakarma<br />
<span class="green">Vice chairperson</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Ujjwal pandey" class="img-circle">
<br>
<p><center>Ujjwal pandey<br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/Amita.jpg"  height="100" width="100" alt="Amita Shukla" class="img-circle">
<br>
<p><center>Amita Shukla<br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="vipul gautam" class="img-circle">
<br>
<p>Vipul gautam<br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="shilpi Sharma" class="img-circle">
<br>
<p>Shilpi Sharma<br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="chandrapurnima bhatnagar" class="img-circle">
<br>
<p>Chandrapurnima Bhatnagar<br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Shantwana Dixit" class="img-circle">
<br>
<p>Shantwana Dixit<br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 3 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Adarsh srivastava" class="img-circle">
<br>
<p><center>Adarsh srivastava<br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Himanshu Kumar" class="img-circle">
<br>
<p><center>Himanshu Kumar<br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Vishu Goyal" class="img-circle">
<br>
<p><center>Vishu Goyal<br />
<span class="green">Chief executive</span></p>
</div>
</div><br><br>

<!-- Third year Team Members -->

<div class="row">
<div class="col-md-12">
 <center><p class="title2">Third Year Team Members</p></center></div></div><br>

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Pranav Goel" class="img-circle">
<br>
<p><center>Pranav Goel<br />
<span class="green">Secretary</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Samiksha Agarwal" class="img-circle">
<br>
<p><center>Samiksha Agarwal<br />
<span class="green">Joint Secretary</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Alpa garg" class="img-circle">
<br>
<p><center>Alpa Garg<br />
<span class="green">Event co-ordinator</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Sushant chauhan" class="img-circle">
<br>
<p><center>Sushant chauhan<br />
<span class="green">Treasurer</span></p>
</div>
</div><br>

<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Vinay Kumar chaubey" class="img-circle">
<br>
<p><center>Vinay Kumar chaubey<br />
<span class="green">Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Devanshi Shukla" class="img-circle">
<br>
<p><center>Devanshi Shukla<br />
<span class="green">Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Mayank Pathak" class="img-circle">
<br>
<p><center>Mayank Pathak<br />
<span class="green">Senior Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Abhijeet Tripathi" class="img-circle">
<br>
<p><center>Abhijeet Tripathi<br />
<span class="green">Senior Executive</span></p>
</div>

</div>

<div class="row">

<div class="col-md-12" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="Gaurav Srivastav" class="img-circle">
<br>
<p><center>Gaurav Srivastav<br />
<span class="green">Senior Executive</span></p>
</div>
</div><br><br>

<!-- Second Year Team Member -->

<div class="row">
<div class="col-md-12">
 <center><p class="title2">Second Year Team Members</p></center></div></div><br>

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Ashay Kr. Ashish" class="img-circle">
<br>
<p><center>Ashay Kr. Ashish<br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Roli Verma
" class="img-circle">
<br>
<p><center>Roli Verma
<br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Ayush Arela" class="img-circle">
<br>
<p><center>Ayush Arela<br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Anuja Gupta" class="img-circle">
<br>
<p><center>Anuja Gupta<br />
<span class="green">Executive</span></p>
</div>
</div><br>

<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Vipul Kapoor" class="img-circle">
<br>
<p><center>Vipul Kapoor<br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Anshul Varshney" class="img-circle">
<br>
<p><center>Anshul Varshney<br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Akriti Sharma" class="img-circle">
<br>
<p><center>Ayush Arela<br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Sneha Bharti" class="img-circle">
<br>
<p><center>Sneha Bharti<br />
<span class="green">Executive</span></p>
</div>
</div><br>

<!-- row 3 -->

<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Shashank Mishra" class="img-circle">
<br>
<p><center>Shashank Mishra<br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Nidhi Srivastava" class="img-circle">
<br>
<p><center>Nidhi Srivastava<br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Tushar Bansal" class="img-circle">
<br>
<p><center>Tushar Bansal<br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="Rajat Khemkha " class="img-circle">
<br>
<p><center>Rajat Khemkha<br />
<span class="green">Executive</span></p>
</div>
</div>

<div class="row">

<div class="col-md-12" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt=" Shikha Srivastava" class="img-circle">
<br>
<p><center>Shikha Srivastava<br />
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
<img src="../iste/image/default.jpg"  height="100" width="100" alt="AJAY PRAKASH PANDEY" class="img-circle">
<br>
<p><center>AJAY PRAKASH PANDEY<br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="DEEPAK TIWARI" class="img-circle">
<br>
<p><center>DEEPAK TIWARI<br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="NIKITA DUBEY " class="img-circle">
<br>
<p><center>NIKITA DUBEY <br />
<span class="green">Co-Executive</span></p>
</div>


<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="ANJALI MISHRA" class="img-circle">
<br>
<p><center>ANJALI MISHRA<br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>
<!-- row 2 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="SHIVANGI DWIVEDI" class="img-circle">
<br>
<p><center>SHIVANGI DWIVEDI<br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="LUV DUBEY" class="img-circle">
<br>
<p><center>LUV DUBEY<br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="DEEKSHA SHARMA" class="img-circle">
<br>
<p><center>DEEKSHA SHARMA<br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="PANKAJ KUMAR" class="img-circle">
<br>
<p><center>PANKAJ KUMAR<br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>

<!-- ROW 3 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="CHIRAG GOYAL" class="img-circle">
<br>
<p><center>CHIRAG GOYAL<br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="ARPIT BAJPAI" class="img-circle">
<br>
<p><center>ARPIT BAJPAI<br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="YASH AGRAWAL" class="img-circle">
<br>
<p><center>YASH AGRAWAL<br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="SHIVANGI AWASTHI" class="img-circle">
<br>
<p><center>SHIVANGI AWASTHI<br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>

<!-- row 4 -->

<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="RAGHAV AGRAWAL" class="img-circle">
<br>
<p><center>RAGHAV AGRAWAL<br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="ABHISHEK KUSHWAHA" class="img-circle">
<br>
<p><center>ABHISHEK KUSHWAHA<br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="AYUSH BAJPAI" class="img-circle">
<br>
<p><center>AYUSH BAJPAI<br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="../iste/image/default.jpg"  height="100" width="100" alt="PRAVEEN KUMAR TIWARI" class="img-circle">
<br>
<p><center>PRAVEEN KUMAR TIWARI<br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>

<div class="row">

<div class="col-md-12" style="border-right:1px solid #eee">
<center><img src="../iste/image/default.jpg"  height="100" width="100" alt="KEERTI" class="img-circle">
<br>
<p><center>KEERTI<br />
<span class="green">Co-Executive</span></p>
</div>
</div>
 
</div></div></div>

</div>
<!--panel end-->



<!----------------------------------------------------------------------------------------------------------------------------->



<div class="col-md-3"><!--right column start-->
<!--important notice start-->

<div class="panel panel-default">
  <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>&nbsp;&nbsp;Important Notice</p></center>
 <hr>
 <div class="mCustomScrollbar notice" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:380px; overflow:hidden; line-height:35px;padding:5px;">
 <a href="dashboard/notice_upload/notice/56ab8249e683a.docx"  title="By&nbsp;Rajat Khemka&nbsp;on&nbsp;2016-01-29 08:16:25" download><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp;&nbsp;Drishticone Team Interview</a><br /><a href="dashboard/notice_upload/notice/55e498a14064c.pdf"  title="By&nbsp;nbsp;Utsav Srivastav&nbsp;on&nbsp;2015-08-31 11:10:43" download><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp;&nbsp;Academic Calender 2015-16</a><br /> 
 </div>
 <hr>
 <a href="#" style="float:right;"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp;&nbsp;Archive</a>
 </div>
  </div>



</div>
<!-- column end--></div>











</div></div><!--container closed-->
<?php
include '../../footer.php';
?>
 </body>
</html>