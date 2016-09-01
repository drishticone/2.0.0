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
<img src="../lit/image/lit.png"></div></br></br>
<p class="title2"> Literary Council</p>
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
<center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;Literary Council</p></center>
<hr>
<div id="about"><p>
Literature, a journey that inscribed in pages and powered by the imagination of the writers, ultimately opens the gate to touch the hearts of readers. So, to make your words alive more than ever before we welcome you to our own literary council. It runs under the guidance of honourable Prof. Pradeep Raj Sagar. This council aims at encouraging and enhancing the vocational and writing skill of the students to the level where they can touch the horizon of inﬂuential writer and expert speaker. This council comprised of knowledgeable and enthusiastic members who welcomes the debut authors and veteran writers with open arms .So comrades, come and participate in varied literary events.</br>
</br>
 <b>Convener- Prof. Pradeep Kumar, Applied Sciences and Management.</b>
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
<center><img src="../lit/image/pradeep.jpg"  height="110" width="110" alt="Prof. Pradeep Kumar" class="img-circle">
<br>
<p><center>Prof. Pradeep Kumar<br />
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
<center><img src="../lit/image/malhaar.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p><center>Malhaar Srivastava<br />
<span class="green">Secretary</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/sushmita.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p><center>Sushmita Singh<br />
<span class="green">Secretary</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/akan.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Akanksha Raghuvansi<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/ali.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Ali Waris Khan<br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 2 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/archit.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Archit Singh<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/komal.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Komal Prasad<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/pooja.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Pooja Yadav<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/rahul.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Rahul Tripathi<br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 3 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/sandeep.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Sandeep Shukla<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/smir.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Smriti Shri<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/sunidhi.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Sunidhi Raj Singh<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/tejus.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Tejus Agarwal<br />
<span class="green">Chief executive</span></p>
</div>
</div>
<br>
<!-- row 4 -->
<div class="col-md-4 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/uma.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Uma Singh<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-4 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/vaibhav.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Vaibhav Singh<br />
<span class="green">Chief executive</span></p>
</div>
<div class="col-md-4 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/ayush.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Ayush<br />
<span class="green">Chief executive</span></p>
</div>
</div><br><br>
<!-- Third year Team Members -->
<div class="row">
<div class="col-md-12">
<center><p class="title2">Third Year Team Members</p></center></div></div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/kamakshi.jpg"  height="100" width="100" alt="Malhaar Srivastava" class="img-circle">
<br>
<p><center>Kamakshi Awasthi<br />
<span class="green">Joint Secretary</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/anurag.jpg"  height="100" width="100" alt="Sushmita Singh" class="img-circle">
<br>
<p><center>Anurag Srivastava<br />
<span class="green">Joint Secretary</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/aanchal.jpg"  height="100" width="100" alt="Sandeep Shukla" class="img-circle">
<br>
<p><center>Aanchal Dev Singh<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/anjali.jpg"  height="100" width="100" alt="Vaibhav  Singh" class="img-circle">
<br>
<p><center>Anjali Patel<br />
<span class="green">Senior Executive</span></p>
</div>
</div><br>
<!-- row 2 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/ankita.jpg"  height="100" width="100" alt="Ali Waris Khan" class="img-circle">
<br>
<p><center>Ankita Singh Chauhan<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/ayush.jpg"  height="100" width="100" alt="Rahul Tripathi" class="img-circle">
<br>
<p><center>Ayush Kumar Singh<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/devo.jpg"  height="100" width="100" alt="Mayank Pathak" class="img-circle">
<br>
<p><center>Devoshree Mukharjee<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/harsh.jpg"  height="100" width="100" alt="Tejas Agarwal" class="img-circle">
<br>
<p><center>Harsh Shukla<br />
<span class="green">Senior Executive</span></p>
</div>
</div><br>
<!--row 3-->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/himanshu.jpg"  height="100" width="100" alt="Komal Prasad" class="img-circle">
<br>
<p><center>Himanshu Ranjan<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/pari.jpg"  height="100" width="100" alt="Sushmita Singh" class="img-circle">
<br>
<p><center>Praneeta B. Sachan<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="Pooja Yadav" class="img-circle">
<br>
<p><center>Shailesh<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="Uma Singh" class="img-circle">
<br>
<p><center>Shashank Mishra<br />
<span class="green">Senior Executive</span></p>
</div>
</div>
<!--row 4-->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="Ayush Seth" class="img-circle">
<br>
<p><center>Shubham Gupta<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/shubham.jpg"  height="100" width="100" alt="Ayush Seth" class="img-circle">
<br>
<p><center>Shubham Saxena<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/tushar.jpg"  height="100" width="100" alt="Ayush Seth" class="img-circle">
<br>
<p><center>Tushar Bansal<br />
<span class="green">Senior Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/vagesh.jpg"  height="100" width="100" alt="Ayush Seth" class="img-circle">
<br>
<p><center>Vageesh Mishra<br />
<span class="green">Senior Executive</span></p>
</div>
</div>
<!--row 5-->
<div class="row">
<div class="col-md-12" style="border-right:1px solid #eee">
<center><img src="../lit/image/vipul.jpg"  height="100" width="100" alt="Ayush Seth" class="img-circle">
<br>
<p><center>Vipul Kapoor<br />
<span class="green">Senior Executive</span></p>
</div>
</div><br><br>
<!-- Second Year Team Member -->
<div class="row">
<div class="col-md-12">
<center><p class="title2">Second Year Team Members</p></center></div></div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/anjali2.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Anjali Mishra<br />
<span class="green">Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/anushka.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Anushka Agrawal<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/apoorva.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Apoorva Swaroop<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/harshitm.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Harshit Mittal<br />
<span class="green">Executive</span></p>
</div>
</div><br>
<!-- row 2 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/harshit.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Harshit Agarwal<br />
<span class="green">Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/nisha.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Nisha Madhav<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/pradeepti.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Pradeepti Vishwakarma<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/riya.png"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Riya Singh<br />
<span class="green">Executive</span></p>
</div>
</div><br>
<!-- row 3 -->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/rummana.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Rummana Tabassum Ansari<br />
<span class="green">Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/sambhavi.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Sambhavi Pandey<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/sandeep2.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Sandeep Nigam<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/shivam.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p><center>Shivam Sharma<br />
<span class="green">Executive</span></p>
</div>
</div>
<!--row 4-->
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/shivesh.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Shivesh Rai<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/surya.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Surya Prakash<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/toshendra.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Toshendra Kumar Singh<br />
<span class="green">Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/upendra.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Upendra Kumar Singh<br />
<span class="green">Executive</span></p>
</div>
</div>
<!--row 5-->
<div class="row">
<div class="col-md-12" style="border-right:1px solid #eee">
<center><img src="../lit/image/vaibhav2.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center>Vaibhav Gupta<br />
<span class="green">Executive</span></p>
</div>
</div><br><br>
<!-- First Year Team Member -->
<!--
<div class="row">
<div class="col-md-12">
 <center><p class="title2">First Year Team Members</p></center></div></div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p><center> <br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>
<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive<span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
<div class="col-md-3 mid" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>
<div class="row">
<div class="col-md-12" style="border-right:1px solid #eee">
<center><img src="../lit/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p><center><br />
<span class="green">Co-Executive</span></p>
</div>
</div>
-->
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
