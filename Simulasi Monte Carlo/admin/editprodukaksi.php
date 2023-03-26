<?php
	session_start();
	include "koneksi.php";
	

	$sqlp = mysql_query("update produk set namaproduk= '$_POST[namaproduk]', satuan='$_POST[satuan]', harga_jual='$_POST[harga_jual]' where idproduk='$_POST[idproduk]'");
	if($sqlp){ 
		echo "Produk Berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=dataproduk'>";
?>
