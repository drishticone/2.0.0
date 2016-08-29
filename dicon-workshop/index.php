<?php
$nav=9;
include '../fblogin.php';
include '../header.php';
 include('../dbConnection.php');
?>





<body >

<title>Drishticone || WorkShop</title>
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

<div style="margin-left:30px; margin-right:30px;">
<div class="container">
<div class="row" >
<div class="col-md-12">
<div class="panel panel-default" >
  <div class="panel-body">
 <center><p class="title2" style="font-size:25px; line-height:35px;"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>&nbsp;&nbsp;Web&nbsp-&nbspWizard</p></center>
<hr>
<span class="title2" style="color:red;">Note:</span><br>
<p style="color:red;">Students selected for Round 2 should come along with their Fresh C.V. in proper format at electrical department at 3 pm and do carry your project in pendrive. Please convey this message to others.</P>
<div class="row">
<span class="title2"><center>Result: Round - 2</center></span><br>
<div class="col-md-6">
<span class="title2"><center>Boys</center></span><br>
<table class="table table-striped">
	<tbody>
		<tr>
			<td><strong></strong></td>
			<td><strong>NAME</strong></td>
			<td><strong>BRANCH</strong></td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Shailesh Kumar</td>
			<td>B.Tech - C.S.E.</td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Sagar</td>
			<td>B.Tech - Civil</td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Saurabh Maurya</td>
			<td>B.Tech - C.S.E.</td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Ankit Kumar Mishra</td>
			<td>B.Tech - C.S.E.</td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Mayank Kaushik</td>
			<td>B.Tech - C.S.E.</td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Nagendra Pratap Singh</td>
			<td>B.Tech - I.T.</td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Vivek Kumar Singh</td>
			<td>B.Tech - I.T.</td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Aayush Varshney</td>
			<td>B.Tech - I.T.</td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Suyash</td>
			<td>M.C.A.</td>
		</tr>
	</tbody>
</table>

</div>

<div class="col-md-6">
<span class="title2"><center>Girls</center></span><br>
<table class="table table-striped">
	<tbody>
		<tr>
			<td><strong></strong></td>
			<td><strong>NAME</strong></td>
			<td><strong>BRANCH</strong></td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Sheerat Kaur</td>
			<td>B.Tech - I.T.</td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Anuradha Raj</td>
			<td>B.Tech - I.T.</td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Priyanshi Singh</td>
			<td>B.Tech - I.T.</td>
		</tr>
		<tr>
			<td><li></strong></td>
			<td>Anushka Agarwal</td>
			<td>B.Tech - C.S.E. (Sonbhadra)</td>
		</tr>
	</tbody>
</table>

