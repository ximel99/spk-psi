<?php
	include "admin/koneksi.php";
	$sqluser = mysql_query("select * from admin where username='$_POST[username]' and password='$_POST[password]'");
	$row = mysql_num_rows($sqluser);
	$ruser = mysql_fetch_array($sqluser);
	if($row > 0){
		session_start();
		$_SESSION["namauser"]=$ruser["username"];
		$_SESSION["passuser"]=$ruser["password"];
		header("location:admin/index.php?p=home");
	}else{
		header("location:index.php");
	}
?> 