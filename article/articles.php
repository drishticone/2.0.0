<?php
include('../dbConnection.php');

?>

<?php

if (isset($_POST['action'])){

  if($_POST['action'] == 'articleCall')
  {
    $start = $_POST['start'];
    $no = $_POST['no'];

    // call function
    articleCall($start,$no);
  }

  if($_POST['action'] == 'articleCallRow')
  {

    // call function
    totalRows();
  }

}

function totalRows(){
 include('../dbConnection.php');

 $totaldata = mysqli_query($con, "SELECT * FROM article where flag='1' and type !='News' ORDER BY time DESC");
 $totalRows = mysqli_num_rows($totaldata);
 echo "$totalRows";
}

function articleCall($start,$no){
 //echo "<hr>start=$start,no=$no <br>";
  include('../dbConnection.php');

  $q=mysqli_query($con ,"SELECT * FROM article where flag='1' and type !='News' ORDER BY time DESC LIMIT $start,$no") or die ("Failed Query");

   while($row=mysqli_fetch_row($q))
    {
    

$aid=$row[0];
$title=$row[1];
$writer_id=$row[3];
$writer_name=$row[4];
$type=$row[7];
$photo=$row[8];
$article=$row[2];

echo '
<a href="'.$article.'"><div class="col-md-4">
<div class="panel panel-default hoverable">
  <div class="panel-body">
  <div style="height:160px; overflow:hidden; margin:-12px; padding:0px;"><img height="150" width="100%"  src="'.$photo.'" /></div>
 <div  id="fitin" >'.$title.'</div>
<hr />
<div style="height:40px">
<span style="float:left;color:#1d9d74;">'.$type.'</span>
<span style="float:right"><a style="float:right" target="_blank" href="https://facebook.com/'.$writer_id.'"><span style="color:#1d9d74;">By&nbsp;:&nbsp;</span>'.$writer_name.'</a></span>
</div></div></div>

</div></a>
<!--panel end-->';



    }


}


?>


