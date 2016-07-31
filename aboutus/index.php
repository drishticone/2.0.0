<?php
$nav=8;
include '../fblogin.php';
include '../header.php';
 include('../dbConnection.php');
?>

<!doctype html>
<html>
<head>
<title>Drishticone || About Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 


<style>
.title2
{
color:#1d9d74;
font-size:20px;
font-weight:200;
}

.caption{
color:#666666;
}

.green
{
color:#1d9d74;
font-size:17px;
font-weight:150;
}
.mid
{
text-align:center;
padding:20px;
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
<div class="col-md-12">
<div class="panel panel-default">
 <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;About Us</p></center>
<hr>
<p style="font-size:15px; line-height:30px; padding:5px; letter-spacing:.7px;">

DrishtICONe is the official newsletter of <a href="http://knit.ac.in" target="_blank" ><b>Kamla Nehru Institute of Technology, Sultanpur</b></a>. We are a Non-profit organiation created by and for the students of the college under administrative patronage of the college. Copies of Drishticone Newsletter are delivered to the students on campus and soft copies are mailed to the faculty and alumni.The entire team comprises of students from the institute, and its mission is to report and analyze events that affect the campus, and to be the voice of the KNIT Sultanpur student community by being the media force. Besides, we also organize social activities like blood donation camp every year and King George's Medical University,Lucknow has credited us the star performers in saving mankind. Drishticone surely lives upto its nickname "D Icon". It is a moment of pride to see that amongst all the other government colleges of Uttar Pradesh, KNIT Sultanpur is one of the few colleges having a newsletter of it's own.
</p>
<div class="row">
<div class="col-md-4 col-md-offset-4"><hr></div></div>

<!--administration and founder start-->

<div class="row">
<div class="col-md-12">
 <center><p class="title2">Administration</p></center>
 <div class="row">
<div class="col-md-3 mid"></div>
<div class="col-md-3 mid">
<a href="http://www.raghuraj.info/"><img src="http://drishticone.org/image/aboutus/rj.jpg" height="140" width="140" alt="Prof. Raghuraj Singh" class="img-circle"></a>
<br>
<a href="http://www.raghuraj.info/"><p>Prof. Raghuraj Singh<br /></a>
<span class="green">Patron</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
<img src="http://drishticone.org/image/aboutus/deep.jpg"  height="140" width="140" alt="Dr Deependra Singh" class="img-circle">
<br>
<p>Dr Deependra Singh<br />
<span class="green">Convener</span></p>
</div>
<div class="col-md-3 mid"></div>
</div></div>

<div class="col-md-12">
 <center><p class="title2">Founders</p></center>
 <div class="row">
<div class="col-md-6 mid">
<img src="http://drishticone.org/image/aboutus/mohini.jpg" height="140" width="140" alt="Mohini Gupta" class="img-circle">
<br>
<p>Mohini Gupta<br />
<span class="green">Co-Founder</span></p>
</div>

<div class="col-md-6 mid">
<img src="http://drishticone.org/image/aboutus/rahul.jpg"  height="140" width="140" alt="Rahul Mishra" class="img-circle">
<br>
<p>Rahul Mishra<br />
<span class="green">Co-Founder</span></p>
</div>

</div></div>
</div>
</div>
<!--administration and founder closed-->

<div class="row">
<div class="col-md-4 col-md-offset-4"><hr></div></div>


<!--final year start-->
<div class="row">
 <center><p class="title2">Final Year Team Members</p></center>
 
<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/anurag.jpg"  height="140" width="140" alt="Anurag Pandey" class="img-circle">
<br>
<p>Anurag Pandey<br />
<span class="green">Head</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/kriti.jpg"  height="140" width="140" alt="KRITI NARAIN" class="img-circle">
<br>
<p>Kriti Narain<br />
<span class="green">Co-Editor</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/utsav.jpg"  height="140" width="140" alt="UTSAV SRIVASTAV" class="img-circle">
<br>
<p>Utsav Srivastav<br />
<span class="green">Co-Editor</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/mohit.jpg"  height="140" width="140" alt="MOHIT KUMAR" class="img-circle">
<br>
<p>Mohit Kumar<br />
<span class="green">Literary Head</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/shivam.jpg"  height="140" width="140" alt="SHIVAM AGARWAL" class="img-circle">
<br>
<p>Shivam Agarwal<br />
<span class="green">Literary Head</span></p>
</div>



<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/shubham.jpg"  height="140" width="140" alt="SHUBHAM SINGH" class="img-circle">
<br>
<p>Shubham singh<br />
<span class="green">Management Head</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/praveen.jpg"  height="140" width="140" alt="PRAVEEN PANDEY" class="img-circle">
<br>
<p>Praveen Pandey<br />
<span class="green">Management Head</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/afsana.jpg"  height="140" width="140" alt="AFSHAN ALAMEEN" class="img-circle">
<br>
<p>Afshan Alameen<br />
<span class="green">Designing Head</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/vipin.jpg"  height="140" width="140" alt="Vipin Srivastav" class="img-circle">
<br>
<p>Vipin Srivastava<br />
<span class="green">Web-Development Head </span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/nidhi.jpg"  height="140" width="140" alt="NIDHI SINGH" class="img-circle">
<br>
<p>Nidhi Singh<br />
<span class="green">Web-Development Head </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/rahul4.jpg"  height="140" width="140" alt="RAHUL SINGHANIA" class="img-circle">
<br>
<p>Rahul Singhania<br />
<span class="green">Photography Head </span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/nikhils.jpg"  height="140" width="140" alt="Nikhil Singh" class="img-circle">
<br>
<p>Nikhil Singh<br />
<span class="green">Literary Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/kavya.jpg"  height="140" width="140" alt="Rana Kavyakar " class="img-circle">
<br>
<p>Rana Kavyakar <br />
<span class="green">Literary Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/shewta.jpg"  height="140" width="140" alt="Shweta Vishwakarma" class="img-circle">
<br>
<p>Shweta Vishwakarma<br />
<span class="green">Literary Team</span></p>
</div>




<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/aka.jpg"  height="140" width="140" alt="ANKESHWARYA" class="img-circle">
<br>
<p>Ankeshwarya<br />
<span class="green">Photography Team </span></p>
</div>



<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/nav3.jpg"  height="140" width="140" alt="NAVNEET MALVIYA" class="img-circle">
<br>
<p>Navneet Malviya<br />
<span class="green">Management Team</span></p>
</div>



<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/harshita.jpg"  height="140" width="140" alt="HARSHITA VERMA" class="img-circle">
<br>
<p>Harshita Verma<br />
<span class="green">Literary Team</span></p>
</div>






</div>
<!--final year closes-->


<div class="row">
<div class="col-md-4 col-md-offset-4"><hr></div></div>



<!--Third year start-->
<div class="row">
 <center><p class="title2">Third Year Team Members</p></center>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/shikhar.jpg"  height="140" width="140" alt="SHIKHAR AGARWAL " class="img-circle">
<br>
<p>Shikhar Agrawal<br />
<span class="green">Management Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/Amit Jaiswal.jpg"  height="140" width="140" alt="Amit Jaiswal" class="img-circle">
<br>
<p>Amit Jaiswal<br />
<span class="green">Management Team</span></p>
</div>
 
<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/sush3.jpg"  height="140" width="140" alt="SUSHMITA SINGH" class="img-circle">
<br>
<p>Sushmita Singh<br />
<span class="green">Management Team</span></p>
</div>
 




<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/akan.jpg"  height="140" width="140" alt="AKANSHA RAGHUWANSHI" class="img-circle">
<br>
<p>Akanksha Raghuwanshi<br />
<span class="green">Literary Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/uma.jpg"  height="140" width="140" alt="UMA SINGH" class="img-circle">
<br>
<p>Uma Singh<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/rahul3.jpg"  height="140" width="140" alt="RAHUL TRIPATHI" class="img-circle">
<br>
<p>Rahul Tripathi<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/Swati Mishra.jpg"  height="140" width="140" alt="Swati Mishra" class="img-circle">
<br>
<p>Swati Mishra<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/mayank.jpg"  height="140" width="140" alt="MAYANK UPADHYAY" class="img-circle">
<br>
<p>Mayank Upadhyay<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/ritika2.jpg"  height="140" width="140" alt="RITIKA SINGH" class="img-circle">
<br>
<p>Ritika Singh<br />
<span class="green">Literary Team</span></p>
</div>




<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/nisha.jpg"  height="140" width="140" alt="NISHA GUPTA" class="img-circle">
<br>
<p>Nisha Gupta<br />
<span class="green">Literary Team</span></p>
</div>

<!--
<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/dummyf.png"  height="140" width="140" alt="Swati Mishra" class="img-circle">
<br>
<p>Swati Mishra<br />
<span class="green">Literary Team</span></p>
</div>
-->

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/Shashwat.jpg"  height="140" width="140" alt="SHASHWAT MISHRA" class="img-circle">
<br>
<p>Shashwat Mishra<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/vivek.jpg"  height="140" width="140" alt="VIVEK SINGH" class="img-circle">
<br>
<p>Vivek Singh<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/smir.jpg"  height="140" width="140" alt="SMRITI SRI" class="img-circle">
<br>
<p>Smriti Sri<br />
<span class="green">Designing Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/swati.jpeg"  height="140" width="140" alt="SWATI PATEL" class="img-circle">
<br>
<p>Swati Patel<br />
<span class="green">Designing Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/deepika.jpg"  height="140" width="140" alt="DEEPIKA GUPTA" class="img-circle">
<br>
<p>Deepika Gupta<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/sunidhi.jpg"  height="140" width="140" alt="SUNIDHI RAJ SINGH" class="img-circle">
<br>
<p>Sunidhi Raj Singh<br />
<span class="green">Photography Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/pooja.jpg"  height="140" width="140" alt="POOJA YADAV" class="img-circle">
<br>
<p>Pooja Yadav<br />
<span class="green">Photography Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/isha.jpg"  height="140" width="140" alt="ISHA AGNIHOTRI" class="img-circle">
<br>
<p>Isha Agnihotri<br />
<span class="green">Photography Team </span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/avantika.jpg"  height="140" width="140" alt="AVANTIKA VERMA" class="img-circle">
<br>
<p>Avantika Verma<br />
<span class="green">Photography Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/shivani.jpg"  height="140" width="140" alt="Sunny Prakash Tiwari" class="img-circle">
<br>
<p>Shivani Jaiswal<br />
<span class="green">Web-Development Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/sunny.jpg"  height="140" width="140" alt="Sunny Prakash Tiwari" class="img-circle">
<br>
<p>Sunny Prakash Tiwari<br />
<span class="green">Web-Development Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/chirag.jpg"  height="140" width="140" alt="Chirag Goyel" class="img-circle">
<br>
<p>Chirag Goel<br />
<span class="green">Web-Development Team </span></p>
</div>
</div>
<!--Third year closes-->


<div class="row">
<div class="col-md-4 col-md-offset-4"><hr></div></div>



<!--Second year start-->
<div class="row">
 <center><p class="title2">Second Year Team Members</p></center>

 
<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/ravi2.jpg"  height="140" width="140" alt="RAVI NARAYAN MISHRA" class="img-circle">
<br>
<p>Ravi Narayan Mishra<br />
<span class="green">Management Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/pari.jpg"  height="140" width="140" alt="PRANEETA B. SACHAN" class="img-circle">
<br>
<p>Praneeta B. Sachan<br />
<span class="green">Management Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/aanchal.jpg"  height="140" width="140" alt="AANCHAL DEV" class="img-circle">
<br>
<p>Aanchal Dev<br />
<span class="green">Management Team</span></p>
</div>
<!--
<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/navneet.jpg"  height="140" width="140" alt="NAVNEET PRAKASH" class="img-circle">
<br>
<p>Navneet Prakash<br />
<span class="green">Management Team</span></p>
</div> -->


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/dharmendra.jpg"  height="140" width="140" alt="SHUBHAM SRIVASTAVA" class="img-circle">
<br>
<p>Dharmendra Chaudhary<br />
<span class="green">Management Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/pranesh.jpg"  height="140" width="140" alt="SHUBHAM SRIVASTAVA" class="img-circle">
<br>
<p>Pranesh Dewivedi<br />
<span class="green">Management Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/anurag2.jpg"  height="140" width="140" alt="ANURAG SRIVASTAVA" class="img-circle">
<br>
<p>Anurag Srivastava<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/kamakshi.jpg"  height="140" width="140" alt="KAMAKSHI AWASTHI" class="img-circle">
<br>
<p>Kamakshi Awasthi<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/shubh2.png"  height="140" width="140" alt="SHUBHAM SAXENA" class="img-circle">
<br>
<p>Shubham Saxena<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/deboshri.jpg"  height="140" width="140" alt="DEBOSHREE MUKHERJEE" class="img-circle">
<br>
<p>Deboshree Mukherjee<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/atulc.jpg"  height="140" width="140" alt="ATUL CHATURVEDI" class="img-circle">
<br>
<p>Atul Chaturvedi<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/deep2.jpg"  height="140" width="140" alt="DEEPANGLI MITTAL" class="img-circle">
<br>
<p>Deepangi Mittal<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/anjali.jpg"  height="140" width="140" alt="ANJALI PATEL" class="img-circle">
<br>
<p>Anjali Patel<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/harsh.jpg"  height="140" width="140" alt="HARSH SHUKLA" class="img-circle">
<br>
<p>Harsh Shukla<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/sagar.jpg"  height="140" width="140" alt="Sagar sharma" class="img-circle">
<br>
<p>Sagar sharma<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/vagesh.jpg"  height="140" width="140" alt="Vagesh mishra" class="img-circle">
<br>
<p>Vagesh mishra<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/piyush.jpg"  height="140" width="140" alt="piyush dixit" class="img-circle">
<br>
<p>Piyush dixit<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/himanshu16.jpg"  height="140" width="140" alt="Himanshu ranjan" class="img-circle">
<br>
<p>Himanshu Ranjan<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/sherya.jpeg"  height="140" width="140" alt="SHREYA ANAND" class="img-circle">
<br>
<p>Sherya Anand<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/sidd2.jpg"  height="140" width="140" alt="SIDHU SHARMA" class="img-circle">
<br>
<p>siddharth Sharma<br />
<span class="green">Designing Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/ankita.jpg"  height="140" width="140" alt="ANKITA CHAND" class="img-circle">
<br>
<p>Ankita Chandra<br />
<span class="green">Designing Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/Smriti Srivastava.jpg"  height="140" width="140" alt="Smriti Srivastava" class="img-circle">
<br>
<p>Smriti Srivastava<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/adarsh.jpg"  height="140" width="140" alt="ADARSH ANAND" class="img-circle">
<br>
<p>Adarsh Anand<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/pankaj.jpg"  height="140" width="140" alt="PANKAJ KESARWANI" class="img-circle">
<br>
<p>Pankaj Kesarwani<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/rohitk.jpeg"  height="140" width="140" alt="ROHIT KESARWANI" class="img-circle">
<br>
<p>Rohit Kesarwani<br />
<span class="green">Photography Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/nidhi2.jpg"  height="140" width="140" alt="NIDHI SRIVASTAVA" class="img-circle">
<br>
<p>Nidhi Srivastava<br />
<span class="green">Photography Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/madhav.jpg"  height="140" width="140" alt="MADHAV GOPAL" class="img-circle">
<br>
<p>Madhav Gopal<br />
<span class="green">Photography Team </span></p>
</div>

<!--
<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/dummyf.png"  height="140" width="140" alt="Neha Kumari" class="img-circle">
<br>
<p>Neha Kumari<br />
<span class="green">Photography Team </span></p>
</div>
-->

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/vatsala.jpg"  height="140" width="140" alt="VATSALA" class="img-circle">
<br>
<p>Vatsala<br />
<span class="green">Photography Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/atulg.jpg"  height="140" width="140" alt="Atul Gupta" class="img-circle">
<br>
<p>Atul Gupta<br />
<span class="green">Web-Development Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/rupesh.jpg"  height="140" width="140" alt="Rupesh Yadav" class="img-circle">
<br>
<p>Rupesh Yadav<br />
<span class="green">Web-Development Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/rajat.jpg"  height="140" width="140" alt="Rajat Khemka" class="img-circle">
<br>
<p>Rajat Khemka<br />
<span class="green">Web-Development Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/shubhamweb.jpg"  height="140" width="140" alt="Shubham Pratap" class="img-circle">
<br>
<p>Shubham Pratap<br />
<span class="green">Web-Development Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/saumya.jpg"  height="140" width="140" alt="Saumya Chauhan" class="img-circle">
<br>
<p>Saumya Chauhan<br />
<span class="green">Web-Development Team </span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/akanksha.jpg"  height="140" width="140" alt="Akanksha Singh" class="img-circle">
<br>
<p>Akanksha Singh<br />
<span class="green">Web-Development Team </span></p>
</div>



</div>
<!--Second year closes-->

<!--****************************************-->

<div class="row">
<div class="col-md-4 col-md-offset-4"><hr></div></div>



<!--first year start-->
<div class="row">
 <center><p class="title2">First Year Team Members</p></center>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/default.jpg"  height="140" width="140" alt="SHIVANGI DWIVEDI" class="img-circle">
<br>
<p>Shivangi Dwivedi<br />
<span class="green">Management Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/deeksha.jpg"  height="140" width="140" alt="DEEKSHA GUPTA" class="img-circle">
<br>
<p>Deeksha gupta<br />
<span class="green">Management Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/shivam16.jpg"  height="140" width="140" alt="SHIVAM KR. PANDEY" class="img-circle">
<br>
<p>Shivam kr. pandey<br />
<span class="green">Management Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/anup.jpg"  height="140" width="140" alt=" ANUP KR. TIWARI" class="img-circle">
<br>
<p>Anup kr. tiwari<br />
<span class="green">Management Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/navneet16.jpg"  height="140" width="140" alt="NAVNEET SINGH" class="img-circle">
<br>
<p>Navneet singh<br />
<span class="green">Management Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/adeel.jpg"  height="140" width="140" alt="ADEEL AHMED KHAN" class="img-circle">
<br>
<p>Adeel ahmed khan<br />
<span class="green">Management Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/prateek.jpg"  height="140" width="140" alt="PRATEEK GOYAL" class="img-circle">
<br>
<p>Prateek goyal<br />
<span class="green">Management Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/prabal.jpg"  height="140" width="140" alt="PRABAL GUPTA" class="img-circle">
<br>
<p>Prabal gupta<br />
<span class="green">Management Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/abhyuday.jpg"  height="140" width="140" alt="ABHYUDAY SINGH" class="img-circle">
<br>
<p>Abhyuday singh<br />
<span class="green">Management Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/default.jpg"  height="140" width="140" alt="AAYUSHI" class="img-circle">
<br>
<p>Aayushi<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/vivek16_2.jpg"  height="140" width="140" alt="VIVEK SINGH" class="img-circle">
<br>
<p>Vivek singh<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/sandeep.jpg"  height="140" width="140" alt="SANDEEP NIGAM" class="img-circle">
<br>
<p>Sandeep nigam<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/nikhil.jpg"  height="140" width="140" alt="NIKHIL KUMAR" class="img-circle">
<br>
<p>Nikhil kumar<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/yash.jpg"  height="140" width="140" alt="YASH SAXENA" class="img-circle">
<br>
<p>Yash saxena<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/alka.jpg"  height="140" width="140" alt="ALKA GUPTA" class="img-circle">
<br>
<p>Alka gupta<br />
<span class="green">Literary Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/nikita.jpg"  height="140" width="140" alt="NIKITA DUBEY" class="img-circle">
<br>
<p>Nikita dubey<br />
<span class="green">Literary Team</span></p>
</div>



<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/surya.jpg"  height="140" width="140" alt="SURYA PRAKASH GOND" class="img-circle">
<br>
<p>Surya prakash gond<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/utkarsh.jpg"  height="140" width="140" alt="UTKARSH VERMA" class="img-circle">
<br>
<p>Utkarsh verma<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/keerti.jpg"  height="140" width="140" alt="KEERTI SINGH" class="img-circle">
<br>
<p>Keerti singh<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/apoorva.jpg"  height="140" width="140" alt="APOORVA SWAROOP" class="img-circle">
<br>
<p>Apoorva swaroop<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/nishu.jpg"  height="140" width="140" alt="NISHU SINGH" class="img-circle">
<br>
<p>Nishu singh<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/devidutt.jpg"  height="140" width="140" alt="DEVIDUTT KUMAR KHARWAR" class="img-circle">
<br>
<p>Devidutt kumar kharwar<br />
<span class="green">Designing Team</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/nagendra.jpg"  height="140" width="140" alt="NAGENDRA PRATAP SINGH" class="img-circle">
<br>
<p>Nagendra pratap singh<br />
<span class="green">Designing Team</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/harshit.jpg"  height="140" width="140" alt="HARSHIT AGRAWAL" class="img-circle">
<br>
<p>Harshit agrawal<br />
<span class="green">Photography Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/shweta.jpg"  height="140" width="140" alt="SHWETA KAMAL" class="img-circle">
<br>
<p>shweta kamal<br />
<span class="green">Photography Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/archana.jpg"  height="140" width="140" alt="ARCHANA GAUTAM" class="img-circle">
<br>
<p>Archana gautam<br />
<span class="green">Photography Team </span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/amandeep.jpg"  height="140" width="140" alt="AMANDEEP GAUTAM" class="img-circle">
<br>
<p>Amandeep gautam<br />
<span class="green">Photography Team </span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/himanshu.jpg"  height="140" width="140" alt="HIMANSHU SHARMA" class="img-circle">
<br>
<p>Himanshu sharma<br />
<span class="green">Photography Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/sachidanand.jpg"  height="140" width="140" alt="SACHIDANAND PRAJAPATI" class="img-circle">
<br>
<p>Sachidanand prajapati<br />
<span class="green">Photography Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/shivam16_2.jpg"  height="140" width="140" alt="SHIVAM KUMAR" class="img-circle">
<br>
<p>Shivam kumar<br />
<span class="green">Photography Team </span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/mayank16.jpg"  height="140" width="140" alt="MAYANK KAUSHIK" class="img-circle">
<br>
<p>Mayank kaushik<br />
<span class="green">Web-Development Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/aayush.jpg"  height="140" width="140" alt="AAYUSH VARSHNEY" class="img-circle">
<br>
<p>Aayush varshney<br />
<span class="green">Web-Development Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/vivek16.jpg"  height="140" width="140" alt="VIVEK KR. SINGH" class="img-circle">
<br>
<p>vivek kr. singh<br />
<span class="green">Web-Development Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/anushka.jpg"  height="140" width="140" alt="ANUSHKA AGRAWAL" class="img-circle">
<br>
<p>Anushka Agrawal<br />
<span class="green">Web-Development Team </span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/anuradha.jpg"  height="140" width="140" alt="ANURADHA RAJ" class="img-circle">
<br>
<p>Anuradha raj <br />
<span class="green">Web-Development Team </span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/image/aboutus/priyanshi.jpg"  height="140" width="140" alt="PRIYANSHI SINGH" class="img-circle">
<br>
<p>Priyanshi singh <br />
<span class="green">Web-Development Team </span></p>
</div>



</div>
<!--FIRST year closes-->

<!--****************************************-->







</div>
<!--final year closes-->
</div></div></div></div></div><!--col-md-12,row,container closed-->
<?php
include '../footer.php';
?>
 </body>
</html>
