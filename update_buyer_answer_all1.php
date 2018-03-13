<?php

$QNo1 = $_POST['q24_number'];


if ($_POST['q12_2Please'] == 'Under US$50,000')
	{
		$QNo2 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$50,001- US$250,000')
	{
		$QNo3 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$250,001- US$500,000')
	{
		$QNo4 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$500,001 - US$ 750,000')
	{
		$QNo5 = "T";
	}
else if ($_POST['q12_2Please'] == 'Between US$750,001 US$1,000,000')
	{
		$QNo6 = "T";
	}
else
	{
		$QNo7 = "T";
	}

	$BuyerID = $_POST['BuyerID'];

require_once("query/connectivity.php");

	

	if(isset($_POST['IDAnswer']) ){
    

		$sql="INSERT INTO BuyerAnswerAll1 (BuyerID, Ans1, Ans2, Ans3, Ans4, Ans5, Ans6, Ans7, Active) VALUES ('".$BuyerID."','".$QNo1."','".$QNo2."','".$QNo3."','".$QNo4."','".$QNo5."','".$QNo6."','".$QNo7."','Y')";
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
