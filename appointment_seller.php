<?php
require_once("query/connectivity.php");
session_start();
if(!isset($_SESSION['did']))
{
	header("Location:survey_login.php?mes=Session has Expired");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>Appointment - SELLER</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.4038" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.4038" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.4038" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=59fb4852cf3bfe589c6c6f21"/>

<link href="css/bootstrap.css" rel="stylesheet">

<!-- Add custom CSS here -->
<link href="css/sb-admin.css" rel="stylesheet">
<link href="css/css_img.css" rel="stylesheet">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<!-- Page Specific CSS -->
<link rel="stylesheet" href="css/morris-0.4.3.min.css">
<!-- datatbles -->
<link rel="stylesheet" href="js/lib/dataTables/media/DT_bootstrap.css">
<link rel="stylesheet"
	href="js/lib/dataTables/extras/TableTools/media/css/TableTools.css">

<style type="text/css">
.classname {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background-color:#ededed;
	-webkit-border-top-left-radius:6px;
	-moz-border-radius-topleft:6px;
	border-top-left-radius:6px;
	-webkit-border-top-right-radius:6px;
	-moz-border-radius-topright:6px;
	border-top-right-radius:6px;
	-webkit-border-bottom-right-radius:6px;
	-moz-border-radius-bottomright:6px;
	border-bottom-right-radius:6px;
	-webkit-border-bottom-left-radius:6px;
	-moz-border-radius-bottomleft:6px;
	border-bottom-left-radius:6px;
	text-indent:0px;
	border:1px solid #dcdcdc;
	display:inline-block;
	color:#777777;
	font-family:arial;
	font-size:14px;
	font-weight:normal;
	font-style:normal;
	height:34px;
	line-height:16px;
	width:72px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #ffffff;
}.classname:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
	background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
	background-color:#dfdfdf;
	color:#777777;
	text-decoration:none;
}.classname:active {
	position:relative;
	top:1px;
	text-decoration:none;
	color:#000000;
}

.btn {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9));
	background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0);
	background-color:#f9f9f9;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#008000;
	font-family:Arial;
	font-size:16px;
	font-weight:bold;
	padding:10px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.btn:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9));
	background:-moz-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-webkit-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-o-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-ms-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9',GradientType=0);
	background-color:#e9e9e9;
	color:#008000;
	text-decoration:none;
}


.btn1 {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9));
	background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0);
	background-color:#f9f9f9;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#FF0000;
	font-family:Arial;
	font-size:16px;
	font-weight:bold;
	padding:10px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.btn1:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9));
	background:-moz-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-webkit-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-o-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-ms-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9',GradientType=0);
	background-color:#e9e9e9;
	color:#FF0000;
	text-decoration:none;
}


</style>

</head>

<body>
<input id="currentuserid" type="hidden" name="currentuserid" value="<?php echo $_SESSION['msid']; ?>"/>
<input id="currentcomid" type="hidden" name="currentcomid" value="<?php echo $_SESSION['did']; ?>"/>

<div id="wrapper"><!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
 
<?php
$edateo = mysql_query("select* from emaildate where emaildate_status = 'Y'");
	if(mysql_num_rows($edateo)>0)
	{
		if($edateoo=mysql_fetch_array($edateo))
		{
			$bussinessconfirm_date=$edateoo['bussinessconfirm_date'];
			$allemail=$edateoo['allemail'];
			$alldate=$edateoo['alldate'];
			$count_end_date=$edateoo['count_end_date'];
			$bussinessconfirm_date=$edateoo['bussinessconfirm_date'];
			$ptmday4=$edateoo['ptmday4'];
			$advance_buyer_list=$edateoo['advance_buyer_list'];
			$rejection_app_date=$edateoo['rejection_app_date'];
			$preadd_list=$edateoo['preadd_list'];
			$ptm_year=$edateoo['ptm_year'];
			$copy_right_year=$edateoo['copy_right_year'];

		}
	}
echo"<a class='navbar-brand' href='#'>PTM".$ptm_year." Survey</a>";
?></div>

<!-- Collect the nav links, forms, and other content for toggling -->



<ul class="nav navbar-nav navbar-right navbar-user" style="padding-left: 15px;">
	<li class="dropdown user-dropdown"><a href="#"
		class="dropdown-toggle" data-toggle="dropdown"><i
		class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_SESSION['comname']; ?> <b class="caret"></b></a>
	<ul class="dropdown-menu">
		
		<li class="divider"></li>
		<li><a href="survey_logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
	</ul>
	</li>
</ul>
</div>
<!-- /.navbar-collapse --></nav>