</div>
</div>
<hr>
<div class="row">
<div class="col-md-12">
<span class="title2"><center>Result: Round - 1</center></span><br>
<table class="table table-striped">
	<tbody>
		<tr>
			<td><strong>RANK</strong></td>
			<td><strong>GROUP MEMBERS</strong></td>
			<td><strong>BOOTSTRAP(5)</strong></td>
			<td><strong>COLOR(5)</strong></td>
			<td><strong>CREATIVITY(5)</strong></td>
			<td><strong>CLEAR CODE(10)</strong></td>
			<td><strong>FILE MANAGEMENT(5)</strong></td>
			<td><strong>BONUS</strong></td>
			<td><strong>TOTAL</strong></td>
		</tr>
		<tr>
			<td>1</td>
			<td>SAGAR AND ANUSHA</td>
			<td>5</td>
			<td>4.5</td>
			<td>5</td>
			<td>9</td>
			<td>5</td>
			<td>2</td>
			<td>30.5</td>
		</tr>
		<tr>
			<td>2</td>
			<td>ANKIT AND MAYANK</td>
			<td>5</td>
			<td>4.5</td>
			<td>5</td>
			<td>9</td>
			<td>5</td>
			<td>1</td>
			<td>29.5</td>
		</tr>
		<tr>
			<td>3</td>
			<td>VIVEK AND SUYASH</td>
			<td>3</td>
			<td>4</td>
			<td>4</td>
			<td>9</td>
			<td>5</td>
			<td>1</td>
			<td>26</td>
		</tr>
		<tr>
			<td>4</td>
			<td>SHAILESH</td>
			<td>0</td>
			<td>4</td>
			<td>4</td>
			<td>9</td>
			<td>5</td>
			<td>1</td>
			<td>23</td>
		</tr>
		<tr>
			<td>5</td>
			<td>NAGENDRA</td>
			<td>0</td>
			<td>4</td>
			<td>4</td>
			<td>9</td>
			<td>2</td>
			<td>1</td>
			<td>20</td>
		</tr>
		<tr>
			<td>6</td>
			<td>UPENDRA KUMAR</td>
			<td>0</td>
			<td>3</td>
			<td>3.5</td>
			<td>8</td>
			<td>4</td>
			<td>1</td>
			<td>19.5</td>
		</tr>
		<tr>
			<td>7</td>
			<td>PRIYANSHI AND SEERAT</td>
			<td>0</td>
			<td>3</td>
			<td>3.5</td>
			<td>9</td>
			<td>3</td>
			<td>0</td>
			<td>18.5</td>
		</tr>
		<tr>
			<td>8</td>
			<td>TUSHAR AND SHIVESH</td>
			<td>0</td>
			<td>3</td>
			<td>3</td>
			<td>8</td>
			<td>3</td>
			<td>1</td>
			<td>18</td>
		</tr>
		<tr>
			<td>9</td>
			<td>SAURAV</td>
			<td>0</td>
			<td>3</td>
			<td>3</td>
			<td>8</td>
			<td>2</td>
			<td>1</td>
			<td>17</td>
		</tr>
		<tr>
			<td>10</td>
			<td>RISHI AND AVISH</td>
			<td>0</td>
			<td>3</td>
			<td>3.5</td>
			<td>8</td>
			<td>2</td>
			<td>0</td>
			<td>16.5</td>
		</tr>
		<tr>
			<td>11</td>
			<td>NISHA AND AKANSHA</td>
			<td>0</td>
			<td>3</td>
			<td>3</td>
			<td>8</td>
			<td>2</td>
			<td>0</td>
			<td>16</td>
		</tr>
		<tr>
			<td>12</td>
			<td>PRIYANKA AND NISHU</td>
			<td>0</td>
			<td>3</td>
			<td>3</td>
			<td>8</td>
			<td>2</td>
			<td>0</td>
			<td>16</td>
		</tr>
	</tbody>
</table>

