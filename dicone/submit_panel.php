

<?php
  require("configure.php");

if(!empty($_POST)){
	
	if(empty($_POST['event'])){
		
		header("refresh: 2 ; url= dicone.php ");
		die(" <font color=blue > please enter event in field...</font>");
		
	}
	
	


	
	if(empty($_POST['date'])){
		
		header("refresh: 2 ; url= dicone.php ");
		die(" <font color=blue > please enter date in field...</font>");
		
	}	
	
	
		
	}
	
?>	

<?php
//adding to database

 $query ="INSERT INTO dicone.table2 (event,date) VALUES(:event,:date )" ;

 $query_para = array(
	
	':event'=>$_POST['event'],
	':date'=>$_POST['date']

 
 
	);
 
 try{
	$save =$db->prepare($query) ;
	$result =$save->execute($query_para);
 }catch(PDOException $ex){  die("Failed to run query: " . $ex->getMessage()); header("Location: dicone.php"); }
        header("Location: thanks.html");  
        die("Redirecting to dicone.php");   

?>




