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
             <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;Councils</center></p>
           </div>
         </div>
         <a href="#">
          <div class="panel panel-default hoverable">
            <div class="panel-body">
              <div class="col-md-5">
                <img src="../iei/image/iei.png">
              </div></br></br>
              <center><p class="title2"> IEI</center></p>
            </a>
          </div>
        </div>

        <!--event start-->
        <div class="panel panel-default">
          <div class="panel-body">
            <center> <p class="title2"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;&nbsp;Upcoming Events</center></p>
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

      <div class="panel-body">
        <div class="panel panel-default">
          <ul class="nav nav-tabs" role="tablist" id="myTab">
            <!-- <li class="active"><a href="#about" role="tab" data-toggle="tab">About</a></li> -->
            <!-- <li><a href="#activity" role="tab" data-toggle="tab">News</a></li> -->
          </ul>

          <center><p class="title2"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp;&nbsp;IEI</center></p>
          <hr>


          <div id="about" style="padding:10px"><p>
            Round the session, IEI in KNIT strives in nurturing the inherent talent in its students by organizing technical and non-technical events. It thus carries the jest and pride very efﬁciently. The competitive aura thus created, helps in crafting an all-round personality of the students. </br>
          </br>
          <b>Convener - Prof. N.K. Saxena </b>
        </p>

        <!-- Admin -->

        <div class="row">
          <div class="col-md-12">
           <center><p class="title2">Administration</center></p>
         </div>
       </div>
       <br>

       <div class="row">
        <div class="col-md-2 mid">
        </div>
        <div class="col-md-4 mid">
          <center><a href="http://www.raghuraj.info/"><img src="http://drishticone.org/image/aboutus/rj.jpg" height="110" width="110" alt="Prof. Raghuraj Singh" class="img-circle"></center></a>
          <br>
          <a href="http://www.raghuraj.info/"><p><center>Prof. Raghuraj Singh</center><br /></a>
          <span class="green">Patron</span></p>
        </div>

        <div class="col-md-4 mid" style="border-right:1px solid #eee">
          <center><img src="../iei/image/N.K Saxsena.jpg"  height="110" width="110" alt="Prof. N.K. Saxena" class="img-circle"></center>
          <br>
          <p><center>Prof. N.K. Saxena</center><br />
            <span class="green">Convener</span></p>
          </div>
          <div class="col-md-2 mid"></div>
        </div><br><br>

        <!-- Team Members -->

  <!--<div class="row">
  <div class="col-md-12">
   <center><p class="title2">Final Year Team Members</p></center></div></div><br>

  <div class="row">

  <div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p><center>Anurag Pandey(CE)<br />
  <span class="green">President</span></p>
  </div>

  <div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iei/image/nandinii.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p><center>Nandinii Kumar Srivastava(EL)<br />
  <span class="green">Vice President</span></p>
  </div>

  <div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p><center>Utkarsh Varshney(EL)<br />
  <span class="green">Vice President</span></p>
  </div>

  <div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p><center>Rishabh Shukla(ME)<br />
  <span class="green">Boys Coordinator</span></p>
  </div>
  </div>
  <br>-->
  <!-- row 2 -->

 <!-- <div class="row">

  <div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iei/image/vaishali.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p>Vaishali Singh(EL)<br />
  <span class="green">Girls Coordinator</span></p>
  </div>

  <div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iei/image/konica.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p>Konica Yadav(CE)<br />
  <span class="green">Chief executive</span></p>
  </div>

  <div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iei/image/varsha.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p>Varsha Prakash(CS)<br />
  <span class="green">Chief executive</span></p>
  </div>

  <div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p>Naveen Mittal(CS)<br />
  <span class="green">Chief executive</span></p>
  </div>
  </div>
  <br>-->
  <!-- row 3 -->

  <!--<div class="row">

  <div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p><center>Anupam Chatterjee(CS)<br />
  <span class="green">Chief executive</span></p>
  </div>

  <div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p><center>Varnit Katiya(EL)<br />
  <span class="green">Chief executive</span></p>
  </div>

  <div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p><center>Ayush Garg(EE)<br />
  <span class="green">Chief executive</span></p>
