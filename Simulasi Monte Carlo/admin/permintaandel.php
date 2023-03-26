<?php
	session_start();
	include "koneksi.php";
	
	$sqlkat = mysql_query("delete from permintaan where idproduk='$_GET[idk]'");
	$sqlkat = mysql_query("delete from intervalinterval where idproduk='$_GET[idk]'");
	
	if($sqlkat){
		echo "Permintaan Produk berhasil Dihapus";
	}else{
		echo "Gagal Menghapus";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1;  URL=?p=datapermintaan'>";
?>