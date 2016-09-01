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
     </div>
 </div>
    <a href="#">
    <div class="panel panel-default hoverable">
      <div class="panel-body">
      <div class="col-md-5">
     <img src="../iste/image/iste.png"></div>
 </br>
</br>
    <center><p class="title2"> ISTE</p></center>
     </a>
    </div>
</div>
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
      </div>
  </div>
</a>
</div>
    <hr>
    </div>
</div>
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
 </div>
      <div id="about" style="margin-left:30px; margin-right:30px;"><p>
    One of the most ingenious and scientiﬁc councils in KNIT, ISTE encompasses whole-dimensioned potential development of students. Round the year, it organizes numerous technical and non-technical events with loads of fun attached to it. ISTE realizes its sole objective of providing an impetus to the scientiﬁc knowledge of the students. </br>
     <b> Convener - Prof. Ajay Shekhar Pandey </b>
    </p>
    <div class="row">
    <div class="col-md-12">
     <center><p class="title2">Administration</p></center>
 </div>
</div>
    <div class="row">
    <div class="col-md-2 mid"></div>
    <div class="col-md-3 mid">
    <a href="http://www.raghuraj.info/"><img src="http://drishticone.org/image/aboutus/rj.jpg" height="110" width="110" alt="Prof. Raghuraj Singh" class="img-circle"></a>
    <br>
    <a href="http://www.raghuraj.info/"><p><center>Prof. Raghuraj Singh<br /></a>
    <span class="green">Patron</span></center></p>
    </div>
    <div class="col-md-2 mid">
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/Ajay.jpg"  height="110" width="110" alt="Prof. Ajay Shekhar Pandey" class="img-circle">
    <br>
    <p><center>Prof. Ajay Shekhar Pandey<br />
    <span class="green">Convener</span></center></p>
    </div>
    <div class="col-md-2 mid">
    </div>
    </div>
    <br>
    <br>

    <!-- Team Members -->

    <div class="row">
    <div class="col-md-12">
     <center>
        <p class="title2">Final Year Team Members</p></center>
 </div>
</div>
<br>
    <!-- Final year Team Members -->
    <div class="row">
        <center>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/pranav goel.jpg"  height="100" width="100" alt="Pranav Goel" class="img-circle">
    <br>
    <p>Pranav Goel<br />
    <span class="green">Chairperson</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/samiksha.jpg"  height="100" width="100" alt="Samiksha Agarwal" class="img-circle">
    <br>
    <p>Samiksha Agarwal<br />
    <span class="green">Vice Chairperson</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/alpa.jpg"  height="100" width="100" alt="Alpa garg" class="img-circle"> <br>
    <p>Alpa Garg<br />
    <span class="green">Event co-ordinator</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/sushant.jpg"  height="100" width="100" alt="Sushant chauhan" class="img-circle">    <br>
    <p>Sushant chauhan<br />
    <span class="green">Treasurer</span></p>
    </div>
    </div><br>
    <!-- row 2 -->
    <div class="row">
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/vinay.jpg"  height="100" width="100" alt="Vinay Kumar chaubey" class="img-circle">
    <br>
    <p>Vinay Kumar chaubey<br />
    <span class="green">Chief Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/devanshi.jpg"  height="100" width="100" alt="Devanshi Shukla" class="img-circle">
    <br>
    <p>Devanshi Shukla<br />
    <span class="green">Chief Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/mayank.jpg"  height="100" width="100" alt="Mayank Pathak" class="img-circle">    <br>
    <p>Mayank Pathak<br />
    <span class="green">Chief Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/abhijeet.jpg"  height="100" width="100" alt="Abhijeet Tripathi" class="img-circle">
    <br>
    <p>Abhijeet Tripathi<br />
    <span class="green">Chief Executive</span></p>
    </div>
    </div>
    <div class="row">
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <center><img src="../iste/image/gaurav.jpg"  height="100" width="100" alt="Gaurav Srivastav" class="img-circle">
    <br>
    <p>Gaurav Srivastav<br />
    <span class="green">Chief Executive</span></p>
    </div>
    </div>
    <br>
    <br>

    <!-- Third Year Team Member -->

    <div class="row">
    <div class="col-md-12">
     <center><p class="title2">Second Year Team Members</p>
 </div>
</div>
<br>
    <div class="row">
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/rajat.jpg"  height="100" width="100" alt="Rajat Khemkha " class="img-circle">
    <br>
    <p>Rajat Khemkha<br />
    <span class="green">Secretary</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/soumya.jpg"  height="100" width="100" alt="Roli Verma " class="img-circle">
    <br>
    <p>Soumya Dubey<br />
    <span class="green">Joint Secretary</span></center></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/ayush.jpg"  height="100" width="100" alt="Ayush Arela" class="img-circle">
    <br>
    <p>Ayush Arela<br />
    <span class="green">Treasurer</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/akriti.jpg"  height="100" width="100" alt="Anuja Gupta" class="img-circle">
    <br>
    <p>Akriti Sharma<br />
    <span class="green">Girls Co-ordinator</span></p>
    </div>
    </div><br>
    <!-- row 2 -->
    <div class="row">
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/anshul.jpg"  height="100" width="100" alt="Anshul Varshney" class="img-circle">
    <br>
    <p><center>Anshul Varshney<br />
    <span class="green">Boys Co-ordinator</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/sneha.jpg"  height="100" width="100" alt="Akriti Sharma" class="img-circle">
    <br>
    <p>Sneha Bharti<br />
    <span class="green">Cyber Cell Co-ordinator</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/anuja.jpg"  height="100" width="100" alt="Sneha Bharti" class="img-circle">
    <br>
    <p>Anuja Gupta<br />
    <span class="green">Senior Executive</span></center></p>
    </div>
    <br>
     <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/vipul.jpg"  height="100" width="100" alt="Vipul Kapoor" class="img-circle">
    <br>
    <p>Vipul Kapoor<br />
    <span class="green">Senior Executive<span></p>
    </div>
