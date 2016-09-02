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
         </div>
       </div>
       <a href="#">
        <div class="panel panel-default hoverable">
          <div class="panel-body">
            <div class="col-md-5">
              <img src="../mef/image/mef.jpg" width="108" height="108">
            </div>
          </br>
        </br>
        <center><p class="title2"> MEF</p></center>
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
<div class="col-md-9">
  <center>
    <div class="panel-body">
      <div class="panel panel-default">
        <ul class="nav nav-tabs" role="tablist" id="myTab">
          <li class="active"><a href="#about" role="tab" data-toggle="tab">About</a></li>
          <!-- <li><a href="#activity" role="tab" data-toggle="tab">News</a></li> -->
        </ul>
        <p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;MEF</p>
        <hr>
        <div id="about" style="padding:10px"><p>
          Mechanical Engineering Forum provides students a take-off point to the mechanical events. The forum primely aims at educating and training students technically and intellectually by organizing events and workshops in the whole session. The workshops organized paved way to its successful endeavor this year, thus expounding the horizon of the students </br>
          <b>Convener- Prof. Dr. Amit Medhavi </b>
        </p>
        <!-- Admin -->
        <div class="row">
          <div class="col-md-12">
            <p class="title2">Administration</p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-2 mid">
          </div>
          <div class="col-md-4 mid">
           <a href="http://www.raghuraj.info/"><img src="http://drishticone.org/image/aboutus/rj.jpg" height="110" width="110" alt="Prof. Raghuraj Singh" class="img-circle"></a>
           <br>
           <a href="http://www.raghuraj.info/"><p> Prof. Raghuraj Singh<br /></a>
           <span class="green">Patron</span></p>
         </div>
         <div class="col-md-4 mid" style="border-right:1px solid #eee">
           <img src="../mef/image/Amit m.jpg"  height="110" width="110" alt=" Prof. Dr. Amit Medhavi" class="img-circle">
           <br>
           <p>  Prof. Dr. Amit Medhavi<br />
            <span class="green">Convener</span></p>
          </div>
          <div class="col-md-2 mid"></div>
        </div>
        <br>
        <br>
        <!-- Team Members -->
        <div class="row">
          <div class="col-md-12">
            <p class="title2">Final Year Team Members</p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../mef/image/saurabh lalwani.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Saurabh Lalwani<br />
            <span class="green">President</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../mef/image/ritika singh.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Ritika Singh<br />
            <span class="green">Vice President</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../mef/image/sushmita singh.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Sushmita Singh<br />
            <span class="green">Chief executive</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../mef/image/shubham jindal.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> <br />
            <span class="green">Chief executive</span></p>
          </div>
        </div>
        <br>
        <!-- row 2 -->
        <div class="row">
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../mef/image/pramod sonkar.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Pramod Sonkar<br />
            <span class="green">Chief executive</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../mef/image/shubham bhist.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Shubham Bhist<br />
            <span class="green">Chief executive</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../mef/image/nisha gupta.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Nisha Gupta<br />
            <span class="green">Chief executive</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../mef/image/anita yadav.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Anita Yadav<br />
            <span class="green">Chief executive</span></p>
          </div>
        </div>
        <br>
        <!--<!-- row 3 -->

<!--<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Chief executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Chief executive</span></p>
</div>
</div><br>--><br>

