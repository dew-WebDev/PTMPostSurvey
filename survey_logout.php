<?php
require_once('query/connectivity.php');
session_start();
	if(session_destroy())
	{
		header("location:survey_login.php?mes=");
	}
?>
