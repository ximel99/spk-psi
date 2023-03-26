<?php
	session_start();
	include "koneksi.php";
	$sqladm = mysql_query("select * from admin where username='$_SESSION[namauser]'");
	$radm = mysql_fetch_array($sqladm);
	
	
	$bulan = $_POST["bulan"];
	$nilaihasil = $_POST["nilaihasilprediksi"];
	
	for($i=0;$i<12;$i++){
	$sqlp = mysql_query("insert into hasil (idproduk, idadmin, bulan, hasilprediksi) values ('$_POST[idproduk]','$radm[idadmin]','$bulan[$i]','$nilaihasil[$i]')");
	if($sqlp){
		$tampilpesan ="Data Tersimpan";
	}else{
		$tampilpesan ="Data Gagal Disimpan";
	}
	}

	echo "$tampilpesan";
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=hasilprediksi'>";
?>