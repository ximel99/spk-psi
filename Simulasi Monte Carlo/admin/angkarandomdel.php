<?php
	session_start();
	include "koneksi.php";
	
	$sqlkat = mysql_query("delete from nilairandom where idadmin='$_GET[idk]'");
	
	if($sqlkat){
		echo "Angka Random berhasil Dihapus";
	}else{
		echo "Gagal Menghapus";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1;  URL=?p=angkarandom'>";
?>