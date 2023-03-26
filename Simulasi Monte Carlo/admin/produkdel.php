<?php
	session_start();
	include "koneksi.php";
	
	$sqlkat = mysql_query("delete from produk where idproduk='$_GET[idk]'");
	
	if($sqlkat){
		echo "Produk berhasil Dihapus";
	}else{
		echo "Gagal Menghapus";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1;  URL=?p=dataproduk'>";
?>