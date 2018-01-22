<?php

if ($_POST['q1_input1'] == 'Expected To Generated')
	{
		$QNo1 = $_POST['q3_expectedTo'];
	}
else
	{
		$QNo2 = $_POST['q4_nameOf'];
	}



if ($_POST['q19_2Does'] == 'Definitely “Yes”')
	{
		$QNo3 = "T";
	}
else if ($_POST['q19_2Does'] == 'Probably “Yes”')
	{
		$QNo4 = "T";
	}
else if ($_POST['q19_2Does'] == 'Probably “No”')
	{
		$QNo5 = "T";
	}
else
	{
		$QNo6 = "T";
	}


if ($_POST['q12_input12'] == 'Under US$50,000')
	{
		$QNo7 = "T";
	}
else if ($_POST['q12_input12'] == 'Between US$50,001- US$250,000')
	{
		$QNo8 = "T";
	}
else if ($_POST['q12_input12'] == 'Between US$250,001- US$500,000')
	{
		$QNo9 = "T";
	}
else if ($_POST['q12_input12'] == 'Between US$500,001 - US$ 750,000')
	{
		$QNo10 = "T";
	}
else if ($_POST['q12_input12'] == 'Between US$750,001 US$1,000,000')
	{
		$QNo11 = "T";
	}
else
	{
		$QNo12 = "T";
	}



require_once("query/connectivity.php");

	
	$sql="INSERT INTO SellerAnswerAll1 (SellerID, Ans1, Ans2, Ans3, Ans4, Ans5, Ans6, Ans7, Ans8, Ans9, Ans10, Ans11, Ans12, Active) VALUES ('".$_POST['SellerID']."','".$QNo1."','".$QNo2."','".$QNo3."','".$QNo4."','".$QNo5."','".$QNo6."','".$QNo7."','".$QNo8."','".$QNo9."','".$QNo10."','".$QNo11."','".$QNo12."','Y')";

	if(mysql_query($sql) ){
    header("location:post_survey_seller_success.php");
    

	} else{
    
   header("location:post_survey_seller_fail.php");
    

	}
 
// Close connection
mysql_close($link);

	

?>
