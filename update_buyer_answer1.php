<?php


if ($_POST['q11_1Does'] == 'Definitely “Yes”')
	{
		$QNo1 = "T";
	}
else if ($_POST['q11_1Does'] == 'Probably “Yes”')
	{
		$QNo2 = "T";
	}
else if ($_POST['q11_1Does'] == 'Probably “No” (Please explain why)')
	{
		$QNo3 = $_POST['q15_expectedTo15'];
	}
else
	{
		$QNo4 = $_POST['q14_actualGenerated'];
	}


if ($_POST['q12_2Please'] == 'Under US$50,000')
	{
		$QNo5 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$50,001- US$250,000')
	{
		$QNo6 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$250,001- US$500,000')
	{
		$QNo7 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$500,001 - US$ 750,000')
	{
		$QNo8 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$750,001 US$1,000,000')
	{
		$QNo9 = "T";
	}
else
	{
		$QNo10 = "T";
	}

require_once("query/connectivity.php");

	
	if(isset($_POST['IDAnswer']) ){
    

		$sql="INSERT INTO BuyerAnswer1 (BuyerID, RatedSellerID, Ans1, Ans2, Ans3, Ans4, Ans5, Ans6, Ans7, Ans8, Ans9, Ans10, Active) VALUES ('".$_POST['BuyerID']."','".$_POST['RatedSellerID']."','".$QNo1."','".$QNo2."','".$QNo3."','".$QNo4."','".$QNo5."','".$QNo6."','".$QNo7."','".$QNo8."','".$QNo9."','".$QNo10."','Y')";
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
