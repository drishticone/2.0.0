<?php
include('../../../dbConnection.php');
$q=mysqli_query($con ,"SELECT * FROM article  where aid='$aid'") or die ("Error");
while($row=mysqli_fetch_array($q))
{
$title=$row['title'];
$writer_id=$row['writer_id'];
$writer_name=$row['writer_name'];
$type=$row['type'];
$photo=$row['photo'];
$time=$row['time'];
}
if($type=='news')
$nav=3;
else
$nav=2;
include '../../../fblogin.php';
include '../../../header.php';

$ogurl='http://drishticone.org'.$_SERVER['REQUEST_URI'];

$q1=mysqli_query($con,"SELECT * FROM review WHERE aid='$aid'")or die ("Error 16");
while($row=mysqli_fetch_array($q1))
{
$rid=$row['rid'];
$rname=$row['rname'];
$rtime=$row['time'];
$file = fopen("article.txt","r");
$txt=fread($file,filesize("article.txt"));
fclose($file);
}
?>
<!doctype html>
<html>
<head>
<title><?php echo $title ; ?></title>
 <meta property="og:url"           content="<?php echo $ogurl; ?>">
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php echo $title ; ?>" />
    <meta property="og:description"   content="<?php echo $title ; ?>" />
    <meta property="og:image"         content="<?php echo $photo ; ?>" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<style>

</style>
<script>
$(function() {
    while( $('#fitin div').height() > $('#fitin').height() ) {
        $('#fitin div').css('font-size', (parseInt($('#fitin div').css('font-size')) - 1) + "px" );
    }
});
</script>

</head>

<body>
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
<div class="panel panel-default content">
  <div class="panel-body">
  
 <!--title of article---------------------------------------------------------------------------------------------------------------------> 
<center> <p class="title2"><?php echo $title ; ?></p></center>
 <!--------------------------------------------------------------------------------------------------------------------------------------->
 
 <hr>
<div class="row">
<div class="col-md-2" style="font-size:13px;">
<?php echo '<center><img  height="70" width="60" class="img-responsive img-circle"  src="https://graph.facebook.com/'.$writer_id.'/picture?type=large"/></center>';?>
<br /><br />
<center><p ><span style="color:#1d9d74; "> By&nbsp;:&nbsp;</span><a target="_blank" title="submitted on <?php echo $time ; ?>" href="https://facebook.com/<?php echo $writer_id ; ?>"><?php echo $writer_name ; ?></a><br />
<span style="color:#1d9d74; ">Review&nbsp;By&nbsp;:&nbsp;</span><a target="_blank" title="Reviwed on <?php echo $rtime ; ?>" href="https://facebook.com/<?php echo $rid; ?>"><?php echo $rname ; ?></a></p> </center>
<hr >
</div>
<div class="col-md-8 article"  style="overflow-x:hidden">
<!-----------------------------------------------content of article-------------------------------------------------------------------->
<?php
echo $txt;
?>

<!---------------------------------------------------------------closing of content---------------------------------------------------------->
<hr>
<div class="fb-send" data-href="<?php echo $ogurl; ?>"></div><br><br>


<div class="fb-like" data-href="<?php echo $ogurl; ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="fb-comments" data-href="<?php echo $ogurl; ?>" data-numposts="5"></div>

</div></div><!--closing of col-md-8 and row-->



</div></div>




</div><!--col-md-9 closed-->

<div class="col-md-3">
<div class="panel panel-default">
  <div class="panel-body">
<center> <p class="titles"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp;&nbsp;Suggested Articles</p></center>
</div></div>
<?php 
$q=mysqli_query($con ,"SELECT * FROM article  where flag='1'  AND type !='News' ORDER BY rand() LIMIT 3 ") or die ("Error");
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
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div style="height:150px; overflow:hidden; margin:0px; padding:0px;"><img height="150" width="100%" src="'.$photo.'" /></div>
 <div  id="fitin" >'.$title.'</div>
<hr />

<span style="float:left;color:#1d9d74;">'.$type.'</span>
<span style="float:right"><a style="float:right" target="_blank" href="https://facebook.com/'.$writer_id.'"><span style="color:#1d9d74;">By&nbsp;:&nbsp;</span>'.$writer_name.'</a></span>
</div></div>

</a>
<!--panel end-->';}
?>

<div class="panel panel-default">
  <div class="panel-body">
<div class="fb-page" data-href="https://www.facebook.com/DrishtICONeKNIT" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/DrishtICONeKNIT"><a href="https://www.facebook.com/DrishtICONeKNIT">DrishtICONe - KNIT Newsletter</a></blockquote></div></div>
</div></div>



</div>

</div><!--row closed-->
</div><!--container closed-->
<?php
include '../../../footer.php';
?>

 </body>
</html>
