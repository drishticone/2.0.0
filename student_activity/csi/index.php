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
                <img src="../csi/image/csi.jpg">
              </div>
            </br>
          </br>
          <center><p class="title2"> CSI</p></center>
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
           <!-- <li class="active"><a href="#about" role="tab" data-toggle="tab">About</a></li> -->
           <!-- <li><a href="#activity" role="tab" data-toggle="tab">News</a></li> -->
         </ul>
         <p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;CSI</p>
         <hr>
         <div id="about" style="padding:10px"><p>
          Computer Society of India is the student's chapter in KNIT. The purpose of this society is to span the theoretical knowledge and turn it into practical approach of computing solution and information processing.
        </br>
        <b>Convener - Prof. B.P. Chaurasiya
        </b>
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
         <a href="http://www.raghuraj.info/"><img src="http://drishticone.org/image/aboutus/rj.jpg" height="110" width="110" alt="Prof. Raghuraj Singh" class="img-circle">
         </a>
         <br>
         <a href="http://www.raghuraj.info/"><p> Prof. Raghuraj Singh<br />
         </a>
         <span class="green">Patron</span></p>
       </div>
       <div class="col-md-4 mid" style="border-right:1px solid #eee">
         <img src="../csi/image/BP Chaurashiya.jpg"  height="110" width="110" alt="Prof. B.P. Chaurasiya" class="img-circle">
         <br>
         <p> Prof. B.P. Chaurasiya<br />
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
         <img src="../csi/image/sunidhi.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Sunidhi Raj Singh(IT)<br />
          <span class="green">Chief EXecutive</span></p>
        </div>
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
         <img src="../csi/image/deepti.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Deepti Sharma(IT)<br />
          <span class="green">Chief Executive</span></p>
        </div>
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
         <img src="../csi/image/samiksha.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Samiksha agarwal(CSE)<br />
          <span class="green">Chief executive</span></p>
        </div>
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
         <img src="../csi/image/lipi.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Lipi Gupta(CSE)<br />
          <span class="green">Chief executive</span></p>
        </div>
      </div>
      <br>
      <!-- row 2 -->
      <div class="row">
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
         <img src="../csi/image/suhani.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Suhani Saxena(CSE)<br />
          <span class="green">Chief executive</span></p>
        </div>
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
         <img src="../csi/image/deepak.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Deepak Singh(IT)<br />
          <span class="green">Chief executive</span></p>
        </div>
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
         <img src="../csi/image/shikhar.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Shikhar Agarwal(CSE)<br />
          <span class="green">Chief executive</span></p>
        </div>
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
         <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Sachin vishwakarma(CSE)<br />
          <span class="green">Chief executive</span></p>
        </div>
      </div>
      <br>
      <!-- row 3 -->
      <div class="row">
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
         <img src="../csi/image/tejus.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Tejus Agarwal(CSE)<br />
          <span class="green">Chief executive</span></p>
        </div>
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
         <img src="../csi/image/raju.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Raju Varshney(CSE)<br />
          <span class="green">Chief executive</span></p>
        </div>
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
         <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Harshit Sharma(CSE)<br />
          <span class="green">Chief executive</span></p>
        </div>
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
         <img src="../csi/image/shashwat.jpg"  height="100" width="100" alt="" class="img-circle">
         <br>
         <p> Shashwat Mishra(CSE)<br />
          <span class="green">Chief executive</span></p>
        </div>
      </div><br><br>

      <!-- Third year Team Members -->

      <div class="row">
        <div class="col-md-12">
         <p class="title2">Third Year Team Members</p> </div></div><br>
         <div class="row">
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../csi/image/swati.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Swati Gangwar<br />
            <span class="green">Senior Executive</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../csi/image/ankita.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Ankita Chand<br />
            <span class="green">Senior Executive</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../csi/image/garvita.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Garvita Garg<br />
            <span class="green">Senior Executive</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../csi/image/priyal.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Priyal Mishra<br />
            <span class="green">Senior Executive</span></p>
          </div>
        </div><br>
        <!-- row 2 -->
        <div class="row">
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../csi/image/devoshree.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Devoshree Mukherjee<br />
            <span class="green">Senior Executive</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Shreya Anand<br />
            <span class="green">Senior Executive</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../csi/image/shubham.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Shubham Saxena<br />
            <span class="green">Senior Executive</span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
           <img src="../csi/image/tushar.jpg"  height="100" width="100" alt="" class="img-circle">
           <br>
           <p> Tushar Bansal<br />
            <span class="green">Senior Executive</span></p>
          </div>
          <!-- row 3 -->
          <div class="row">
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
             <img src="../csi/image/vageesh.jpg"  height="100" width="100" alt="" class="img-circle">
             <br>
             <p> Vageesh Mishra<br />
              <span class="green">Senior Executive</span></p>
            </div>
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
             <img src="../csi/image/anurag.jpg"  height="100" width="100" alt="" class="img-circle">
             <br>
             <p> Anurag Srivastava<br />
              <span class="green">Senior Executive</span></p>
            </div>
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
             <img src="../csi/image/sharad.jpg"  height="100" width="100" alt="" class="img-circle">
             <br>
             <p> Sharad Shukla<br />
              <span class="green">Senior Executive</span></p>
            </div>
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
             <img src="../csi/image/atul.jpg"  height="100" width="100" alt="" class="img-circle">
             <br>
             <p> Atul Kumar Chaturvedi<br />
              <span class="green">Senior Executive</span></p>
            </div>
            <!-- row 4 -->
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
             <img src="../csi/image/anshul.jpg"  height="100" width="100" alt="" class="img-circle">
             <br>
             <p> Anshul Varshney<br />
              <span class="green">Senior Executive</span></p>
            </div>
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
             <img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
             <br>
             <p> Deepak Kumar Pathak<br />
              <span class="green">Senior Executive</span></p>
            </div>
          </div>
          <br>
          <br>

          <!-- Second Year Team Member -->

          <div class="row">
            <div class="col-md-12">
              <p class="title2">Second Year Team Members</p> </div></div><br>
              <!-- row 1 -->
              <div class="row">
                <div class="col-md-3 mid" style="border-right:1px solid #eee">
                 <img src="../csi/image/priyanka.jpg"  height="100" width="100" alt="" class="img-circle">
                 <br>
                 <p> Priyanka Yadav<br />
                  <span class="green">Executive<span></p>
                  </div>
                  <div class="col-md-3 mid" style="border-right:1px solid #eee">
                   <img src="../csi/image/astha.jpg"  height="100" width="100" alt="" class="img-circle">
                   <br>
                   <p> Astha Dwivedi<br />
                    <span class="green">Executive</span></p>
                  </div>
                  <div class="col-md-3 mid" style="border-right:1px solid #eee">
                   <img src="../csi/image/yash.jpg"  height="100" width="100" alt="" class="img-circle">
                   <br>
                   <p> Yash agarwal<br />
                    <span class="green">Executive</span></p>
                  </div>-->
                  <div class="col-md-3 mid" style="border-right:1px solid #eee">
                   <img src="../csi/image/shivangi.jpg"  height="100" width="100" alt="" class="img-circle">
                   <br>
                   <p> Shivangi Awasthi<br />
                    <span class="green">Executive</span></p>
                  </div>
                </div><br>
                <!-- row 2 -->
                <div class="row">
                  <div class="col-md-3 mid" style="border-right:1px solid #eee">
                   <img src="../csi/image/aditya.jpg"  height="100" width="100" alt="" class="img-circle">
                   <br>
                   <p> Aditya Gupta<br />
                    <span class="green">Executive<span></p>
                    </div>
                    <div class="col-md-3 mid" style="border-right:1px solid #eee">
                     <img src="../csi/image/sandeep.jpg"  height="100" width="100" alt="" class="img-circle">
                     <br>
                     <p> Sandeep Nigam<br />
                      <span class="green">Executive</span></p>
                    </div>
                    <div class="col-md-3 mid" style="border-right:1px solid #eee">
                     <img src="../csi/image/vishwas.jpg"  height="100" width="100" alt="" class="img-circle">
                     <br>
                     <p> Vishwas Gupta<br />
                      <span class="green">Executive</span></p>
                    </div>
                    <div class="col-md-3 mid" style="border-right:1px solid #eee">
                     <img src="../csi/image/aayush.jpg"  height="100" width="100" alt="" class="img-circle">
                     <br>
                     <p> Aayush Varshney<br />
                      <span class="green">Executive</span></p>
                    </div>
                  </div><br>
                  <!-- row 3 -->
                  <div class="row">
                    <div class="col-md-3 mid" style="border-right:1px solid #eee">
                     <img src="../csi/image/shivam.jpg"  height="100" width="100" alt="" class="img-circle">
                     <br>
                     <p> Shivam Sharma<br />
                      <span class="green">Executive<span></p>
                      </div>
                      <div class="col-md-3 mid" style="border-right:1px solid #eee">
                       <img src="../csi/image/shweta.jpg"  height="100" width="100" alt="" class="img-circle">
                       <br>
                       <p> Shweta Kamal<br />
                        <span class="green">Executive</span></p>
                      </div>
                      <div class="col-md-3 mid" style="border-right:1px solid #eee">
                       <img src="../csi/image/anuj.jpg"  height="100" width="100" alt="" class="img-circle">
                       <br>
                       <p> Anuj Sharma<br />
                        <span class="green">Executive</span></p>
                      </div>
                      <div class="col-md-3 mid" style="border-right:1px solid #eee">
                       <img src="../csi/image/harishankar.jpg"  height="100" width="100" alt="" class="img-circle">
                       <br>
                       <p> Harishankar Tiwari<br />
                        <span class="green">Executive</span></p>
                      </div>
                      <!-- row 4 -->
                      <div class="row">
                        <div class="col-md-3 mid" style="border-right:1px solid #eee">
                         <img src="../csi/image/shivesh.jpg"  height="100" width="100" alt="" class="img-circle">
                         <br>
                         <p> Shivesh Kumar Rai<br />
                          <span class="green">Executive</span></p>
                        </div>
                        <div class="col-md-3 mid" style="border-right:1px solid #eee">
                         <img src="../csi/image/vinayak.jpg"  height="100" width="100" alt="" class="img-circle">
                         <br>
                         <p> Vinayak Baranwal<br />
                          <span class="green">Executive</span></p>
                        </div>
                        <div class="col-md-3 mid" style="border-right:1px solid #eee">
                         <img src="../csi/image/keerti.jpg"  height="100" width="100" alt="" class="img-circle">
                         <br>
                         <p> Keerti Singh<br />
                          <span class="green">Executive</span></p>
                        </div>
                        <div class="col-md-3 mid" style="border-right:1px solid #eee">
                         <img src="../csi/image/kashish.jpg"  height="100" width="100" alt="" class="img-circle">
                         <br>
                         <p> Kashish Sahu<br />
                          <span class="green">Executive</span></p>
                        </div>
                        <!-- row 5 -->
                        <div class="row">
                          <div class="col-md-3 mid" style="border-right:1px solid #eee">
                           <img src="../csi/image/ankit.jpg"  height="100" width="100" alt="" class="img-circle">
                           <br>
                           <p> Ankit Kumar<br />
                            <span class="green">Executive</span></p>
                          </div>
                        </div>
                        <br>
                        <br>

                        <!-- First Year Team Member -->

<!--<div class="row">
<div class="col-md-12">
  <p class="title2">First Year Team Members</p> </div></div><br>

  <!-- row 1 -->-->
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
</div><br>
<!-- row 2 -->-->

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

<!-- ROW 3 -->-->

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

<!-- row 4 -->-->

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
</center></div>
</div>
<!--panel end-->
<!--------------------------------------------------------------------------------------------------------------------------- >-->
</div>
<!-- column end--></div>
</div>
</div><!--container closed-->
<?php
include '../../footer.php';
?>
</body>
</html>