</div>-->


<!-- final year Team Members -->

<div class="row">
  <div class="col-md-12">
   <center><p class="title2">Final Year Team Members</center></p>
 </div>
</div>
<br>
<div class="row">
  <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <center><img src="../iei/image/saman.jpg"  height="100" width="100" alt="" class="img-circle"></center>
    <br>
    <p><center>Saman Ateeq(EE)</center><br />
      <span class="green">President</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
      <center><img src="../iste/image/mayank.jpg"  height="100" width="100" alt="" class="img-circle"></center>
      <br>
      <p><center>Mayank Pathak(CSE)</center><br />
        <span class="green">President</span></p>
      </div>
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
        <center><img src="../iei/image/ali.jpg"  height="100" width="100" alt="" class="img-circle"></center>
        <br>
        <p><center>Ali Waaris Khan(EL)</center><br />
          <span class="green">Vice President</span></p>
        </div>
        <div class="col-md-3 mid" style="border-right:1px solid #eee">
          <center><img src="../iei/image/utkarshikha.jpg"  height="100" width="100" alt="" class="img-circle"></center>
          <br>
          <p><center>Utkarshika Chandra(ME)</center><br />
            <span class="green">Vice President</span></p>
          </div>
        </div><br>

        <!-- row 2 -->

        <div class="row">
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
            <center><img src="../iei/image/vishakha.jpg"  height="100" width="100" alt="" class="img-circle"></center>
            <br>
            <p><center>Vishakha Tomar(EL)</center><br />
              <span class="green">Chief Executive</span></p>
            </div>
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
              <center><img src="../iei/image/saumya.jpg"  height="100" width="100" alt="" class="img-circle"></center>
              <br>
              <p><center>Saumya Singh(CE</center>)<br />
                <span class="green">Chief Executive</span></p>
              </div>
              <div class="col-md-3 mid" style="border-right:1px solid #eee">
                <center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                <br>
                <p><center>Gargi Joshi(ME)</center><br />
                  <span class="green">Chief Executive</span></p>
                </div>
                <div class="col-md-3 mid" style="border-right:1px solid #eee">
                  <center><img src="../iei/image/akan.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                  <br>
                  <p><center>Akanksha Raghuvanshi(EE)</center><br />
                    <span class="green">Chief Executive</span></p>
                  </div>
                </div>
                <div class="row">
  <!--<div class="col-md-3" style="border-right:1px solid #eee">
  <center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle">
  <br>
  <p><center>Mayank Pathak(CS)<br />
  <span class="green">Chief Executive</span></p>
