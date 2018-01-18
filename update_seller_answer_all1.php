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



if ($_POST['q1_input1'] == 'Expected To Generated')
	{
		$QNo7 = $_POST['q3_expectedTo'];
	}
else
	{
		$QNo8 = $_POST['q4_nameOf'];
	}



if ($_POST['q19_typeA19'] == 'Definitely “Yes”')
	{
		$QNo9 = "T";
	}
else if ($_POST['q19_typeA19'] == 'Probably “Yes”')
	{
		$QNo10 = "T";
	}
else if ($_POST['q19_typeA19'] == 'Probably “No”')
	{
		$QNo11 = "T";
	}
else
	{
		$QNo12 = "T";
	}


if ($_POST['q12_3Please'] == 'Under US$50,000')
	{
		$QNo13 = "T";
	}
else if ($_POST['q12_3Please'] == 'Between US$50,001- US$250,000')
	{
		$QNo14 = "T";
	}
else if ($_POST['q12_3Please'] == 'Between US$250,001- US$500,000')
	{
		$QNo15 = "T";
	}
else if ($_POST['q12_3Please'] == 'Between US$500,001 - US$ 750,000')
	{
		$QNo16 = "T";
	}
else if ($_POST['q12_3Please'] == 'Between US$750,001 US$1,000,000')
	{
		$QNo17 = "T";
	}
else
	{
		$QNo18 = "T";
	}

if ($_POST['q20_typeA20'] == 'Yes')
	{
		$QNo19 = "T";
	}
else if ($_POST['q20_typeA20'] == 'No')
	{
		$QNo20 = "T";
	}
else
	{
		$QNo21 = "T";
	}


require_once("query/connectivity.php");	

	if(isset($_POST['IDAnswer']) ){
    

		$sql="INSERT INTO SellerAnswer1 (SellerID, RatedBuyerID, Ans1, Ans2, Ans3, Ans4, Ans5, Ans6, Ans7, Ans8, Ans9, Ans10, Ans11, Ans12, Ans13, Ans14, Ans15, Ans16, Ans17, Ans18, Ans19, Ans20, Ans21, Active) VALUES ('".$_POST['SellerID']."','".$_POST['RatedBuyerID']."','".$QNo1."','".$QNo2."','".$QNo3."','".$QNo4."','".$QNo5."','".$QNo6."','".$QNo7."','".$QNo8."','".$QNo9."','".$QNo10."','".$QNo11."','".$QNo12."','".$QNo13."','".$QNo14."','".$QNo15."','".$QNo16."','".$QNo17."','".$QNo18."','".$QNo19."','".$QNo20."','".$QNo21."','Y')";
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
