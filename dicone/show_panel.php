


<?php
require("configure.php");



 if(!empty($_SESSION['event'])){
	  
	  header(" url: dicone.php");       // location or url
	  die("<font color=red> redirected to main page.... </font>");
  }

?>

<?php

$data2="" ;      //=$_SESSION['number'];
$date3="";



	
	$query =" SELECT *  FROM dicone.table2  ORDER BY date  " ;
	
	$query_para = array(
	'event'=>$data2,
	'date'=>$data3
	);
	
	try{
	$stmt = $db->prepare($query)	;
	$result = $stmt->execute($query_para); 
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
		
		 
	}
	
	 catch(PDOException $ex){ 
          die("Failed to run query: " . $ex->getMessage());


            print("POST IS EMPTY,Failed QUERY."); 
            $submitted_city = htmlentities($_POST['event'], ENT_QUOTES, 'UTF-8');
            $submitted_date = htmlentities($_POST['date'], ENT_QUOTES, 'UTF-8');
       

           }






?>





<!DOCTYPE html>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Drishticone | Student Activity</title>

<link type="text/css" rel="stylesheet" href="event.css">	
	
	

</head>
<body>

<font color ="green" size=6>         EVENTS.....  </font>
<br><br>

<br>
recent posted events...<br><br>


	

<?php while ($row = $stmt->fetch()): ?>
<div id="main" class="hoverr">
<br>
<big> </big><?php echo htmlspecialchars($row['event']) ?>  <br>
<big> </big><?php echo htmlspecialchars($row['date']) ?>  <br>
    



</div>   <br>
<?php endwhile; ?>
 <br>

  
  
  
  
  
  
  


</body>
</html>



