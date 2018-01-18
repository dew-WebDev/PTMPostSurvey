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

<title>PATA - PTM: Survey logged in</title>

<!-- Bootstrap core CSS -->
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
</head>

<body>
<input id="currentuserid" type="hidden" name="currentuserid" value="<?php echo $_SESSION['msid']; ?>"/>
<input id="currentcomid" type="hidden" name="currentcomid" value="<?php echo $_SESSION['did']; ?>"/>

<div id="wrapper"><!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
	data-target=".navbar-ex1-collapse"><span class="sr-only">Toggle
navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
<span class="icon-bar"></span></button>
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
			$deadline_app=$edateoo['deadline_app'];
			$new_registration_period=$edateoo['new_registration_period'];
			$pre_add_period=$edateoo['pre_add_period'];
		}
	}

echo "<a class='navbar-brand' href='#'>PTM".$ptm_year." Survey</a>";
?></div>

<!-- Collect the nav links, forms, and other content for toggling -->



<ul class="nav navbar-nav navbar-right navbar-user">
	<li class="dropdown user-dropdown"><a href="#"
		class="dropdown-toggle" data-toggle="dropdown"><i
		class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_SESSION['comname']; ?>
	<b class="caret"></b></a>
	<ul class="dropdown-menu">
		
		<li class="divider"></li>
		<li><a href="survey_logout.php"><i class="fa fa-power-off"></i>
		Log Out</a></li>
	</ul>
	</li>
</ul>
</div>
<!-- /.navbar-collapse --></nav>

<div id="page-wrapper">
			<!-- /.row -->

			<div class="row">
				<div class="col-lg-12">
			<?php
			$i=0;
			$q=mysql_query("select bc.company_name, mb.fullname, bc.company_id, bc.cnt_id from buyer_company bc, mas_buyer mb where mb.mas_buyer_com_id=bc.buyer_com_id and mb.mas_buyer_status='Y' and bc.buyer_status='Y' and bc.buyer_com_id = ".$_SESSION['did']." limit 1");
			if(mysql_num_rows($q)>0)
			{
				while($r=mysql_fetch_array($q))
				{

						$bcname= $r['company_name'];
						$bname= $r['fullname'];
						$bcomid= $r['company_id'];
						$cntry="";
						$q1=mysql_query("select * from countries where country_id='".$r['cnt_id']."'"	);
						if(mysql_num_rows($q1)>0 && $r1=mysql_fetch_array($q1))
						{
							$bcountry=$r1['country_name'];
						}
					
				}
			}
			
			?>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-primary">
						<!--<div class="panel-heading">
							<h3 class="panel-title">SESSION</h3>
						</div>-->
					<div class="row">
						<div class="col-lg-4">
							<img src="images/PDFLogo.jpg" style="margin-top:30px;"/>
						</div>
						<div class="col-lg-6" style="margin-top:30px;">
							<span style="font-size:16px; font-weight:Bold; font-family:Arial;">PATA TRAVEL MART <?php echo $ptm_year;?> <br>BUYER APPOINTMENT SCHEDULE <br><?php echo $bcname; ?>, <?php echo $bcountry; ?><br><?php echo $bname; ?> <br>Reg. No : <?php echo $bcomid; ?></span>
						</div>
						<div class="col-lg-2">
							<span style="font-size:16px; font-weight:Bold; font-family:Times;float:right; margin-right:50px; margin-top:30px;"><?php echo $bcomid; ?></span>
						</div>
					</div>
						<div class="panel-body">
							<div class="panel-body">
								<div class="table-responsive">
									
					<?php

echo "";

echo "<table class='table table-bordered table-hover table-striped tablesorter'>";
//echo "<thead><tr><th>Seller Company</th><th>Delegate Name</th><th>Date</th><th>Slot Start</th><th>Slot End</th><th>Description</th><th>Booth Number</th></tr></thead>";
echo "<thead><tr><th style='width:10%;text-align:center;'>Date&nbsp;<i class='fa fa-sort'></i></th><th style='width:10%;text-align:center;'>Start Time&nbsp;<i class='fa fa-sort'></i></th><th style='width:10%;text-align:center;'>End Time&nbsp;<i class='fa fa-sort'></i></th><th style='width:30%;text-align:center;'>Details&nbsp;<i class='fa fa-sort'></i></th><th style='width:20%;text-align:center;'>Requested By&nbsp;<i class='fa fa-sort'></i></th><th style='width:20%;text-align:center;'>Signature&nbsp;<i class='fa fa-sort'></i></th></tr></thead>";

			/*$qry=mysql_query("select 
			CASE
				WHEN time_slots.slottype = 't' THEN seller_company.company_name
				ELSE time_slot_description
			END as scname,
			CASE
				WHEN time_slots.slottype = 't' THEN mas_seller.fullname
				ELSE ''
			END as sname, 
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
			and (mas_buyer.mas_buyer_com_id = ".$_SESSION['did'].")
	    order by time_slot_date, time_slot_id_from");

			

			if(mysql_num_rows($qry)>0)
			{
				while($krows=mysql_fetch_array($qry))
				{
				
					echo "<tbody><tr><td>".$krows['scname']."</td><td>".$krows['sname']."</td><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td>".$krows['time_slot_description']."</td><td>".$krows['bno']."</td></tr></tbody>";	
				}
			}*/
			
			
