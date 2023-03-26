<?php
	session_start();
	include "koneksi.php";
	$nilai = $_POST["angkarandom"];
	$sqladm = mysql_query("select * from admin where username='$_SESSION[namauser]'");
	$radm = mysql_fetch_array($sqladm);
	
	$jumlahdata = count($nilai);
	echo "$jumlahdata";
	for($i=0;$i<$jumlahdata;$i++){
	$sqlp = mysql_query("insert into nilairandom (angkarandom, idadmin) values ('$nilai[$i]', '$radm[idadmin]')");
	if($sqlp){
		$ket ="Nilai Random Berhasil Disimpan";
		header('Location:?p=angkarandom');
	}else{
		$ket ="Gagal Disimpan";
	}
	}
?>