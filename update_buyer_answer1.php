<?php


if ($_POST['q11_1Does'] == 'Definitely “Yes”')
	{
		$QNo1 = "T";
	}
else if ($_POST['q11_1Does'] == 'Probably “Yes”')
	{
		$QNo2 = "T";
	}
else if ($_POST['q11_1Does'] == 'Probably “No” (Please specify the cause of no possibility)')
	{
		$QNo3 = $_POST['q15_expectedTo15'];
	}
else
	{
		$QNo4 = $_POST['q14_actualGenerated'];
	}


require_once("query/connectivity.php");

	
	if(isset($_POST['IDAnswer']) ){
    

		$sql="INSERT INTO BuyerAnswer1 (BuyerID, RatedSellerID, Ans1, Ans2, Ans3, Ans4, Active) VALUES ('".$_POST['BuyerID']."','".$_POST['RatedSellerID']."','".$QNo1."','".$QNo2."','".$QNo3."','".$QNo4."','Y')";
		mysql_query($sql);

		$sql1="UPDATE BuyerAnswer1 SET Active='N' WHERE ID=".$_POST['IDAnswer']."";
		mysql_query($sql1);

		header("location:survey_update_buyer_success.php");
		
		

	} else{
    
    	header("location:survey_update_buyer_fail.php");
    	

	}
 
// Close connection
mysql_close($link);

	
	

?>
