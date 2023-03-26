<?php
	error_reporting(0);
	$host ="localhost";
	$user ="root";
	$pass ="";
	$db ="montecarlo";
	
	$sqlconnect = mysql_connect($host, $user, $pass);
	$connetdb = mysql_select_db($db, $sqlconnect);
?>