</div>
</div>
<div class="row">
<div class="col-md-12">
<br>
<p style="font-size:15px; line-height:30px; padding:5px; letter-spacing:.7px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In today's internet driven world , websites are the heart of everything from business to gaming to social experiences to even academia .
So,in this web driven world , web developers are the pioneers .<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drishticone bring to you the event <b><u>WEB-Wizards</u></b> which begets in you a web developer , equipped with new technologies and all the skills needed.<br>
<span class="title2"><br>Theme for the competition:</span><br>
"EFFULGENCE" the national level technical fest of our college is going to be held in the upcoming month(just an example). Your team has been assigned the task to design a website for the fest using basic HTML and CSS .<br><br> <span class="title2">Features:<br></span>
Homepage must have the following tabs(navigation bar):<br>
HOME | EVENTS | REGISTER | CONTACT US<br><br>
Events page should contain the details of various events to be organized(rules and name of the event coordinators).<br>
Registration page should contain a registration form with following attributes<br>
Name | Email id | Password | College Name | Mobile No.<br>
(Don't worry about how form will be submitted, Just design the form using HTML/CSS)<br>
Contact Us page should contain the contact details of atleast four Event Coordinators having details: Name , email id, Mobile No.<br><br>
<span class="title2">Extra Features (Bonus Points):<br></span>
Display should have good User Interface.<br>
Use Bootstrap for making the website responsive.<br>
Registration Form (3rd feature).<br><br>
<span class="title2">Rules:<br></span>
This is a team event comprising maximum of two members.
Top 10 teams will be shortlisted and interviewed for the selection in web-development team of Drishticone.
Each and every student's code shall be evaluated on the basis of performance, design and accessibility.<br>
Note:<br>
Don't panic if you are not familiar with Bootstrap, Javascript, PHP, etc, You will be judged on your learning and creative skills only.<br>
<br><span class="title2">Resources :<br></span>
<b>HTML, CSS:</b> www.w3schools.com , www.codecademy.com<br>
<b>Bootstrap:</b> www.getbootstrap.com/components<br>
<br><span class="title2">For any guidance you can contact :</span><br>
Atul Gupta +91-7068121491 <br>
Rajat Khemka +91-9169536892 <br>
Rupesh Yadav +91-9410033022<br>
Subham Pratap Singh +91-9506146818<br>
Saumya Singh Chauhan (CS 2nd Year)<br>
Akanksha Singh (IT 2nd Year)<br ><br>

<span class="title2">Deadline :<br></span> Last date for submission is 5<sup>th</sup> Feb 2016 .<br></p>
</div>
<!-- <div class="col-md-5" style="border-left:1px solid #eee;">
 <?php
				if(isset($_SESSION['email']))
				{
					$id=$_SESSION['id'];
					$q=mysqli_query($con,"SELECT * FROM workshop WHERE fbid='$id' ") or die ("Error 32");
					$count=mysqli_num_rows($q);
					if($count>0)
					{
						$name=$_SESSION['name'];
						echo '<span style="color:#D32F2F">Hello,&nbsp'.$name.'<br>You are successfully registered for workshop.<br><br></span>
							Download and Install following softwares.<br>
							-&nbspLatest browsers<br>
							-&nbsp<a href="https://notepad-plus-plus.org/repository/6.x/6.8.8/npp.6.8.8.Installer.exe">Notepad++</a>';
					}
					else
					{
						echo '<center><p class="title2" style="font-size:25px; line-height:35px;">&nbsp;&nbsp;Registration Form</p></center>
						<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-default">
						<div class="panel-body">
						<form action="reg.php" method="POST">
						<div class="form-group">
						<label for="roll">Roll No.</label>
						<input type="text" name="roll" class="form-control" id="roll" placeholder="Enter your roll no.">
						</div>
						<div class="form-group">
						<label for="branch">Select&nbsp;Branch</label>
						<select id="branch" name="branch" placeholder="Branch" class="form-control input-md" >
						<option value="CS">Computer Science and Engg.</option>
						<option value="IT">Information Technology</option>
						<option value="MCA">M.C.A.</option>
						<option value="other">Other</option></select>
						</div>
						<div class="form-group">
						<label for="college">Select&nbsp;college</label>
						<select id="college" name="college" placeholder="Select College" class="form-control input-md" >
						<option value="KNIT">KNIT Sultanpur</option>
						<option value="SONBHADRA">GOV. ENGG. COLLEGE SONBHADRA</option>
						</select>
						</div>
						<center><button type="submit" class="btn btn-primary sub" style="background:#1d9d74; border-radius:0px;">Submit&nbsp;&nbsp;<span class="glyphicon glyphicon-send" aria-hidden="true"></span></button><center>
						</form>
						</div>
						</div>
						</div>';
					}
				}
				else
				{
					echo '<center>Login into Drishticone to register for workshop</center>';
				}
?>

<hr>
<span class="title2">Workshop Update:</span><br>

<b>Time : </b>10:00am - 12:30am, 26 jan 2016<br>
<b>Venue : EE 301 or EE 302</b><br><br>

<span class="title2">Note:</span><br>
<p>Students who have any doubts can come 10 or 15 minutes before the scheduled time.</P>
<p>Time for next day will be updated soon. It is total 8 hour workshop.</p>
</div> -->
</div></div></div><!--panel and row of col-md-12 end-->
</div>
</div><!--end of row-->
</div>
</div>



 </body>

<?php
include '../footer.php';
?>
