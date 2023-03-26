
<div class="content">
<h1>
<i class="fa fa-folder"></i> Data Produk

<a class="btn btn-primary btn-social pull-right" href="?p=dataprodukadd"><i class="fa fa-plus"></i> Tambah Data</a>
</h1>
<div class='alert-info'><i class='fa fa-exclamation-circle'></i> Data produk yang akan digunakan sebagai percobaan simulasi.</div>
<?php
	echo "<div class='tabel'>";
	echo "<table cellpadding='0' cellspacing='0' border='0' class='tabel-produk'>";
	echo "<thead>";
	echo "<tr class='tr-tabel-produk'>";
	echo "<th class='th-tabel-produk' style='width:5%'>No.</th>";
	echo "<th class='th-tabel-produk' style='width:35%'>Nama Produk</th>";
	echo "<th class='th-tabel-produk' style='width:20%'>Satuan</th>";
	echo "<th class='th-tabel-produk' style='width:23%'>Harga Jual </th>";
	echo "<th class='th-tabel-produk' style='width:17%'>Aksi</th>";
	echo "</tr>
		</thead><tbody>";
	$sqlp = mysql_query("select * from produk order by namaproduk desc");
	$row = mysql_num_rows($sqlp);
	$no=1;
	if($row == 0){
			echo "<tr><td style='border-left:1px solid #f9f9f9;text-align:center;' class='td-tabel-produk' colspan='5' padding='0' align='center'>DATA MASIH KOSONG</td></tr>";
	}else{
			while($rp = mysql_fetch_array($sqlp)){
			echo "
				<tr>
				<td class='td-tabel-produk' style='border-left:1px solid #f9f9f9;text-align:center;'>$no</td>
				<td class='td-tabel-produk'>$rp[namaproduk]</td>
				<td class='td-tabel-produk' style='text-align:center;'>$rp[satuan]</td>
				<td class='td-tabel-produk'>Rp. $rp[harga_jual]</td>";
			echo "<td style='text-align:center;' class='td-tabel-produk'><a href='?p=editproduk&idk=$rp[idproduk]' class='edit'><i class='fa fa-pencil'></i> Edit</a> 
			          <a onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini ?')\" href='?p=produkdel&idk=$rp[idproduk]' class='hapus'><i class='fa fa-trash'></i> Hapus</a></td>";
			echo "</tr>";
			$no++;
		}
	}
	echo "</tbody></table>";
	echo "</div>"
	?>
	</div>