</div>
    <!-- row 3 -->
    <div class="row">
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/default.jpg"  height="100" width="100" alt="Shashank Mishra" class="img-circle">
    <br>
    <p>Shashank Mishra<br />
    <span class="green">Senior Executive<span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/nidhi.jpg"  height="100" width="100" alt="Nidhi Srivastava" class="img-circle">
    <br>
    <p>Nidhi Srivastava<br />
    <span class="green">Senior Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/tushar.jpg"  height="100" width="100" alt="Tushar Bansal" class="img-circle">
    <br>
    <p>Tushar Bansal<br />
    <span class="green">Senior Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/default.jpg"  height="100" width="100" alt="Ashay Kr. Ashish" class="img-circle">
    <br>
    <p>Ashay Kr. Ashish<br />
    <span class="green">Senior Executive<span></p>
    </div>
    <div class="row">
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/vikrant.jpg"  height="100" width="100" alt="Ashay Kr. Ashish" class="img-circle">
    <br>
    <p>Vikrant<br />
    <span class="green">Senior Executive<span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/shikha.jpg"  height="100" width="100" alt=" Shikha Srivastava" class="img-circle">
    <br>
    <p>Shikha Srivastava<br />
    <span class="green">Senior Executive</span></p>
    </div>
    </div><br><br>

    <!-- Second Year Team Member -->

    <div class="row">
    <div class="col-md-12">
     <p class="title2">Second Year Team Members</p>
 </div>
</div>
<br>
    <!-- row 1 -->
    <div class="row">
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/ajay pp.jpg"  height="100" width="100" alt="AJAY PRAKASH PANDEY" class="img-circle">
    <br>
    <p>Ajay Prakash Pandey<br />
    <span class="green">Executive<span</p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/deepak.jpg"  height="100" width="100" alt="DEEPAK TIWARI" class="img-circle">
    <br>
    <p>Deepak Tiwari<br />
    <span class="green">Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/nikita.jpg"  height="100" width="100" alt="NIKITA DUBEY " class="img-circle">    <br>
    <p>Nikita Dubey<br />
    <span class="green">Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/anjali.jpg"  height="100" width="100" alt="ANJALI MISHRA" class="img-circle">    <br>
    <p>Anjali Mishra<br />
    <span class="green">Executive</span></p>
    </div>
    </div><br>
    <!-- row 2 -->
    <div class="row">
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/shivangi dwivedi.jpg"  height="100" width="100" alt="SHIVANGI DWIVEDI" class="img-circle">
    <br>
    <p>Shivangi Dwivedi<br />
    <span class="green">Executive<span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/luv.jpg"  height="100" width="100" alt="LUV DUBEY" class="img-circle">    <br>
    <p>Luv Dubey<br />
    <span class="green">Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/deeksha.jpg"  height="100" width="100" alt="DEEKSHA SHARMA" class="img-circle">    <br>
    <p>Deeksha Sharma<br />
    <span class="green">Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/pankaj.jpg"  height="100" width="100" alt="PANKAJ KUMAR" class="img-circle">
    <br>
    <p>Pankaj Kumar<br />
    <span class="green">Executive</span></p>
    </div>
    </div>
    <br>
    <!-- ROW 3 -->
    <div class="row">
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/chirag.jpg"  height="100" width="100" alt="CHIRAG GOYAL" class="img-circle">
    <br>
    <p>Chirag Goyal<br />
    <span class="green">Executive<span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/arpit.jpg"  height="100" width="100" alt="ARPIT BAJPAI" class="img-circle">
    <br>
    <p>Arpit Bajpai<br />
    <span class="green">Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/yash.jpg"  height="100" width="100" alt="YASH AGRAWAL" class="img-circle">
    <br>
    <p>Yash Agrawal<br />
    <span class="green">Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/shivangi.jpg"  height="100" width="100" alt="SHIVANGI AWASTHI" class="img-circle">
    <br>
    <p>Shivangi Awasthi<br />
    <span class="green">Executive</span></p>
    </div>
    </div><br>
    <!-- row 4 -->
    <div class="row">
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/raghav.jpg"  height="100" width="100" alt="RAGHAV AGRAWAL" class="img-circle">
    <br>
    <p>Raghav Agrawal<br />
    <span class="green">Executive<span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/abhishek.jpg"  height="100" width="100" alt="ABHISHEK KUSHWAHA" class="img-circle">
    <br>
    <p>Abhishek Kushwaha<br />
    <span class="green">Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/ayush bajpai.jpg"  height="100" width="100" alt="AYUSH BAJPAI" class="img-circle">
    <br>
    <p>Ayush Bajpai<br />
    <span class="green">Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/praveen.jpg"  height="100" width="100" alt="PRAVEEN KUMAR TIWARI" class="img-circle">
    <br>
    <p>Praveen Kumar Tiwari<br />
    <span class="green">Executive</span></p>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <img src="../iste/image/default.jpg"  height="100" width="100" alt="KEERTI" class="img-circle"<br>
    <p>Keerti Singh<br />
    <span class="green">Executive</span></p>
    </div>
    </div>
    </div></center>
</div>
</div>
</div>
    <!--panel end-->
    <!--------------------------------------------------------------------------------------------------------------------------- -->

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
    </div>
</div>
<!--container closed-->
    <?php
    include '../../footer.php';
    ?>
     </body>
    </html>
