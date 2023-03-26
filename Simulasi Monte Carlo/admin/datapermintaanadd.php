
			
<div class='content'>
<h1>
<i class='fa fa-plus'></i> Tambah Data Permintaan Produk</h1>

<div class='content-post'>

<div class='alert-info'><i class='fa fa-exclamation-circle'></i> Silahkan pilih produk dan tahun, kemudian isikan permintaan produk perbulannya.</div>
<?php 
 		include "koneksi.php";
 			
			echo "
				<form method='post' action='?p=datapermintaanhitung' enctype='multipart/form-data'>
				
				<table border='0' cellpadding='0' cellspacing='0' style='width:30%;'>
				<tr><td></td>
				<td class='td-tabel-produk'>
				<div class='select-option'>
    			<select name='tahun' style='font-size:14px;width:150px;'>
					<option value='0'>Pilih Tahun</option>";
					for($a=0;$a<5;$a++){
					$tahun =2014+$a;
					echo "<option value='$tahun'>$tahun</option>";
					}
			echo "</select>
				</div>
				<div class='select-option'>
				<select name='idproduk' style='font-size:14px;width:150px;'>
					<option value='0'>Pilih Produk</option>";
					$sqlp= mysql_query("select * from produk order by idproduk asc");
					while($rp = mysql_fetch_array($sqlp)){
						echo "<option value='$rp[idproduk]'>$rp[namaproduk]</option>";
					}
				echo "</select>
				</div>
				</td></tr>";
            ?>
            <?php 
			$jmlbulan =array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
			for($i=0;$i<count($jmlbulan);$i++){
			$no = $i+1;
            echo "<tr>
                <td class='td-tabel-produk'><input disabled class='td-bulan' name='bulan[]' type='text' value='$jmlbulan[$i]'/></td>
				<td class='td-tabel-produk'><input class='form-input-bulan' name='jumlahpermintaan[]' type='text'/></td>
            </tr>";		
			
            }
			echo " <tr>
            	<td></td><td class='td-tabel-produk'> <button class='btn-simpan' type='submit' name='btnok'><i class='fa fa-check'></i> Hitung</button> <a class='btn-batal' href='?p=datapermintaan'><i class='fa fa-times'></i> Batal</a></td>
            </tr>
			
        </table>
		
    </form></div>";
	
?>