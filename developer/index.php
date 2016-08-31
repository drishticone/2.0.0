<?php
include '../fblogin.php';
include '../header.php';
 include('../dbConnection.php');
?>

<!doctype html>
<html>
<head>
<title>Drishticone || Drishticone web team</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<style>
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
<div class="col-md-12">
<div class="panel panel-default">
 <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-king" aria-hidden="true"></span>&nbsp;&nbsp;Web Team</p></center>
<hr>
 <center><p class="title2">Final Year Team</p></center>

<!--

<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/vipin.jpg"  height="140" width="140" alt="Vipin Srivastav" class="img-circle">
<br>
<p>Vipin Srivastava<br />
<span class="green">Team Head</span></p>
</div>



<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/nidhi.jpg"  height="140" width="140" alt="Nidhi Singh" class="img-circle">
<br>
<p>Nidhi Singh<br />
<span class="green">Team Head</span></p>
</div>



<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/shwet.jpg"  height="140" width="140" alt="Shwet Mishra" class="img-circle">
<br>
<p>Shwet Mishra<br />
<span class="green">Senior Developer</span></p>
</div>



<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/ankush.jpg"  height="140" width="140" alt="Ankush Srivastav" class="img-circle">
<br>
<p>Ankush Srivastava<br />
<span class="green">Senior Developer</span></p>
</div>

<div class="row">
<div class="col-md-4 col-md-offset-4"><hr></div></div>


-->



<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/sunny.jpg"  height="140" width="140" alt="Sunny Prakash Tiwari" class="img-circle">
<br>
<p>Sunny Prakash Tiwari<br />
<span class="green">Developer</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/chirag.jpg"  height="140" width="140" alt="Chirag Goel" class="img-circle">
<br>
<p>Chirag Goel<br />
<span class="green">Developer</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/shivani.jpg"  height="140" width="140" alt="Shivani Jaiswal" class="img-circle">
<br>
<p>Shivani Jaiswal<br />
<span class="green">Developer</span></p>
</div>


<div class="row">
<div class="col-md-4 col-md-offset-4"><hr></div></div>


 <center><p class="title2">Third Year Team</p></center>


<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/atulg.jpg"  height="140" width="140" alt="Atual Gupta" class="img-circle">
<br>
<p>Atul Gupta<br />
<span class="green">Developer</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/rupesh.jpg"  height="140" width="140" alt="Rupesh Yadav" class="img-circle">
<br>
<p>Rupesh Yadav<br />
<span class="green">Developer</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/rajat.jpg"  height="140" width="140" alt="Rajat Khemka" class="img-circle">
<br>
<p>Rajat Khemka<br />
<span class="green">Developer</span></p>
</div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/shubhamweb.jpg"  height="140" width="140" alt="Shubham Pratap" class="img-circle">
<br>
<p>Shubham Pratap<br />
<span class="green">Developer</span></p>
</div>

<div class="col-md-3"></div>

<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/saumya.jpg"  height="140" width="140" alt="Saumya Chauhan" class="img-circle">
<br>
<p>Saumya Chauhan<br />
<span class="green">Developer</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/akanksha.jpg"  height="140" width="140" alt="Akanksha Singh" class="img-circle">
<br>
<p>Akanksha Singh<br />
<span class="green">Developer</span></p>
</div>



 <center><p class="title2">Second Year Team</p></center>


<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/mayank.jpg"  height="140" width="140" alt="Mayank Kaushik" class="img-circle">
<br>
<p>Mayank Kaushik<br />
<span class="green">Developer</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/ankit.jpg"  height="140" width="140" alt="Ankit Mishra" class="img-circle">
<br>
<p>Ankit Mishra<br />
<span class="green">Developer</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/aayush.jpg"  height="140" width="140" alt="Aayush varshney" class="img-circle">
<br>
<p>Aayush varshney<br />
<span class="green">Developer</span></p>
</div>



<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/vivek.jpg"  height="140" width="140" alt="vivek kr. singh" class="img-circle">
<br>
<p>vivek kr. singh<br />
<span class="green">Developer</span></p>
</div>



<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/anushka.jpg"  height="140" width="140" alt="Anushka Agrawal" class="img-circle">
<br>
<p>Anushka Agrawal<br />
<span class="green">Developer</span></p>
</div>



<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/anuradha.jpg"  height="140" width="140" alt="Anuradha raj" class="img-circle">
<br>
<p>Anuradha raj<br />
<span class="green">Developer</span></p>
</div>


<div class="col-md-3 mid">
<img src="http://drishticone.org/developer/photo/priyanshi.jpg"  height="140" width="140" alt="Priyanshi singh" class="img-circle">
<br>
<p>Priyanshi singh<br />
<span class="green">Developer</span></p>
</div>




</div></div></div></div></div>

<?php
include '../footer.php';
?>
 </body>
</html>