$qry1 ="select 
			seller_company.company_id as scomid, 
			CASE
				WHEN time_slots.slottype = 't' THEN seller_company.company_name
				ELSE time_slot_description
			END as scname,
			CASE
				WHEN time_slots.slottype = 't' THEN mas_seller.fullname
				ELSE ''
			END as sname, 
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
 			time_slots.venue,
			buyer_company.cnt_id as bcountry_id,
			seller_company.cnt_id as scountry_id,
			time_slots.time_slot_description,
 			time_slots.slottype,
			mas_buyer.mas_buyer_id as bcid, 
			mas_seller.mas_seller_id as scid
			from 

			( select *, 'g' as slottype from time_slots_generic where time_slot_date > '".$bussinessconfirm_date."' union select *, 't' as slottype from time_slots ) time_slots  
			left join appointments on time_slots.time_slot_id = appointments.time_slot_id and appointments.buyer_com_id = ".$_SESSION['did']."
			left join seller_company on appointments.seller_com_id = seller_company.seller_com_id
			left join buyer_company on appointments.buyer_com_id = buyer_company.buyer_com_id
			left join mas_seller on appointments.mas_seller_com_id = mas_seller.mas_seller_id
			left join mas_buyer on appointments.mas_buyer_com_id = mas_buyer.mas_buyer_id
			left join seller_org_details on appointments.seller_com_id = seller_org_details.seller_com_id and seller_org_details.seller_org_status = 'Y'

	    order by time_slot_date, session, in_session";
	
			$qry=mysql_query($qry1);
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
					

					if($krows['scountry_id'] != '')
					{
						$q=mysql_query("select * from countries where country_id=".$krows['scountry_id']);
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
						if($krows['scomid'] != "")
						{
							$descrip ="Reg No : ".$krows['scomid']."<br>".$krows['scname'].", ".$cntry."<br>Booth No : ".$krows['bno'];
						}
					}

					$sdesc="";
					if($krows['sname'] !="")
					{
						if($arequest == 'MUTUAL')
						{
							echo "<tr><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td>".$descrip."</td><td style='color:rgb(255,0,0);'>".$arequest."</td><td style='text-align:center;'></td></tr>";	
						}
						else
						{
							echo "<tr><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td>".$descrip."</td><td>".$arequest."</td><td style='text-align:center;'></td></tr>";
						}
					}
					else
					{
						if($descrip=='End of Day 1' || $descrip=='End of Business Session')
						{
						echo "<tr><td></td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td style='border-bottom: 1px solid grey; text-align:center;color:rgb(0,0,0);background-color:rgb(200,200,200);'>".$descrip."</td><td style='text-align:center;color:white;background-color:rgb(200,200,200);'></td><td style='text-align:center;color:white;background-color:rgb(200,200,200);'></td></tr>";
						}
						else if($descrip == "")
						{
						echo "<tr><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td>".$descrip."</td><td></td><td style='text-align:center;'></td></tr>";
						}
						else
						{
						echo "<tr><td>".$krows['time_slot_date']."</td><td>".$krows['time_slot_id_from']."</td><td>".$krows['time_slot_id_to']."</td><td style='border: 1px solid grey; color:rgb(255,255,255);background-color:rgb(120,120,120);'>".$descrip."</td><td style='border: 1px solid grey;  color:white;background-color:rgb(120,120,120);'></td><td style='border: 1px solid grey; color:white;background-color:rgb(120,120,120);'></td></tr>";
						}	
						
					}
				}
			}
echo "</tbody></table>";
		
	?>										
									
								</div>
<!-- No more this part for seller 16-Aug-16 -->





<br>

								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
</div>

		<!-- /.row -->
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