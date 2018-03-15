<?php


$QNo1 = $_POST['q24_number'];

$BuyerID = $_POST['BuyerID'];

require_once("query/connectivity.php");

	
	$sql="INSERT INTO BuyerAnswerAll1 (BuyerID, Ans1, Active) VALUES ('".$BuyerID."','".$QNo1."','Y')";

	if(mysql_query($sql) ){
    header("location:post_survey_buyer_success.php");
		

	} else{
    
   header("location:post_survey_buyer_fail.php");
    

	}
 
// Close connection
mysql_close($link);

	

?>
