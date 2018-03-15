<?php

$QNo1 = $_POST['q24_number'];

$BuyerID = $_POST['BuyerID'];

require_once("query/connectivity.php");

	

	if(isset($_POST['IDAnswer']) ){
    

		$sql="INSERT INTO BuyerAnswerAll1 (BuyerID, Ans1, Active) VALUES ('".$BuyerID."','".$QNo1."','Y')";
		mysql_query($sql);

		$sql1="UPDATE BuyerAnswerAll1 SET Active='N' WHERE ID=".$_POST['IDAnswer']."";
		mysql_query($sql1);

		header("location:post_survey_buyer_update_success.php");
		
		

	} else{
    
    	header("location:post_survey_buyer_update_fail.php");
    	

	}
 
// Close connection
mysql_close($link);

	
	

?>
