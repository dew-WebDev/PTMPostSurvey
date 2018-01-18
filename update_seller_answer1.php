<?php

if ($_POST['q17_1To'] == 'Extremely')
	{
		$QNo1 = "T";
	}
else if ($_POST['q17_1To'] == 'Moderate')
	{
		$QNo2 = "T";
	}
else
	{
		$QNo3 = "T";
	}

if ($_POST['q18_typeA'] == 'Yes')
	{
		$QNo4 = "T";
	}
else if ($_POST['q18_typeA'] == 'No')
	{
		$QNo5 = "T";
	}
else
	{
		$QNo6 = "T";
	}

if ($_POST['q20_3Would'] == 'Yes')
	{
		$QNo7 = "T";
	}
else if ($_POST['q20_3Would'] == 'No')
	{
		$QNo8 = "T";
	}
else
	{
		$QNo9 = "T";
	}


require_once("query/connectivity.php");	



	if(isset($_POST['IDAnswer']) ){
    

		$sql="INSERT INTO SellerAnswer1 (SellerID, RatedBuyerID, Ans1, Ans2, Ans3, Ans4, Ans5, Ans6, Ans7, Ans8, Ans9, Active) VALUES ('".$_POST['SellerID']."','".$_POST['RatedBuyerID']."','".$QNo1."','".$QNo2."','".$QNo3."','".$QNo4."','".$QNo5."','".$QNo6."','".$QNo7."','".$QNo8."','".$QNo9."','Y')";
		mysql_query($sql);

		$sql1="UPDATE SellerAnswer1 SET Active='N' WHERE ID=".$_POST['IDAnswer']."";
		mysql_query($sql1);

		

		header("location:survey_update_seller_success.php");
		
		

	} else{
    
    	header("location:survey_update_seller_fail.php");
    	

	}
 
// Close connection
mysql_close($link);

	
	

?>
