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
<center>
<div class="panel-body">
<div class="panel panel-default">
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <!--<li class="active"><a href="#about" role="tab" data-toggle="tab">About</a></li>-->
  <!-- <li><a href="#activity" role="tab" data-toggle="tab">News</a></li> -->
</ul>
  <p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;PFAC</p>
 <hr>
<div id="about"><p>
Photography and Fine Arts Club, is a forum dedicated to encourage all aspects of ﬁne arts including visual arts and graphic design. The PFAC represents arts related activities throughout the academic year. It is the goal of the ﬁne arts Club to bring an active awareness and appreciation of the ﬁne arts on campus. </br>
 <b>Convener- Prof. Aruni Singh Computer Science And Engineering Department.
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
 <img src="../pfac/image/ARUNI.jpg"  height="110" width="110" alt="Prof. Aruni Singh" class="img-circle">
<br>
<p> Prof. Aruni Singh<br />
<span class="green">Convener</span></p>
</div>
<div class="col-md-2 mid"></div>
</div><br><br>
<!-- Team Members -->
<div class="row">
<div class="col-md-12">
  <p class="title2">Final Year Team Members</p> </div></div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Akash Singh Gaur.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Akash Singh Gaur<br />
<span class="green">Secretary(Boys)</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Smriti Shri.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Smriti Shri<br />
<span class="green">Secretary (Girls)</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Abhinav.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Abhinav<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Akshay Dixit.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Akshay Dixit<br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 2 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Ashutosh Singh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Ashutosh Singh<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Dewanshi.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Dewanshi Shukla<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Isha Agnihotri.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Isha Agnihotri<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Kajal Katiyar.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Kajal Katiyar<br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 3 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Pragati Rajput.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Pragati Rajput<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Pravesh Kumar.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Pravesh Kumar<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Ratnesh Singh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Ratnesh Singh<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Ritika Singh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Ritika Singh<br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 4 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Saurabh Jaiswal.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Saurabh Jaiswal<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Shashank Sinha.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Shashank Sinha<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Shivang Rawat.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Shivang Rawat<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Sonali Gupta.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Sonali Gupta<br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 5 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Suhani Saxena.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Suhani Saxena<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Sunidhi.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Sunidhi Raj Singh<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Aishwarya.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Aishwarya Chowdhari<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Swati Patel.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Swati Patel<br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 6 -->
<div class="row">
<div class="col-md-12" style="border-right:1px solid #eee">
 <img src="../pfac/image/Sushmita Singh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Sushmita Singh<br />
<span class="green">Chief executive</span></p>
</div>
</div><br><br>
<!-- Third year Team Members -->
<div class="row">
<div class="col-md-12">
  <p class="title2">Third Year Team Members</p> </div></div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Manisha Chaudhari.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Manisha chaudhari<br />
<span class="green">Joint Secretary(Girls)</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Adarsh Anand.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Adarsh Anand<br />
<span class="green">Joint Secretary(Boys)</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Ankita Singh.jpg"  height="100" width="100" alt="Ankita Singh" class="img-circle">
<br>
<p> Ankita Singh<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Anuja Gupta.jpg"  height="100" width="100" alt="Anuja Gupta" class="img-circle">
<br>
<p> Anuja Gupta<br />
<span class="green">Senior Executive</span></p>
</div>
</div><br>
<!-- row 2 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Ayush Aman.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Ayush Aman<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Deepangi Mittal.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Deepangi Mittal<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Harsh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Harsh Kumar Shukla<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Madhav Gopal.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Madhav Gopal<br />
<span class="green">Senior Executive</span></p>
</div>
</div>
<!--row 3-->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Pranesh Dwivedi.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Pranesh Dwivedi<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Pratiksha Singh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Pratiksha Singh<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Priyanshi Agarwal.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Priyanshi Agarwal<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Rohit Kesarwani.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Rohit Kesarwani<br />
<span class="green">Senior Executive</span></p>
</div>
</div>
<!--row 4-->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Sakshi Agarwal.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Sakshi Agarwal<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Shagun Gangwar.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Shagun Gangwaar<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Shalu Yadav.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Shalu Yadav<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Shubham Srivastava.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Shubham Srivastava<br />
<span class="green">Senior Executive</span></p>
</div>
</div>
<!--row 5-->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Siddharth.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Shidhhartha Sharma<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Swapnil Raj.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Swapnil Raj<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Vishal Kumar Rana.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Vishal Kumar Rana<br />
<span class="green">Senior Executive</span></p>
</div>
</div><br><br>
<!-- Second Year Team Member -->
<div class="row">
<div class="col-md-12">
  <p class="title2">Second Year Team Members</p> </div></div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Deepali Kumari.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Deepali Kumari<br />
<span class="green">Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Ekta Singh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Ekta Singh<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Gargi Verma.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Gargi Verma<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Ishan Pandey.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Ishan Pandey<br />
<span class="green">Executive</span></p>
</div>
</div><br>
<!-- row 2 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Kamal Phoolwani.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> kamal Phoolwani<br />
<span class="green">Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Nikita Dubey.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Nikita Dubey<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Pradeepti Vishwakarma.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Pradeepti Vishwakarma<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Pratibha chawdhary.png"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Pratibha Chawdhary<br />
<span class="green">Executive</span></p>
</div>
</div><br>
<!-- row 3 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Priyanshi Singh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Priyanshi Singh<br />
<span class="green">Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Rishabh Gupta.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Rishabh Gupta<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/riya singh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Riya Singh<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/saumya singh.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Saumya Singh<br />
<span class="green">Executive</span></p>
</div>
</div>
<!--row 4-->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Shivangi Diwadi.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Shivangi Dwivedi<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Shreesh Pandey.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Shreesh Pandey<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Shubham Singh.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Shubham Singh<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Shweta Kamal.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Shweta Kamal<br />
<span class="green">Executive</span></p>
</div>
</div>
<!--row 5-->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Simple Singh.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Simple Singh<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Sudhanshu Shekhar.jpeg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Shudhanshu Shekhar<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Surya Prakash Gond.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Surya Prakash Gond<br />
  <span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Swastika mishra.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Swastika Mishra<br />
<span class="green">Executive</span></p>
</div>
</div>
<!--row 6-->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Tapan Kesarwani.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Tapan Kesarwani<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Tushar Saxena.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> Tushar Saxenna<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/Yogita Chand.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> Yogita Chand<br />
<span class="green">Executive</span></p>
</div>
</div><br><br>
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
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p>  <br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>-->
<!-- row 2 -->
<!--
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
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
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
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
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>
<div class="row">
<div class="col-md-12" style="border-right:1px solid #eee">
 <img src="../pfac/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div>-->
</div>
</div>
</div>
</center>
</div>
<!--panel end-->
<!--------------------------------------------------------------------------------------------------------------------------- -->
</div>
<!-- column end-->
</div>
</div>
</div>
<!--container closed-->
<?php
include '../../footer.php';
?>
 </body>
</html>
