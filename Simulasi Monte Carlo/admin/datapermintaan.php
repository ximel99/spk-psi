<div class="content">
<h1>
<i class="fa fa-tasks"></i> Data Permintaan Produk

<a class="btn btn-primary btn-social pull-right" href="?p=datapermintaanadd"><i class="fa fa-plus"></i> Tambah Data</a>
</h1>
<div class='alert-info'><i class='fa fa-exclamation-circle'></i> Data permintaan produk beberapa tahun sebelumnya yang ditampilkan dengan bulan.</div>
<?php 
include "koneksi.php";
	// untuk menghitung nilai tahun yang sama
	
	echo "<div class='tabel'>";
	echo "<table border='0' cellpadding='0' cellspacing='0' width='100%' class='tabel-produk'>";
		
	
	echo "<tr>";
	echo "<th class='th-tabel-produk' rowspan='2' class='th-tabel-produk'>Tahun</th>";
		echo "<th rowspan='2' class='th-tabel-produk'>Produk</th>";
		echo "<th colspan='12' class='th-tabel-produk'>Bulan</th>";
		echo "<th rowspan='2' class='th-tabel-produk'>Aksi</th>";
		
	echo "</tr>";
	
		echo "<tr>";
		
			echo "<th style='text-align:center;' class='th-tabel-produk'>Januari</th>";
			echo "<th style='text-align:center;' class='th-tabel-produk'>Februari</th>";
			echo "<th style='text-align:center;' class='th-tabel-produk'>Maret</th>";
			echo "<th style='text-align:center;' class='th-tabel-produk'>April</th>";
			echo "<th style='text-align:center;' class='th-tabel-produk'>Mei</th>";
			echo "<th style='text-align:center;' class='th-tabel-produk'>Juni</th>";
			echo "<th style='text-align:center;' class='th-tabel-produk'>Juli</th>";
			echo "<th style='text-align:center;' class='th-tabel-produk'>Agustus</th>";
			echo "<th style='text-align:center;' class='th-tabel-produk'>September</th>";
			echo "<th style='text-align:center;' class='th-tabel-produk'>Oktober</th>";
			echo "<th style='text-align:center;' class='th-tabel-produk'>November</th>";
			echo "<th style='text-align:center;' class='th-tabel-produk'>Desember</th>";
			
		
			
		echo "</tr>";
		
		echo "<tr>";   
		# untuk tahun 2015
		$sqlth1 = mysql_query("SELECT tahun FROM permintaan WHERE tahun='2018' order by idproduk asc limit 1");
		while ($jpth1 = mysql_fetch_array($sqlth1)) {
		echo "<td rowspan='4' style='text-align:center;border-left:1px solid #f9f9f9;' class='td-tabel-produk'>$jpth1[tahun]</td>";
		
		# untuk nama produk 1
		$sqlp1 = mysql_query("SELECT * FROM produk WHERE idproduk='1'");
		while ($jpp1 = mysql_fetch_array($sqlp1)) {
		echo "<td class='td-tabel-produk'>$jpp1[namaproduk]</td>";
		
		#permintaan produk 1 perbulan tahun 2015
		$sqlb1 = mysql_query("SELECT jumlahpermintaan FROM permintaan WHERE idproduk='1' limit 12");
		while ($jpb1 = mysql_fetch_array($sqlb1)) {
		echo "<td class='td-tabel-produk'>$jpb1[jumlahpermintaan]</td>";
		}
		echo "<td class='td-tabel-produk' style='text-align:center;'><a onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini ?')\" href='?p=permintaandel&idk=$jpp1[idproduk]' class='hapus'><i class='fa fa-trash'></i></a></td>";
		}
		
		
		
		echo "</tr>";
		
		
		echo "<tr>";   
		# untuk nama produk 2
		$sqlp2 = mysql_query("SELECT * FROM produk WHERE idproduk='2'");
		while ($jpp2 = mysql_fetch_array($sqlp2)) {
		echo "<td class='td-tabel-produk'>$jpp2[namaproduk]</td>";
		
		
		#permintaan produk 2 perbulan tahun 2015
		$sqlb2 = mysql_query("SELECT jumlahpermintaan FROM permintaan WHERE idproduk='2' order by bulan asc limit 12");
		while ($jpb2 = mysql_fetch_array($sqlb2)) {
		echo "<td class='td-tabel-produk'>$jpb2[jumlahpermintaan]</td>";
		}
		echo "<td class='td-tabel-produk' style='text-align:center;'><a onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini ?')\" href='?p=permintaandel&idk=$jpp2[idproduk]' class='hapus'><i class='fa fa-trash'></i></a></td>";
		}
		echo "</tr>";
		
		
		echo "<tr>";   
		# untuk nama produk 3
		$sqlp3 = mysql_query("SELECT * FROM produk WHERE idproduk='3'");
		while ($jpp3 = mysql_fetch_array($sqlp3)) {
		echo "<td class='td-tabel-produk'>$jpp3[namaproduk]</td>";
		
		
		#permintaan produk 3 perbulan tahun 2015
		$sqlb3 = mysql_query("SELECT jumlahpermintaan FROM permintaan WHERE idproduk='3' order by bulan asc limit 12");
		while ($jpb3 = mysql_fetch_array($sqlb3)) {
		echo "<td class='td-tabel-produk'>$jpb3[jumlahpermintaan]</td>";
		}
		echo "<td class='td-tabel-produk' style='text-align:center;'><a onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini ?')\" href='?p=permintaandel&idk=$jpp3[idproduk]' class='hapus'><i class='fa fa-trash'></i></a></td>";
		}
		echo "</tr>";
		
		
		echo "<tr>";   
				
		
		# untuk nama produk 4
		$sqlp4 = mysql_query("SELECT * FROM produk WHERE idproduk='4'");
		while ($jpp4 = mysql_fetch_array($sqlp4)) {
		echo "<td class='td-tabel-produk'>$jpp4[namaproduk]</td>";
		
		
		#permintaan produk 4 perbulan tahun 2015
		$sqlb4 = mysql_query("SELECT jumlahpermintaan FROM permintaan WHERE idproduk='4' order by bulan asc limit 12");
		while ($jpb4 = mysql_fetch_array($sqlb4)) {
		echo "<td class='td-tabel-produk'>$jpb4[jumlahpermintaan]</td>";
		}
		echo "<td class='td-tabel-produk' style='text-align:center;'><a onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini ?')\" href='?p=permintaandel&idk=$jpp4[idproduk]' class='hapus'><i class='fa fa-trash'></i></a></td>";
		}
		echo "</tr>";
		}
	echo "</table></div>";
?>
</div>

