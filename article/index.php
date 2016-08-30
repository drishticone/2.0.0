<?php
$nav=2;
include '../fblogin.php';
include '../header.php';
 include('../dbConnection.php');
?>

<!doctype html>
<html>
<head>
<title>Drishticone || Article</title>
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
<div class="col-md-9">
<div class="panel panel-default ">
  <div class="panel-body">
 <center><p class="title2" style="font-size:25px; line-height:35px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Articles</p></center>
<hr>
<div class="row">

<?php 
$q=mysqli_query($con ,"SELECT * FROM article  where flag='1' and type !='News' ORDER BY time DESC ") or die ("Error");
$c=0;
while($row=mysqli_fetch_array($q) )
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
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div style="height:150px; overflow:hidden; margin:0px; padding:0px;"><img height="150" width="100%" src="'.$photo.'" /></div>
 <div  id="fitin" >'.$title.'</div>
<hr />
<div style="height:40px">
<span style="float:left;color:#1d9d74;">'.$type.'</span>
<span style="float:right"><a style="float:right" target="_blank" href="https://facebook.com/'.$writer_id.'"><span style="color:#1d9d74;">By&nbsp;:&nbsp;</span>'.$writer_name.'</a></span>
</div></div></div>

</div></a>
<!--panel end-->';}
?>










</div><!--row end-->
</div></div>
</div>

<!----------------------------------------------------------------------------------------------------------------------------->
<div class="col-md-3 side">

<div class="panel panel-default">
  <div class="panel-body">
<div class="fb-page" data-href="https://www.facebook.com/DrishtICONeKNIT" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/DrishtICONeKNIT"><a href="https://www.facebook.com/DrishtICONeKNIT">DrishtICONe - KNIT Newsletter</a></blockquote></div></div>
</div></div>

</div>











</div></div><!--container closed-->
<?php
include '../footer.php';
?>
 </body>
</html>

<?php $aid='56a6036498a8c' ; 
include '../../temp.php';?>

<?php $aid='56a6036498a8c' ; 
include '../../temp.php';?>