<div id="page-wrapper">
			<!-- /.row -->
			<?php
			$q=mysql_query("select sc.company_name, sc.company_id, sc.cnt_id from seller_company sc, mas_seller ms where ms.mas_seller_com_id=sc.seller_com_id and ms.mas_seller_status='Y' and sc.seller_status='Y' and ms.delegate='1' and sc.seller_com_id = ".$_SESSION['did']);
			if(mysql_num_rows($q)>0)
			{
				while($r=mysql_fetch_array($q))
				{
						$scname= $r['company_name'];
						$scomid= $r['company_id'];
						$cntry="";
						$q1=mysql_query("select * from countries where country_id='".$r['cnt_id']."'"	);
						if(mysql_num_rows($q1)>0 && $r1=mysql_fetch_array($q1))
						{
							$scountry=$r1['country_name'];
						}
				}
			}

			
			
			$q=mysql_query("select fullname from mas_seller inner join seller_delegate_detail on mas_seller.mas_seller_id = seller_delegate_detail.mas_seller_id and username = '".$_SESSION['user_name']."' and seller_delegate_status = 'Y' and mas_seller_status = 'Y'");
			
			if(mysql_num_rows($q)>0 && $r=mysql_fetch_array($q))
			{
				$sname= $r['fullname'];
			}
			
			?>
<script type="text/javascript">
					// boolean outputs "" if false, "1" if true
					var SellerID = "<?php echo $scomid ?>"; 

					function OpenWindow()
        				{
            				window.open('survey_seller_all.php?SellerID='+SellerID,'NewPage','menubar=no,width=700,height=500,top=100,left=10,toolbar=no'); 
        				}

			</script>	

			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-primary">
						<!--<div class="panel-heading">
							<h3 class="panel-title">SESSION</h3>
						</div>-->
					<div class="row">
						<div class="col-sm-4">
							<img src="images/PDFLogo.jpg" style="margin-top:30px;margin-left:20px;"/>
						</div>
						<div class="col-sm-8" style="margin-top:30px;padding-left:42px;">
							<span style="font-size:16px; font-weight:Bold; font-family:Arial;">PATA TRAVEL MART <?php echo $ptm_year;?> <br>SELLER APPOINTMENT SCHEDULE <br><?php echo $scname; ?>, <?php echo $scountry; ?> <br><?php echo $sname; ?> <br>Reg. No : <?php echo $scomid; ?></span><br><br>

							<?php

              
              $SellerID = $scomid;

             

              $result = mysql_query("SELECT MAX(ID) AS max_page FROM SellerAnswerAll1 where SellerID='".$scomid."'");
                  $row = mysql_fetch_array($result);
              

              $Checkform = mysql_query("select * from SellerAnswerAll1 where SellerID='".$scomid."' and ID='".$row["max_page"]."'");
              $row = mysql_fetch_assoc($Checkform);
              $CheckformAnswer = $row['SellerID'];
              
              
              if (($CheckformAnswer != ""))
                {

                  ?>

             <a href="#" onclick="OpenWindow()" class="btn">&#9745; General Survey</a>

              <?php 
                }
              else
                {

                
              ?>

              <a href="#" onclick="OpenWindow()" class="btn1">&#9745; General Survey</a>
               <?php

             }
             ?>
						</div>


						<?php
						/*
						<div class="col-lg-2">
							<span style="font-size:16px; font-weight:Bold; font-family:Times;float:right; margin-right:50px; margin-top:30px;"><?php echo $_SESSION['user_name']; ?></span>
						</div>
						*/
						?>
					</div>

					
						
						<div class="panel-body" style="width:100%;">
							<div class="panel-body" style="width:100%;">
								<div class="table-responsive1" style="width:100%;">
<?php

