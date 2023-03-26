<div class='content'>
<h1>
<i class='fa fa-plus'></i> Distribusi Data Permintaan Produk</h1>

<div class='content-post'>
<div class='alert-info'><i class='fa fa-exclamation-circle'></i> Hasil dari perhitungan distribusi penjualan produk, silahkan klik simpan !</div>

<?php
include "koneksi.php";
	if(isset($_POST['btnok'])){
		$jumlahpermintaan = $_POST['jumlahpermintaan'];
		$bulan = $_POST['bulan'];
		$tahunn = $_POST['tahun'];
		$idproduk = $_POST['idproduk'];
		$probabilitas =0;
		$subtotal_plg = $subtotal_thn = $total = 0;
		$b= 0;
		$c=0;
		$hargajuall =0;
		$no = 1;
		$nilaiawal =0;
		$nilaiakhir =0;
		$cdf =0;
		
		echo "<form action='?p=datapermintaanaddaksi' method='post'>";
		foreach($jumlahpermintaan as $key => $val){
			$totaljumlahpermintaan = array_sum($jumlahpermintaan);
		}
		
		echo "<table border='0' cellpadding='0' cellspacing='0' style='width:40%;'>";
		echo "<tr>
		<td class='td-tabel-produk'>Tahun</td><td class='td-tabel-produk'><input class='td-nilai' type='text' name='tahun' value='$tahunn'/></td></tr>";
		echo "<tr>
		<td class='td-tabel-produk'>Produk</td><td class='td-tabel-produk'><input class='td-nilai' type='idproduk' name='idproduk' value='$idproduk'/></td></tr>";
		echo "<tr>
		<td class='td-tabel-produk'>Total Jumlah Permintaan</td>
		<td class='td-tabel-produk'><input class='td-nilai' type='text' name='jumlah' value='$totaljumlahpermintaan'/></td></tr></table>";
		
		echo "<table class='tabel-produk' border='0' cellpadding='0' cellspacing='0' style='width:100%;'>";
		echo "<tr>";
		echo "<th class='th-tabel-produk'>Bulan</th>";
		echo "<th class='th-tabel-produk'>Jumlah Permintaan</th>";
		echo "<th class='th-tabel-produk'>Probabilitas</th>";
		echo "<th class='th-tabel-produk'>Cdf</th>";
		echo "<th class='th-tabel-produk'>Batas ri</th>";
		echo "</tr>";
		
	foreach($jumlahpermintaan as $key => $val){
		$bulann = $bulan[$key];
		$subjumlahpermintaan = number_format($jumlahpermintaan[$key]);
		$totaljumlahpermintaan = array_sum($jumlahpermintaan);
		$jumlahdata = count($jumlahpermintaan)-1;
		$tambahjumlahpermintaan += number_format($jumlahpermintaan[$key],3);
		$probabilitas = number_format($subjumlahpermintaan/$totaljumlahpermintaan,3);
		$cdf = number_format($probabilitas+$cdf,3);
		echo "";
		
		$bln=array(1=>"Januari","Februari","Maret","April","Mei","Juni","July","Agustus","September","Oktober","November","Desember");
		echo "<tr>";
		echo "<td class='td-tabel-produk' style='border-left:1px solid #f9f9f9;'><input style='border:none;' type='hidden' name='bulan[$no]' value='$no'>$bln[$no]</td>";
		echo "<td class='td-tabel-produk'><input class='td-nilai' type='text' name='jumlahpermintaan[$no]' value='$subjumlahpermintaan'></td>";
		echo "<td class='td-tabel-produk'><input class='td-nilai' type='text' name='probabilitas[$no]' value='$probabilitas'></td>";
		echo "<td class='td-tabel-produk'><input class='td-nilai' type='text' name='cdf[$no]' value='$cdf'></td>";
		echo "<td class='td-tabel-produk'><input class='td-nilai' type='text ' name='batas_ri[$no]' value='$nilaiakhir - $cdf '></td>";
		echo "</tr>";
		$nilaiakhir = $nilaiawal+$cdf;
		$no++;
		
	}
		echo "</table>";
		
		
		
		
		echo "<table border='0' cellpadding='0' cellspacing='0' style='width:100%'>";
		echo "<tr><td class='td-tabel-produk'><button class='btn-simpan' type='submit' name='save'><i class='fa fa-check'></i> Simpan</button> <a class='btn-batal' href='?p=datapermintaanadd'><i class='fa fa-times'></i> Batal</a></th></tr></table>";
		echo "</form>";
		echo"</div>";
		
	}
	
	
	
?>
</div></div>