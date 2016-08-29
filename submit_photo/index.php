<?php
include '../fblogin.php';
include '../header.php';
include '../dbConnection.php';
?>



<body>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Drishticone || Submit photo</title>
<div style="margin-left:30px; margin-right:30px;">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
 <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span>&nbsp;&nbsp;Submit Photo</p></center>
 <hr>

 <form method="post" action="upload.php">
<!--select category start-->
<div class="form-group">
     <label for="type">Select purpose of upload :</label>
<select id="type" name="type" placeholder="Select purpose of upload" class="form-control input-md" required>
   <option value="#">Select purpose of upload</option>
  <option value="1">Click of the edition</option>
   <option value="2">For article/news</option>
   </select>
  </div>
<!--select categories end-->

 <div class="form-group">
    <label for="file">Upload&nbsp;Photo <span style="color:red">*(Its Required)</span></label>
    <input type="file" id="file" name="fileToUpload" style="color:#1d9d72;" required><br />
    <p class="help-block"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;Only .jpg ,.jpeg,.png or .gif format is allowed.<br/><span style="color:red">File size is must be less than 1000Kb</span></p>
  </div>

  <center><button type="submit" class="btn btn-primary sub" style="background:#1d9d74; border-radius:0px;">Submit&nbsp;&nbsp;<span class="glyphicon glyphicon-send" aria-hidden="true"></span></button><center>
</form>


</div>
  </div><!--panel end-->





</div></div>

</body>

</div>
<?php
include '../footer.php';
?>
