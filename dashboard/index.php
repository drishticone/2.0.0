<?php
include '../fblogin.php';
include('../header.php');
?>


	<?php
	            include('../dbConnection.php');
				if(isset($_SESSION['email']))
				{
				$email=$_SESSION['email'];
				$q=mysqli_query($con,"SELECT * FROM admin WHERE email='$email' ") or die ("Error 32");
				$count=mysqli_num_rows($q);
				if($count!=1)
				{

			header("location:../error.php");
				}
				}
				?>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Drishticone || Admin Panel</title>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>


<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
  <div class="panel-body">
   <center><p class="title1"><span class="glyphicon glyphicon-king" aria-hidden="true"></span>&nbsp;&nbsp;Admin Login</p></center>
   <form method="post" action="login.php">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"';?> class="form-control" id="email" placeholder="Enter your email-id" disabled>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="pass" class="form-control" id="password" placeholder="Enter your pasword">
  </div>
  <div class="form-group">
  <label for="power">Login&nbsp;Purpose</label>
    <select id="power" name="power" placeholder="Login For" class="form-control input-md" >
   <option value="0">Select&nbsp;Login&nbsp;Purpose</option>
 <!-- <option value="1">Managment</option> -->
  <option value="2">Review</option>
  <option value="3">Create&nbsp;Event</option>
  <option value="4">Notice&nbsp;Upload</option>
 <!-- <option value="5">VOK&nbsp;Answer</option> -->
 <!--  <option value="6">Gallery&nbsp;Upload</option> --> </select>
  </div>
  <center><button type="submit" class="btn btn-primary sub" style="background:#1d9d74; border-radius:0px;">Submit&nbsp;&nbsp;<span class="glyphicon glyphicon-send" aria-hidden="true"></span></button><center>
</form>
  </div>
</div>

</div>
</div>







</body>
<?php
include('../footer.php');
?>