<!-- Third year Team Members -->
<div class="row">
  <div class="col-md-12">
    <p class="title2">Third Year Team Members</p> </div></div><br>
    <div class="row">
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
       <img src="../mef/image/harshit gupta.jpg"  height="100" width="100" alt="" class="img-circle">
       <br>
       <p> Harshit Gupta<br />
        <span class="green">Secretary</span></p>
      </div>
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
       <img src="../mef/image/smriti srivastava.jpg"  height="100" width="100" alt="" class="img-circle">
       <br>
       <p> Smriti Srivastava<br />
        <span class="green">Joint Secretary</span></p>
      </div>
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
       <img src="../mef/image/akhilesh mishra.jpg"  height="100" width="100" alt="" class="img-circle">
       <br>
       <p> Akhilesh Mishra<br />
        <span class="green">Boys Co-ordinator</span></p>
      </div>
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
       <img src="../mef/image/hrishabh jain.jpg"  height="100" width="100" alt="" class="img-circle">
       <br>
       <p> Hrishabh Jain<br />
        <span class="green">Treasurer</span></p>
      </div>
    </div>
    <br>
    <!-- row 2 -->
    <div class="row">
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
       <img src="../mef/image/ankita singh chauhan.jpg"  height="100" width="100" alt="" class="img-circle">
       <br>
       <p> Ankita Singh Chauhan<br />
        <span class="green">Girls Co-ordinator</span></p>
      </div>
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
       <img src="../mef/image/vimal patel.jpg"  height="100" width="100" alt="" class="img-circle">
       <br>
       <p> Vimal Patel<br />
        <span class="green">Boys Co-ordinator</span></p>
      </div>
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
       <img src="../mef/image/priyanka kumari.jpg"  height="100" width="100" alt="" class="img-circle">
       <br>
       <p> Priyanka Kumari<br />
        <span class="green">Girls Co-ordinator</span></p>
      </div>
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
       <img src="../mef/image/brajbala yadav.jpg"  height="100" width="100" alt="" class="img-circle">
       <br>
       <p> Brajbala Yadav<br />
        <span class="green">Cyber Facilitate</span></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
       <img src="../mef/image/mayank gupta.jpg"  height="100" width="100" alt="" class="img-circle">
       <br>
       <p> Mayank Gupta<br />
        <span class="green">Cyber Facilitate</span></p>
      </div>
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
       <img src="../mef/image/vaibhav gupta.jpg"  height="100" width="100" alt="" class="img-circle">
       <br>
       <p> Vaibhav Gupta<br />
        <span class="green">Senior Executive</span></p>
      </div>
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
       <img src="../mef/image/rishabh tripathi.jpg"  height="100" width="100" alt="" class="img-circle">
       <br>
       <p> Rishabh Tripathi<br />
        <span class="green">Senior Executive</span></p>
      </div>
    </div>
    <br>
    <br>
    <!-- Second Year Team Member -->
    <div class="row">
      <div class="col-md-12">
        <p class="title2">Second Year Team Members</p> </div></div><br>
        <div class="row">
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../mef/image/pradeepti vishwakarma.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Pradeepti Vishwakarma<br />
            <span class="green">Executive<span></p>
            </div>
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
             <img src="../mef/image/deeksha garg.jpg"  height="100" width="100" alt="" class="img-circle">
             <br>
             <p> Deeksha Garg<br />
              <span class="green">Executive</span></p>
            </div>
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
             <img src="../mef/image/palak seth.jpg"  height="100" width="100" alt="" class="img-circle">
             <br>
             <p> Palak Seth<br />
              <span class="green">Executive</span></p>
            </div>
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
             <img src="../mef/image/saurabh tripathi.jpg"  height="100" width="100" alt="" class="img-circle">
             <br>
             <p> Saurabh Tripathi<br />
              <span class="green">Executive</span></p>
            </div>
          </div>
          <br>
          <!-- row 2 -->
          <div class="row">
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
             <img src="../mef/image/rahul sharma.jpg"  height="100" width="100" alt="" class="img-circle">
             <br>
             <p> Rahul Sharma<br />
              <span class="green">Executive<span></p>
              </div>
              <div class="col-md-3 mid" style="border-right:1px solid #eee">
               <img src="../mef/image/suresh bhind.jpg"  height="100" width="100" alt="" class="img-circle">
               <br>
               <p> Suresh Bhind<br />
                <span class="green">Executive</span></p>
              </div><br><br>

<!--<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>
</div><br>-->

<!-- row 3 -->

<!--<div class="row">
<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>
</div>

<div class="row">

<div class="col-md-12" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive</span></p>
</div>
</div><br><br>-->

<!-- First Year Team Member -->

<!--<div class="row">
<div class="col-md-12">
  <p class="title2">First Year Team Members</p> </div></div><br>-->

  <!-- row 1 -->
<!--<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt=" " class="img-circle">
<br>
<p>  <br />
<span class="green">Co-Executive</span></p>
</div>


<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>-->
<!-- row 2 -->

<!--<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>-->

<!-- ROW 3 -->

<!--<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>-->

<!-- row 4 -->

<!--<div class="row">

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive<span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>

<div class="col-md-3 mid" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div><br>

<div class="row">

<div class="col-md-12" style="border-right:1px solid #eee">
 <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
<br>
<p> <br />
<span class="green">Co-Executive</span></p>
</div>
</div>-->




</div>
</div>
</center>
</div>

</div>
<!--panel end-->



<!--------------------------------------------------------------------------------------------------------------------------- -->





</div>
<!-- column end--></div>











</div>
</div><!--container closed-->
<?php
include '../../footer.php';
?>
</body>
</html>
