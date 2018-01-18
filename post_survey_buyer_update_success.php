<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PATA</title>
<link rel="stylesheet" href="demo/all.css" type="text/css" media="all">
<script src="demo/all.js" type="text/javascript"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.easyWizard.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.snippet.min.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>
<script src="js/main.js"></script>
<script src="js/form_data.js"></script>
<script src="js/SetCase.js"></script>
<link href="css/main.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript">
function windowClose() {
window.open('','_parent','');
window.close();
}
</script>
</head>
<body class="boxed" style=" background-image: url( ../images/back.jpg );background-color:91a9bf;">
<div class="container" id="page">
<?php
require_once("query/connectivity.php");
include("header.php");

?>		
	<div class="cfg-contactform" id="cfg-contactform-1" style="width:500px;">
		<div class="cfg-contactform-content">
			<br><br><br><br><br>
			
			<div id='reg1' style="width:500px;">
			 <center>
				<h3 style='color:#32464E'>Your 90 Days Post Survey has been updated for processing Successfully...</h3>
				<br><br><br>
				<input type='button' value='Close' style='width:200px;'onclick='windowClose();'/>
			</center>
			</div>
<br><br><br><br><br>
		</div>
        	
	</div>
<?php

include("footer.php");

?>
</div>
</body></html>
