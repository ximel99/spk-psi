<?php
	session_start();
	include "koneksi.php";
	$sqladm = mysql_query("select * from admin where username='$_SESSION[namauser]'");
	$radm = mysql_fetch_array($sqladm);
	$sqlp = mysql_query("insert into produk (idadmin, namaproduk, satuan, harga_jual) values ('$radm[idadmin]','$_POST[namaproduk]', '$_POST[satuan]', '$_POST[harga_jual]')");
	if($sqlp){ 
		echo "Produk Berhasil Disimpan";
	}else{
		echo "Gagal menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=dataproduk'>";
?>
