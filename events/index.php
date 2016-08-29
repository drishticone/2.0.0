<?php
$nav=4;
include '../fblogin.php';
include '../header.php';
 include('../dbConnection.php');

?>




<body>

<title>Drishticone || Events </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link  rel="stylesheet" href="http://drishticone.org/css/jquery.mCustomScrollbar.css">
 <script type="text/javascript" src="http://drishticone.org/js/jquery.mCustomScrollbar.concat.min.js"></script>


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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=900138460052258";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div style="margin-left:30px; margin-right:30px;">
<div class="row">
<div class="col-md-9">
<div class="row">
<div class="col-md-5">
<div class="panel panel-default">
  <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;&nbsp;Upcoming Events</p></center>
<hr>
 <?php
$q=mysqli_query($con,"SELECT * FROM events ORDER BY date ASC, time ASC")or die ("Error 54");

 while($row=mysqli_fetch_array($q))
 {
 $title=$row['title'];
$date=$row['date'];
$time=$row['time'];
$venue=$row['venue'];
$date1=date('Y-m-d');
$desc=$row['desc'];
$temp=0;
if(strtotime($date)>strtotime($date1))
{
$temp=1;
echo '
 <p style="color:red;"><span style="color:#1d9d74"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;&nbsp;Title :&nbsp;</span>'.$title.'</p>
  <p><span style="color:#1d9d74"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;&nbsp;Date&nbsp;:&nbsp;</span>'.$date.'</p><p><span style="color:#1d9d74"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;Time&nbsp;:&nbsp;</span>'.$time.'</p>
  <p><span style="color:#1d9d74"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;&nbsp;Venue&nbsp;:&nbsp;</span>'.$venue.'</p>';
  if($desc!=NULL)
  {
  echo   '<p><span style="color:#1d9d74"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp;&nbsp;Description&nbsp;:&nbsp;</span>'.$desc.'</p>';

  }
  echo '<hr>';
  }
  }
  if($temp==0)
  {
  echo '<p style="font-size:15px;color:red"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;&nbsp;Oopps !! No upcoming event to display.</p>';}

  ?></div></div>
  <!-------------------------------------------suggestion for article---->

<?php
$q=mysqli_query($con ,"SELECT * FROM article  where flag='1'  AND type !='News' ORDER BY rand() LIMIT 1 ") or die ("Error");
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
<a href="'.$article.'">
<div class="panel panel-default">
  <div class="panel-body">
<center> <p class="titles"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp;&nbsp;recommended Articles</p></center>
<hr>
  <div style="height:170px; overflow:hidden; margin:0px; padding:0px;"><img height="170" width="100%" src="'.$photo.'" /></div>
 <div  id="fitin" >'.$title.'</div>
<hr />

<span style="float:left;color:#1d9d74;">'.$type.'</span>
<span style="float:right"><a style="float:right" target="_blank" href="https://facebook.com/'.$writer_id.'"><span style="color:#1d9d74;">By&nbsp;:&nbsp;</span>'.$writer_name.'</a></span>
</div></div>

</a>
<!--panel end-->';}
?>

 <!--------------------------------suggestion end----->

  </div>


  <div class="col-md-7">
  <div class="panel panel-default">
  <div class="panel-body">
 <center><p class="title2"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;Past Events</p></center>
 <hr>
  <div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:600px; padding:5px;">
 <?php
$q=mysqli_query($con,"SELECT * FROM events ORDER BY date DESC, time DESC")or die ("Error 54");
 while($row=mysqli_fetch_array($q))
 {
 $title=$row['title'];
$date=$row['date'];
$time=$row['time'];
$venue=$row['venue'];
$date1=date('Y-m-d');
$desc=$row['desc'];
$temp=0;
if(strtotime($date)<strtotime($date1))
{
$temp=1;
echo '
  <p style="color:red;"><span style="color:#1d9d74"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp;&nbsp;Title :&nbsp;</span>'.$title.'</p>
  <p><span style="color:#1d9d74"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;&nbsp;Date&nbsp;:&nbsp;</span>'.$date.'</p><p><span style="color:#1d9d74"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;Time&nbsp;:&nbsp;</span>'.$time.'</p>
  <p><span style="color:#1d9d74"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;&nbsp;Venue&nbsp;:&nbsp;</span>'.$venue.'</p>';
  if($desc!=NULL)
  {
  echo   '<p><span style="color:#1d9d74"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp;&nbsp;Description&nbsp;:&nbsp;</span>'.$desc.'</p>';

  }
  echo '<hr>';
  }
  }

  ?>
  </div></div></div></div>

  </div>
  </div>




  <div class="col-md-3">

<div class="panel panel-default">
  <div class="panel-body">
<div class="fb-page" data-href="https://www.facebook.com/DrishtICONeKNIT" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/DrishtICONeKNIT"><a href="https://www.facebook.com/DrishtICONeKNIT">DrishtICONe - KNIT Newsletter</a></blockquote></div></div>
</div></div>



  <!-------------------------------------------suggestion for article---->

<?php
$q=mysqli_query($con ,"SELECT * FROM article  where flag='1'  AND type !='News' ORDER BY rand() LIMIT 1 ") or die ("Error");
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
  <div class="panel panel-default">
  <div class="panel-body">
<center> <p class="titles"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>&nbsp;&nbsp;Must Read</p></center>
<hr>
<a href="'.$article.'">
  <div style="height:120px; overflow:hidden; margin:0px; padding:0px;"><img height="120" width="100%" src="'.$photo.'" /></div>
 <div  id="fitin" >'.$title.'</div>
<hr />

<span style="float:left;color:#1d9d74;">'.$type.'</span>
<span style="float:right"><a style="float:right" target="_blank" href="https://facebook.com/'.$writer_id.'"><span style="color:#1d9d74;">By&nbsp;:&nbsp;</span>'.$writer_name.'</a></span>


</a></div></div>
<!--panel end-->';}
?>

  <!--------------------------------suggestion end----->
</div>











</div></div><!--container closed-->

 </body>

<?php
include '../footer.php';
?>
