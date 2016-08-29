<?php
$nav=1;
include 'fblogin.php';
include 'header.php';
?>






<body>
<title>Drishticone || Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <link  rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
 <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src='//anyflip.com/plugin/LightBox/js/anyflp-light-box-api-min.js'></script>


<style>
.title2
{
color:#1d9d74;
font-size:20px;
font-weight:200;
}
.notice
{
margin-left:10px;
margin-right:10px;
height:250px;
line-height:35px;
padding:5px;
margin-top:-25px;
margin-bottom:-25px;

}
.hoverable:hover {
  transition: box-shadow .25s;
  box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); }

.events
{

max-height:300px;
line-height:35px;
padding:5px;
margin-top:-25px;
margin-bottom:-25px;

}
.event
{
margin:7px;
}

</style>
<script>
$(function() {
    while( $('#fitin div').height() > $('#fitin').height() ) {
        $('#fitin div').css('font-size', (parseInt($('#fitin div').css('font-size')) - 1) + "px" );
    }
});
</script>
<div style="margin-left:30px; margin-right:30px;">
<div class="row">
<div class="col-md-3"><!--right column start-->
<!--important notice start-->

<div class="panel panel-default">
  <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>&nbsp;&nbsp;Important Notice</p></center>
 <hr>
 <div class="mCustomScrollbar notice" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:480px; overflow:hidden; line-height:35px;padding:5px;">
 <?php
 include('dbConnection.php');
 $q=mysqli_query($con,"SELECT * FROM notice ORDER BY date DESC LIMIT 20")or die ("Error 33");
 $c=mysqli_num_rows($q);
 if($c==0)
   {
  echo ' <p style="font-size:15px;color:red"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;&nbsp;No notice to display.</p>';
  }

 while($row=mysqli_fetch_array($q))
 {
 $title=$row['title'];
 $url=$row['url'];
 $email=$row['uploader'];
 $date=$row['date'];
$delta_time = time() - strtotime($date);
$hours = floor($delta_time / 3600);
$delta_time %= 3600;
$minutes = floor($delta_time / 60);

 $q1=mysqli_query($con,"SELECT name FROM admin Where email='$email'")or die ("Error 41");
 while($row1=mysqli_fetch_array($q1))
 {
 $name=$row1['name'];
 }
 echo '<a href="dashboard/notice_upload/'.$url.'"  title="By&nbsp;'.$name.'&nbsp;on&nbsp;'.$date.'" download><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>&nbsp;&nbsp;'.$title.'</a>';
 if($hours<168)
 echo '&nbsp;&nbsp;<img src="image/new.gif" height="10" width="35" />';
 echo '<br />';

 }
 ?>

 </div>
 <hr>
 <a href="#" style="float:right;"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp;&nbsp;Archive</a>
 </div>
  </div>

<!--important notice end-->
<!--event start-->
<div class="panel panel-default">
  <div class="panel-body">
<center> <p class="title2"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;&nbsp;Upcoming Events</p></center>
 <hr>
<div class="mCustomScrollbar events" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; line-height:35px;padding:5px;">
 <?php

 $q=mysqli_query($con,"SELECT * FROM events ORDER BY date ASC, time ASC")or die ("Error 96");
 while($row=mysqli_fetch_array($q))
 {
 $title=$row['title'];
$date=$row['date'];
$time=$row['time'];
$venue=$row['venue'];
$date1=date('Y-m-d');
$temp=0;
if(strtotime($date)>strtotime($date1))
{
$temp=1;
echo '
<a href="http://drishticone.org/events/"><div class="panel panel-default event hoverable" style="padding:0px;">
  <div class="panel-body" style="line-height:10px;">
  <p style="color:red;"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;&nbsp;'.$title.'</p>
  <p><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;'.$date.'</p><p><span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;'.$time.'</p>
  <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;&nbsp;'.$venue.'</p>
  </div></div></a>';
  }
  }
  if($temp==0)
  {
  echo ' <p style="font-size:15px;color:red"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;&nbsp;No upcoming event to display.</p>';}
  ?>
</div>
<hr>
</div></div>
<!--event end-->


<div class="panel panel-default">
  <div class="panel-body">
<center> <p class="title2"><span class=" glyphicon glyphicon-fire" aria-hidden="true"></span>&nbsp;&nbsp;Latest Edition</p></center>
<hr>

<!--panel for newspaper start-->
<img src='http://online.anyflip.com/tknt/jlbr/files/shot.jpg' class="hoverable paper-size" style="margin-left:25px;" data-rel='fh5-light-box-demo' data-href='http://online.anyflip.com/tknt/jlbr/' data-width='900' data-height='500' data-title='Drishticone Jan, 2016'><br>
</div>
</div><!-- panel for newspaper end-->


</div><!--col-md-3 ended-->
<div class="col-md-9">
<div class="row">




<?php
$q=mysqli_query($con ,"SELECT * FROM article  where flag='1' ORDER BY time DESC ") or die ("Error");
while($row=mysqli_fetch_array($q))
{
$aid=$row['aid'];
$title=$row['title'];
$writer_id=$row['writer_id'];
$writer_name=$row['writer_name'];
$type=$row['type'];
$photo=$row['photo'];
$article=$row['article'];

echo '
<a href="'.$article.'"><div class="col-md-4">
<div class="panel panel-default hoverable" style="margin:5px;">
  <div class="panel-body">
  <div style="height:150px; overflow:hidden; margin:0px; padding:0px;"><img height="150" width="100%" src="'.$photo.'" /></div>
 <div  id="fitin">'.$title.'</div>
<hr />

<div style="height:40px; margin:0px;">
<span style="float:left;color:#1d9d74;">'.$type.'</span>
<span><a style="float:right" target="_blank" href="https://facebook.com/'.$writer_id.'"><span style="color:#1d9d74;">By&nbsp;:&nbsp;</span>'.$writer_name.'</a></span>
</div>
</div></div>

</div></a>
<!--panel end-->';}
?>



</div>
</div><!--col-md-9 closed-->
</div><!--row closed-->
</div><!--container closed-->
script type="text/javascript"> var infolinks_pid = 2535606; var infolinks_wsid = 0; </script> <script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>-->
 </body>

<?php
include 'footer.php';
?>
<!--<
