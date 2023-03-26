<?php
	session_start();
	include "koneksi.php";
	$sqluser = mysql_query("select * from admin where username='$_SESSION[namauser]'");
	$ruser = mysql_fetch_array($sqluser);
	$bulanke = $_POST["bulan"];
	$jumlahpermintaannya = $_POST["jumlahpermintaan"];
	$probabilitasnya = $_POST["probabilitas"];
	$cdfnya = $_POST["cdf"];
	$batasrinya = $_POST["batas_ri"];
	$jumlahbaris = count($jumlahpermintaannya);
	for($no=1;$no<=$jumlahbaris;$no++){
		$simpanpermintaan = mysql_query("insert into permintaan (idadmin, idproduk, tahun, bulan, jumlahpermintaan) values('$ruser[idadmin]','$_POST[idproduk]','$_POST[tahun]','$bulanke[$no]', '$jumlahpermintaannya[$no]')");
		$simpaninterval = mysql_query("insert into intervalinterval (idproduk, permintaan, frekuensi, distribusikemungkinan, distribusikumulatif, jarakinterval,idadmin) values('$_POST[idproduk]','$bulanke[$no]','$jumlahpermintaannya[$no]','$probabilitasnya[$no]','$cdfnya[$no]', '$batasrinya[$no]','$ruser[idadmin]')");
		if($simpanpermintaan && $simpaninterval ){
			$tampilpesan ="Data Tersimpan";
		}else{
			$tampilpesan ="Data Tak tersimpan";
		}
		
	} 
	echo "$tampilpesan";
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=datapermintaan'>";
?>