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

	
	$sql="INSERT INTO BuyerAnswer1 (BuyerID, RatedSellerID, Ans1, Ans2, Ans3, Ans4, Active) VALUES ('".$_POST['BuyerID']."','".$_POST['RatedSellerID']."','".$QNo1."','".$QNo2."','".$QNo3."','".$QNo4."','Y')";

	if(mysql_query($sql) ){
    header("location:survey_buyer_message.php");
    

	} else{
    
   header("location:survey_buyer_error.php");
    

	}
 
// Close connection
mysql_close($link);

	

?>