</div>-->
<div class="col-md-3 mid" style="border-right:1px solid #eee">
  <center><img src="../iei/image/swastick.jpg"  height="100" width="100" alt="" class="img-circle"></center>
  <br>
  <p><center>Swastick Mishra(IT)</center><br />
    <span class="green">Chief Executive</span></p>
  </div>
  <div class="col-md-3 mid" style="border-right:1px solid #eee">
    <center><img src="../iei/image/shashwat.jpg"  height="100" width="100" alt="" class="img-circle"></center>
    <br>
    <p><center>Shashwat Mishra(CS)</center><br />
      <span class="green">Chief Executive</span></p>
    </div>
    <div class="col-md-3 mid" style="border-right:1px solid #eee">
      <center><img src="../iei/image/malhaar.jpg"  height="100" width="100" alt="" class="img-circle"></center>
      <br>
      <p><center>Malhaar Srivastava(EL)</center><br />
        <span class="green">Chief Executive</span></p>
      </div>
    </div>
    <br>
    <br>

    <!-- Third Year Team Member -->

    <div class="row">
      <div class="col-md-12">
       <center><p class="title2">Third Year Team Members</p></center></div>
     </div>
     <br>
     <div class="row">
      <div class="col-md-3 mid" style="border-right:1px solid #eee">
        <center><img src="../iei/image/harsh shukla.jpg"  height="100" width="100" alt="" class="img-circle"></center>
        <br>
        <p><center>Harsh Shukla(CE)</center><br />
          <span class="green">Joint Secretary<span></p>
          </div>
          <div class="col-md-3 mid" style="border-right:1px solid #eee">
            <center><img src="../iei/image/anjali.jpg"  height="100" width="100" alt="" class="img-circle"></center>
            <br>
            <p><center>Anjali Patel(EE)</center><br />
              <span class="green">Joint SEcretary</span></p>
            </div>
            <div class="col-md-3 mid" style="border-right:1px solid #eee">
              <center><img src="../iei/image/rajat.jpg"  height="100" width="100" alt="" class="img-circle"></center>
              <br>
              <p><center>Rajat Chauhan(CS)</center><br />
                <span class="green">Boys Co-ordinator</span></p>
              </div>
              <div class="col-md-3 mid" style="border-right:1px solid #eee">
                <center><img src="../iei/image/priyal mishra.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                <br>
                <p><center>Priyal Mishra(CS)</center><br />
                  <span class="green">Girls Co-ordinator</span></p>
                </div>
              </div>
              <br>
               <!-- row 2 -->
              <div class="row">
                <div class="col-md-3 mid" style="border-right:1px solid #eee">
                  <center><img src="../iei/image/saumyad.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                  <br>
                  <p><center>Soumya Dubey(EL)</center><br />
                    <span class="green">Senior Executive<span></p>
                    </div>
                    <div class="col-md-3 mid" style="border-right:1px solid #eee">
                      <center><img src="../iei/image/madhav.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                      <br>
                      <p><center>Madhav Gopal Sharma(CS)</center><br />
                        <span class="green">Senior Executive</span></p>
                      </div>
                      <div class="col-md-3 mid" style="border-right:1px solid #eee">
                        <center><img src="../iei/image/aanchal.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                        <br>
                        <p><center>Aanchal Dev Singh(ME)</center><br />
                          <span class="green">Senior Executive</span></p>
                        </div>
                        <div class="col-md-3 mid" style="border-right:1px solid #eee">
                          <center><img src="../iei/image/priyanka.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                          <br>
                          <p><center>Priyanka Kumari(ME)</center><br />
                            <span class="green">Senior Executive</span></p>
                          </div>
                        </div>
                        <br>
                        <!-- row 3 -->
                        <div class="row">
                          <div class="col-md-3 mid" style="border-right:1px solid #eee">
                            <center><img src="../iste/image/default.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                            <br>
                            <p><center>Rashmi Gupta(MCA)</center><br />
                              <span class="green">Senior Executive<span></p>
                              </div>
                              <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                <center><img src="../iei/image/sakshi.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                <br>
                                <p><center>Sakshi Agarwal(EL)</center><br />
                                  <span class="green">Senior Executive</span></p>
                                </div>
                                <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                  <center><img src="../iei/image/ayush arela.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                  <br>
                                  <p><center>Aayush Arela(EL)</center><br />
                                    <span class="green">Senior Executive</span></p>
                                  </div>
                                  <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                    <center><img src="../iei/image/shubham.jpg"  height="100" width="100" alt=" " class="img-circle"></center>
                                    <br>
                                    <p><center>Shubham Srivastava(CE)</center><br />
                                      <span class="green">Senior Executive</span></p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                      <center><img src="../iei/image/adarsh anand.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                      <br>
                                      <p><center>Adarsh Anand(CS)</center><br />
                                        <span class="green">Senior Executive</span></p>
                                      </div>
                                      <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                        <center><img src="../iei/image/shashank.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                        <br>
                                        <p><center>Shashank Singhal(EL)</center><br />
                                          <span class="green">Senior Executive</span></p>
                                        </div>
                                        <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                          <center><img src="../iei/image/neelesh.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                          <br>
                                          <p><center>Neelesh Kumar Nirmal(CE)</center><br />
                                            <span class="green">Senior Executive</span></p>
                                          </div>
                                          <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                            <center><img src="../iei/image/vishal.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                            <br>
                                            <p><center>Vishal Kumar Rana(EE)</center><br />
                                              <span class="green">Senior Executive</span></p>
                                            </div>
                                          </div><br><br>

                                          <!-- Second Year Team Member -->

                                          <div class="row">
                                            <div class="col-md-12">
                                             <center><p class="title2">Second Year Team Members</p></center>
                                           </div>
                                         </div>
                                         <br>
                                         <!-- row 1 -->
                                         <div class="row">
                                          <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                            <center><img src="../iei/image/anuradha.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                            <br>
                                            <p><center>Anuradha Raj(IT)</center><br />
                                              <span class="green">Executive<span></p>
                                              </div>
                                              <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                <center><img src="../iei/image/priyankay.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                <br>
                                                <p><center>Priyanka Yadav(IT)</center><br />
                                                  <span class="green">Executive</span></p>
                                                </div>
                                                <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                  <center><img src="../iei/image/shivesh.jpg"  height="100" width="100" alt=" " class="img-circle"></center>
                                                  <br>
                                                  <p><center> Shivesh Kumar Rai(CS)</center><br />
                                                    <span class="green">Executive</span></p>
                                                  </div>
                                                  <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                    <center><img src="../iei/image/sambhavi.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                    <br>
                                                    <p><center>Sambhavi Pandey(EE)</center><br />
                                                      <span class="green">Executive</span></p>
                                                    </div>
                                                  </div>
                                                  <br>
                                                  <!-- row 2 -->
                                                  <div class="row">
                                                    <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                      <center><img src="../iei/image/nikita.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                      <br>
                                                      <p><center>Nikita Sharma(EE)</center><br />
                                                        <span class="green">Executive<span></p>
                                                        </div>
                                                        <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                          <center><img src="../iei/image/utkarsh gupta.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                          <br>
                                                          <p><center>Utkarsh Gupta(CE)</center><br />
                                                            <span class="green">Executive</span></p>
                                                          </div>
                                                          <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                            <center><img src="../iei/image/apoorva.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                            <br>
                                                            <p><center>Apoorva Swaroop(EL)</center><br />
                                                              <span class="green">Executive</span></p>
                                                            </div>
                                                            <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                              <center><img src="../iei/image/rishabh.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                              <br>
                                                              <p><center>Rishabh Gupta(EE)</center><br />
                                                                <span class="green">Executive</span></p>
                                                              </div>
                                                            </div><br>
                                                            <!-- ROW 3 -->
                                                            <div class="row">
                                                              <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                                <center><img src="../iei/image/raghav.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                                <br>
                                                                <p><center>Raghav Agarwal(CS)</center><br />
                                                                  <span class="green">Executive<span></p>
                                                                  </div>
                                                                  <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                                    <center><img src="../iei/image/arpit bajpai.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                                    <br>
                                                                    <p><center>Arpit Bajpai(IT)</center><br />
                                                                      <span class="green">Executive</span></p>
                                                                    </div>
                                                                    <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                                      <center><img src="../iei/image/shivendra.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                                      <br>
                                                                      <p><center>Shivendra Yadav(IT)</center><br />
                                                                        <span class="green">Executive</span></p>
                                                                      </div>
                                                                      <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                                        <center><img src="../iei/image/shikha.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                                        <br>
                                                                        <p><center>Shikha Srivastava(MCA)</center><br />
                                                                          <span class="green">Executive</span></p>
                                                                        </div>
                                                                        <br>
                                                                        <!-- row 4 -->
                                                                        <div class="row">
                                                                          <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                                            <center><img src="../iei/image/utkarsh bhatt.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                                            <br>
                                                                            <p><center>Utkarsh Bhatt(EL)</center><br />
                                                                              <span class="green">Executive<span></p>
                                                                              </div>
                                                                              <div class="row">
                                                                                <div class="col-md-3 mid" style="border-right:1px solid #eee">
                                                                                  <center><img src="../iei/image/anoop tiwari.jpg"  height="100" width="100" alt="" class="img-circle"></center>
                                                                                  <br>
                                                                                  <p><center>Anoop Tiwari(EE)</center><br />
                                                                                    <span class="green">Executive<span></p>
                                                                                    </div>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                            <!--panel end-->
                                                                          </div>
                                                                        </div>
                                                                        <!--container closed-->
                                                                        <?php
                                                                        include '../../footer.php';
                                                                        ?>
                                                                      </body>
                                                                      </html>