echo "<table class='table table-bordered table-hover table-striped tablesorter' style='width:100%;'>";
echo "<thead><tr><th style='width:10%;text-align:center;'>Date&nbsp;<i class='fa fa-sort'></i></th><th style='width:10%;text-align:center;'>Start Time&nbsp;<i class='fa fa-sort'></i></th><th style='width:10%;text-align:center;'>End Time&nbsp;<i class='fa fa-sort'></i></th><th style='width:32%;text-align:center;'>Details&nbsp;<i class='fa fa-sort'></i></th><th style='width:20%;text-align:center;'>Requested By&nbsp;<i class='fa fa-sort'></i></th></tr></thead>";
//echo "<thead><tr><th>Buyer Company</th><th>Delegate Name</th><th>Date</th><th>Slot Start</th><th>Slot End</th><th>Description</th><th>Booth Number</th></tr></thead>";

			$scid = $_SESSION['msid'];
			/*$qry=mysql_query("select 
			CASE
				WHEN time_slots.slottype = 't' THEN buyer_company.company_name
				ELSE time_slot_description
			END as bcname,
			CASE
				WHEN time_slots.slottype = 't' THEN mas_buyer.fullname
				ELSE ''
			END as bname, 
			CASE
				WHEN time_slots.slottype = 't' THEN boothNumber 
				ELSE ''
			END as bno, 
			CASE
				WHEN time_slots.slottype = 't' THEN time_slot_description 
				ELSE ''
			END as time_slot_description, 
			time_slot_date, 
			time_slot_id_from, 
			time_slot_id_to, 
			CASE
				WHEN time_slots.slottype = 't' THEN type
				ELSE ''
			END as type, 
			time_slots.time_slot_id, 
			mas_buyer.mas_buyer_id as bcid, 
			mas_seller.mas_seller_id as scid
				from 
			( select *, 'g' as slottype from time_slots_generic union select *, 't' as slottype from time_slots ) time_slots
			left join appointments on time_slots.time_slot_id = appointments.time_slot_id
			left join seller_company on appointments.seller_com_id = seller_company.seller_com_id
			left join buyer_company on appointments.buyer_com_id = buyer_company.buyer_com_id
			left join mas_seller on appointments.mas_seller_com_id = mas_seller.mas_seller_id
			left join mas_buyer on appointments.mas_buyer_com_id = mas_buyer.mas_buyer_id
			left join seller_org_details on appointments.seller_com_id = seller_org_details.seller_com_id
			where
			seller_org_details.seller_org_status = 'Y'
			and mas_seller.mas_seller_id in (select mas_seller_id from seller_delegate_detail where username = '".$_SESSION['user_name']."')
			order by time_slot_date, time_slot_id_from");*/
			
			$qry=mysql_query("select 
			buyer_company.company_id as bcomid, 
			CASE
				WHEN time_slots.slottype = 't' THEN buyer_company.company_name
				ELSE time_slot_description
			END as bcname,
			CASE
				WHEN time_slots.slottype = 't' THEN mas_buyer.fullname
				ELSE ''
			END as bname, 
			CASE
				WHEN time_slots.slottype = 't' THEN boothNumber 
				ELSE ''
			END as bno, 
			CASE
				WHEN time_slots.slottype = 't' THEN time_slot_description 
				ELSE ''
			END as time_slot_description, 
			date_format(time_slot_date,'%b- %d')  as time_slot_date, 
			time_slot_id_from, 
			time_slot_id_to, 
			CASE
				WHEN time_slots.slottype = 't' THEN type
				ELSE ''
			END as type, 
			time_slots.time_slot_id, 
			time_slots.slottype,	
			buyer_company.cnt_id as bcountry_id,
			seller_company.cnt_id as scountry_id,
			time_slots.time_slot_description,
			time_slots.venue,
			mas_buyer.mas_buyer_id as bcid, 
			mas_seller.mas_seller_id as scid
			from 
			( select *, 't' as slottype from time_slots ) time_slots  
			left join appointments on time_slots.time_slot_id = appointments.time_slot_id and appointments.mas_seller_com_id in (select mas_seller_id from seller_delegate_detail where username = '".$_SESSION['user_name']."')
			left join seller_company on appointments.seller_com_id = seller_company.seller_com_id
			left join buyer_company on appointments.buyer_com_id = buyer_company.buyer_com_id
			left join mas_seller on appointments.mas_seller_com_id = mas_seller.mas_seller_id
			left join mas_buyer on appointments.mas_buyer_com_id = mas_buyer.mas_buyer_id
			left join seller_org_details on appointments.seller_com_id = seller_org_details.seller_com_id and seller_org_details.seller_org_status = 'Y'
			order by time_slots.time_slot_id ASC");
			
		
			/*if(mysql_num_rows($qry)>0)
			{
				while($krows=mysql_fetch_array($qry))
				{						
					echo "<tbody><tr><td>".$krows['bcname']."</td><td>".$krows['bname']."</td><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td>".$krows['time_slot_description']."</td><td>".$krows['bno']."</td></tr></tbody>";	
				}
			}*/
			
			if(mysql_num_rows($qry)>0)
			{
				while($krows=mysql_fetch_array($qry))
				{
					$arequest="";
					if ($krows['type'] == 'P')
					{
						$arequest="MUTUAL";
					}
					else if($krows['type'] == 'S')
					{
						$arequest="SELLER";
					}
					else
					{
						$arequest="BUYER";
					}
					
					$descrip="";
					
					$cntry="";
					
					if($krows['scountry_id'] != '')
					{
						$q=mysql_query("select * from countries where country_id=".$krows['scountry_id']);
						if(mysql_num_rows($q)>0 && $r=mysql_fetch_array($q))
						{
							$scountry=$r['country_name'];
						}
					}
					if($krows['bcountry_id'] != '' )
					{
						$q=mysql_query("select * from countries where country_id=".$krows['bcountry_id']);
						if(mysql_num_rows($q)>0 && $r=mysql_fetch_array($q))
						{
							$cntry=$r['country_name'];
						}
					}

					if($krows['slottype'] == 'g')
					{
						if((strcmp($krows['time_slot_description'],"End of Day 1") == 0) || (strcmp($krows['time_slot_description'],"End of Business Session") == 0))
						{
							$descrip = $krows['time_slot_description'];
						}
						else
						{
							if(trim($krows['venue']) != "")
							{

								$descrip = $krows['time_slot_description']."<br>Venue : ".$krows['venue'];
							}
							else
							{
								$descrip = $krows['time_slot_description'];
							}
						}
					}
					else
					{
						if($krows['bcomid'] != "")
						{
							$descrip="Buyer ID : ".$krows['bcomid']."<br>".$krows['bcname'].", ".$cntry."<br>".$krows['bname'];
						}
						else
						{
							$descrip = "";
						}
					}
					
					$sdesc="";
					if($krows['bname'] !="")
					{
						if($arequest == 'MUTUAL')
						{
							$CheckRatedBuyID = $krows['bcomid'];

							$RatedBuyID1 = mysql_query("select * from SellerAnswer1 where RatedBuyerID='".$krows['bcomid']."' LIMIT 1");
              				$row = mysql_fetch_assoc($RatedBuyID1);
              
              				$RatedBuyerIDAnswer = $row['RatedBuyerID'];

              								


              				 if (($RatedBuyerIDAnswer == $CheckRatedBuyID))
      								{
         								echo "<tbody><tr><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td>".$descrip."</td><td>".$arequest."<div align='right'><a href='survey_seller.php?SellerID=$scomid&RatedBuyerID=$CheckRatedBuyID' class='classname'><span style='color:#008000'>Individual<br>&#9745; Survey</span></a></div></td></tr></tbody>";
									}

							else
									{
										echo "<tbody><tr><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td>".$descrip."</td><td style='color:rgb(255,0,0);'>".$arequest."<div align='right'><a href='survey_seller.php?SellerID=$scomid&RatedBuyerID=$CheckRatedBuyID' class='classname'><span style='color:#FF0000'>Individual<br>&#9745; Survey</span></a></div></td></tr></tbody>";
									}
						}

						else
						{
							$CheckRatedBuyID = $krows['bcomid'];

							$RatedBuyID1 = mysql_query("select * from SellerAnswer1 where RatedBuyerID='".$krows['bcomid']."' LIMIT 1");
              				$row = mysql_fetch_assoc($RatedBuyID1);
              
              				$RatedBuyerIDAnswer = $row['RatedBuyerID'];

              				 if (($RatedBuyerIDAnswer == $CheckRatedBuyID))
      								{

											echo "<tbody><tr><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td>".$descrip."</td><td>".$arequest."<div align='right'><a href='survey_seller.php?SellerID=$scomid&RatedBuyerID=$CheckRatedBuyID' class='classname'><span style='color:#008000'>Individual<br>&#9745; Survey</span></a></div></td></tr></tbody>";
									}
							else
									{
											echo "<tbody><tr><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td>".$descrip."</td><td>".$arequest."<div align='right'><a href='survey_seller.php?SellerID=$scomid&RatedBuyerID=$CheckRatedBuyID' class='classname'><span style='color:#FF0000'>Individual<br>&#9745; Survey</span></a></div></td></tr></tbody>";	

									}
						}
						$sdesc = $krows['time_slot_description'];
					}
					else
					{
						if($descrip=='End of Day 1' || $descrip=='End of Business Session')
						{
							echo "<tbody><tr><td></td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td style='border: 1px solid grey; text-align:center;color:rgb(0,0,0);background-color:rgb(200,200,200);'>".$descrip."</td><td style='border: 1px solid grey; color:white;background-color:rgb(200,200,200);'></td></tr></tbody>";
						}
						else if($descrip == "")
						{
							echo "<tbody><tr><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td>".$descrip."</td><td></td></tr></tbody>";	
						}
						else
						{
							echo "<tbody><tr><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td style='border: 1px solid grey; color:rgb(255,255,255);background-color:rgb(120,120,120);'>".$descrip."</td><td style='border: 1px solid grey; color:white;background-color:rgb(120,120,120);'></td></tr></tbody>";
						}
						
					}				
					//echo "<tbody><tr><td>".$krows['bcname']."</td><td>".$krows['bname']."</td><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td>".$krows['time_slot_description']."</td><td>".$krows['bno']."</td><td>".$krows['type']."</td></tr></tbody>";	
				}
			}

echo "</table>";
					
	?>	
</div>
		<!-- /#page-wrapper -->
</div>
		<!-- /#wrapper -->
	
		



<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script> 
<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script><script src="js/respond.js"></script>
<![endif]-->


	

</script>

</body>
</html>