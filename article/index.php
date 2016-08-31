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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$(document).ready(function(){

       window.start = 0;
       window.no = 9;
       window.endLimit;

        $.post('http://drishticone.org/article/articles.php', {'action': "articleCallRow"}, function (response) {
            window.endLimit = parseInt(response);
             //alert(parseInt(response));
        });

        oncedata =  {'action': "articleCall", 'start': window.start, 'no': window.no };
        $.post('http://drishticone.org/article/articles.php', oncedata, function (response) {
            
             
            if(window.start<(window.endLimit-window.no))
              {
                window.start = window.start+window.no;
              }
             else
               {
               //  $('.loadmore').attr('disabled','disabled');
                  
               }

             
            $('.articles').append(response);
        });


    
       
    $(".loadmore").click(function(){
       
       var fun = "articleCall";
       
       data =  {'action': fun, 'start': window.start, 'no': window.no };
        $.post('http://drishticone.org/article/articles.php', data, function (response) {
            
             
            if(window.start<(window.endLimit-window.no))
              {
                window.start = window.start+window.no;
              }
             else
               {
                 

                $('.loadmore').hide();
               }

            //alert("action performed successfully"+response);
            $('.articles').append(response);
        });

    });

}); 

</script>
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

echo '<div class="articles"></div>';

echo '

<div class="row">

<center><button class="loadmore btn btn-primary" >Load more</button></center>

</div>';

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

<?php $aid='5710855a962a4' ; 
include '../../temp.php';?>
