<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Drishticone || Footer</title>
</head>

<body >
<?php
include 'dbConnection.php';
?>
     <footer class="page-footer" style="background:#202020;">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <a href="http://drishticone.org"><h4 class="title" style="color:#1d9d74;">Drishticone KNIT Newsletter</h4></a>
                <div class="row">
                <div class="col-md-6">
                <p class="footerleft"><a  href="http://drishticone.org/about_knit/">About&nbsp;KNIT</a></p>
                <p class="footerleft"><a  href="http://drishticone.org/write_article/">Write&nbsp;Article</a></p>
				<p class="footerleft"><a  href="http://drishticone.org/webmail">Web-Mail</a></p>
                <!--<p class="footerleft"><a  href="#!">Alumni&nbsp;Portal</a></p>
                <p class="footerleft"><a  href="http://drishticone.org/submit_photo">Submit&nbsp;Photo</a></p>-->
                
                </div>
                <div class="col-md-6">
                <p class="footerleft"><a  href="http://drishticone.org/write_news">Write&nbsp;News</a></p>
				<?php
				if(isset($_SESSION['id']))
				{
				$id=$_SESSION['id'];
        $q1=mysqli_query($con,"SELECT * FROM user WHERE id='$id' ") or die ("Error 32");
        while ($row=mysqli_fetch_array($q1)) {
          $email=$row['email'];
        }
				$q=mysqli_query($con,"SELECT * FROM admin WHERE email='$email' ") or die ("Error 33");
				$count=mysqli_num_rows($q);
				if($count>0)
				{
				echo ' <p class="footerleft"><a  href="http://drishticone.org/dashboard/">Admin&nbsp;Login</a></p>';
				}
				}
				?>
				
              
                 <p class="footerleft"><a  href="http://drishticone.org/feedback/">Feedback</a></p>
                 <!--  <p class="footerleft"><a  href="http://drishticone.org/report_problem/">Report&nbsp;a&nbsp;Problem</a></p>-->
                </div></div>
              </div>
              <div class="col-md-4 col-md-offset-2 footerright">
              <!--for aechive-->
             <!-- <p class="footerleft" style="margin-top:30px">Archive</p>
               <form class="form-inline">
  <div class="form-group">
   
   <div class="input-group">
      <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></div>
     <select id="month" name="month" placeholder="Select Month" class="form-control input-md" >
   <option value="#">Select Month</option>
  <option value="M">August 2015</option>
  <option value="F">September 2015</option> </select>
      
    </div>
  </div>
  &nbsp;<button type="submit" class="btn btn-primary sub" style="background:#1d9d74; border-radius:0px;">Submit&nbsp;&nbsp;<span class="glyphicon glyphicon-send" aria-hidden="true"></span></button>
</form>-->
      <!--archives end-->         
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <div class="row">
            <div class="col-md-6">
            © 2015 Copyright Drishticone Web Development Team
             </div>
            <div class="col-md-6">
             <a style="float:right; color:#fff;" class="footerleft right" href="http://drishticone.org/developer/">Powered By Drishticone web team</a>
            </div></div>
          </div></div>
        </footer>
</body>
</html>